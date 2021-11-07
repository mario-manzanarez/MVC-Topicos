<?php
        require_once("../models/alumnos_model.php");
        $boton = $_POST["boton1"];
        if ($boton == "Borrar por No control"){
	    	$nc	  = $_POST["no_control"];
	    	$sql  = "call alumno_eliminarNC('" . $nc . "')"; 
        }
        if($boton == "Borrar por Nombre"){
	        $nom  = $_POST["nombre"];
	        $sql  = "call alumno_eliminiarNombre('" . $nom . "')";  
	}   
	$alumno1    = new alumno_model();
        $info_alumno1 = $alumno1->put_alumno($sql);
        if ($info_alumno1 == null) {
            echo "<script language='javascript' > alert('no se puedo realizar'); window.history.back();</script>";
        }else
            header('Location: http://localhost/MVC/');

?>