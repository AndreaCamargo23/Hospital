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
            //Realizar la conexion a la bd
<<<<<<< HEAD
            $link = new PDO("mysql:host=".servidor.";port=33065;dbname=".bdname,usuario,password,$op);
=======
<<<<<<< HEAD
            $link = new PDO("mysql:host=".servidor.";dbname=".bdname,usuario,password,$op);
=======
            $link = new PDO("mysql:host=".servidor.";port=3308;dbname=".bdname,usuario,password,$op);
>>>>>>> bdf7268a04d3d022266c10a96cdff309943f90ee
>>>>>>> a796dc00f4eb9b83b182d76d8099a4f150fc891c
            return $link;
        }catch(Exception $ex){//Por si se presenta alguna excepción 
            die("Error al conectar en la base de datos ".$ex->getMessage()); 
        }
    }
}
?>