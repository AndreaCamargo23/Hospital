<?php
class Conexion{
    public static function Conectar(){
        //Definición de variables 
        //Primer campo: Nombre de la variable
        //Segundo campo: valor de la variable
        define('servidor','localhost');
        define('usuario','root');
        define('password','');
        define('bdname','bd_hospital');
        $op=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');//pARA LAS TILDES, COMAS DE LA BD
        try{
<<<<<<< HEAD
            $link = new PDO("mysql:host=".servidor.";port=3308;dbname=".bdname,usuario,password,$op);

=======
            //Realizar la conexion a la bd
            $link = new PDO("mysql:host=".servidor.";port=33065;dbname=".bdname,usuario,password,$op);
>>>>>>> cef77f4d83d8fbe55695505df58d1056ca7794b8
            return $link;
        }catch(Exception $ex){//Por si se presenta alguna excepción 
            die("Error al conectar en la base de datos ".$ex->getMessage()); 
        }
    }
}
?>