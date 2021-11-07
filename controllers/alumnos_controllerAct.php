<?php
            require_once("../models/alumnos_model.php");
            $nc	    	= $_POST["no_control"];
	    $nombre	= $_POST["nombre"];
	    $col        = $_POST["colonia"];
	    $tel        = $_POST["telefono"];
	    $carr	= $_POST["carrera"];
	    $sql = "call alumnos_modificar('" . $nc . "','". $nombre ."','" . $col . "','" . $tel . "','" . $carr . "')";   
	    $alumno1    = new alumno_model();
            $reg        = $alumno1->ind_alumno($sql);
        header('Location: http://localhost/MVC/');
?>