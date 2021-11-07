<?php
   class Conectar{
   	 public static function conexion(){
   	 	$conexion = new mysqli("localhost","root","12345678","escuela");
   	 	$conexion->query("SET NAMES 'utf8'");
   	 	return $conexion;
   	 }
   }

?>