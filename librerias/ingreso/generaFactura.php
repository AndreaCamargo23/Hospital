<?php

	//print_r($_REQUEST);
	//exit;
	//echo base64_encode('2');
	//exit;
	session_start();//validar variables de session
	if(empty($_SESSION['active']))
	{
		header('location: ../');
	}

	include "../../conexion.php";//conexion a la base de datos 
	require_once '../pdf/vendor/autoload.php';//incluye la libreria de pdf
	use Dompdf\Dompdf;//usar el archivo

	if(empty($_REQUEST['cl']) || empty($_REQUEST['f']))//validar que las variables no esten vacias
	{
		echo "No es posible generar la factura.";
	}else{
		$codCliente = $_REQUEST['cl'];
		$noFactura = $_REQUEST['f'];
		$anulada = '';

		$query_config   = mysqli_query($conection,"SELECT * FROM configuracion");//primera consulta
		$result_config  = mysqli_num_rows($query_config);
		if($result_config > 0){//validar si vienen datos
			$configuracion = mysqli_fetch_assoc($query_config);
		}


		$query = mysqli_query($conection,"SELECT f.nofactura, DATE_FORMAT(f.fecha, '%d/%m/%Y') as fecha, DATE_FORMAT(f.fecha,'%H:%i:%s') as  hora, f.codcliente, f.estatus,
												 v.nombre as vendedor,
												 cl.nit, cl.nombre, cl.telefono,cl.direccion
											FROM factura f
											INNER JOIN usuario v
											ON f.usuario = v.idusuario
											INNER JOIN cliente cl
											ON f.codcliente = cl.idcliente
											WHERE f.nofactura = $noFactura AND f.codcliente = $codCliente  AND f.estatus != 10 ");

		$result = mysqli_num_rows($query);
		if($result > 0){

			$factura = mysqli_fetch_assoc($query);
			$no_factura = $factura['nofactura'];

			if($factura['estatus'] == 2){
				$anulada = '<img class="anulada" src="img/anulado.png" alt="Anulada">';
			}

			$query_productos = mysqli_query($conection,"SELECT p.descripcion,dt.cantidad,dt.precio_venta,(dt.cantidad * dt.precio_venta) as precio_total
														FROM factura f
														INNER JOIN detallefactura dt
														ON f.nofactura = dt.nofactura
														INNER JOIN producto p
														ON dt.codproducto = p.codproducto
														WHERE f.nofactura = $no_factura ");
			$result_detalle = mysqli_num_rows($query_productos);

			ob_start();//guardar en memoria 
		    include(dirname('__FILE__').'/factura.php');//este archivo //acceder a la direccion del archivo 
		    $html = ob_get_clean();//caragar todo el html de ese archivo

			// instantiate and use the dompdf class
			$dompdf = new Dompdf();//creacion de un objeto

			$dompdf->loadHtml($html);//cargar el contenido que se va a mostrar en ese pdf
			// (Optional) Setup the paper size and orientation
			$dompdf->setPaper('letter', 'portrait');//El tamaño del papel y la horientacion
			// Render the HTML as PDF
			$dompdf->render();//Leer el html para trasladarlo a pdf
			// Output the generated PDF to Browser
			$dompdf->stream('factura_'.$noFactura.'.pdf',array('Attachment'=>0));//especificar la salida
			exit;
		}
	}

?>