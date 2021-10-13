<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Historia Clinica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<img class="anulada" src="img/anulado.png" alt="Anulada">
<div id="page_pdf">
	<table id="factura_head">
		<tr>
			<td class="logo_factura">
				<div>
					<img src="img/hospital.png">
				</div>
			</td>
			<td class="info_empresa">
				<div>
					<span class="h2">HOSPITAL BAM</span>
					<p>Calle 13 carrera 16</p>
					<p>Teléfono: +(601) 3625986</p>
					<p>Email: info@gmail.com</p>
				</div>
			</td>
			<td class="info_factura">
				<div class="round">
					<span class="h3">Factura</span>					
					<p>No. Factura: <strong>000001</strong></p>
					<p>Fecha de Emision: 12/10/2021</p>
					<p>Hora: 10:30am</p>
					<p>Fecha Vencemiento: 12/10/2021</p>
					<p>Estado: 12/10/2021</p>
				</div>
			</td>
		</tr>
	</table>
	<table id="factura_cliente">
		<tr>
			<td class="info_cliente">
				<div class="round">
					<span class="h3">Paciente</span>
					<table class="datos_cliente">
						<tr>
							<td><label>Nombre:</label><p>Andrea Brandon Michael</p></td>
							<td><label>Edad:</label> <p>7854526</p></td>
						</tr>
						<tr>
							<td><label>Identificacion:</label> <p>7854526</p></td>
							<td><label>Fecha de nacimiento:</label> <p>00/00/0000</p></td>
						</tr>
						<tr>
							<td><label>Dirección:</label> <p>Carrera 13b</p></td>
							<td><label>Genero:</label> <p>Calzada Buena Vista</p></td>
						</tr>
						<tr>
							<td><label>Telefono:</label> <p>7854526</p></td>
							<td><label>Rh:</label> <p>Calzada Buena Vista</p></td>
						</tr>
						
					</table>
					<hr>
					<span class="h3">Ingreso</span>
					<table class="datos_cliente">
						<tr>
							<td><label>Fecha de ingreso:</label><p>Andrea Brandon Michael</p></td>
							<td><label>Cama:</label> <p>7854526</p></td>
						</tr>
						<tr>
							<td><label>Fecha salida:</label> <p>7854526</p></td>
							<td><label>Descripcion:</label> <p>Carrera 13b</p></td>
						</tr>
						<tr>
							<td><label>Habitacion:</label> <p>7854526</p></td>
						</tr>
						
					</table>
				</div>
			</td>

		</tr>
	</table>
	<h3>Empleados que lo atendieron</h3>
	<table id="factura_detalle">
			<thead>
				<tr>
					<th width="50px"></th>
					<th class="textleft">Nombre</th>
					<th class="textleft">Apellido</th>
					<th class="textleft">Cargo</th>
				</tr>
			</thead>
			<tbody id="detalle_productos">
				<tr>
					<td class="textcenter"></td>
					<td>Plancha</td>
					<td>Plancha</td>
					<td>516.67</td>
				</tr>
				<tr>
					<td class="textcenter"></td>
					<td>Plancha</td>					
					<td>54151</td>
					<td>516.67</td>
				</tr>
				<tr>
					<td></td>
					<td>Plancha</td>
					<td>4154165</td>
					<td>516.67</td>
				</tr>
				<tr>
					<td></td>
					<td>Plancha</td>
					<td>545161</td>
					<td>516.67</td>
				</tr>
				<tr>
					<td class="textcenter"></td>
					<td>Plancha</td>
					<td>85456416</td>
					<td >516.67</td>
				</tr>
				<tr>
					<td class="textcenter"></td>
					<td>Plancha</td>
					<td>546416216</td>
					<td >516.67</td>
				</tr>
			</tbody>
	</table>
	<h3>Servicios Adquiridos</h3>
	<table id="factura_detalle">
			<thead>
				<tr>
					<th width="50px">No</th>
					<th class="textleft">Servicio</th>
					<th></th>
					<th class="textright" width="150px">Precio Unitario.</th>
				</tr>
			</thead>
			<tbody id="detalle_productos">
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td></td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td></td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td></td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td></td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td></td>
					<td class="textright">516.67</td>
				</tr>
				<tr>
					<td class="textcenter">1</td>
					<td>Plancha</td>
					<td></td>
					<td class="textright">516.67</td>
				</tr>
			</tbody>
			<tfoot id="detalle_totales">
				<tr>
					<td colspan="3" class="textright"><span>SUBTOTAL Q.</span></td>
					<td class="textright"><span>516.67</span></td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span>IVA (12%)</span></td>
					<td class="textright"><span>516.67</span></td>
				</tr>
				<tr>
					<td colspan="3" class="textright"><span>TOTAL Q.</span></td>
					<td class="textright"><span>516.67</span></td>
				</tr>
		</tfoot>
	</table>
	<div>
		<p class="nota">Este es un documento informativo<br> Reporte del hospital BAM</p>
		
	</div>

</div>

</body>
</html>