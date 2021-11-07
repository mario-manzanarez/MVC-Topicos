<?php

	/***
	 * Clase que funciona como configuración a la base de datos
	 */
   class Conectar{

	/**
	 * @return Mysqli
	 */
   	 public static function conexion(){
   	 	$conexion = new mysqli("localhost","root","","escuela");
   	 	$conexion->query("SET NAMES 'utf8'");
   	 	return $conexion;
   	 }
   }

?>