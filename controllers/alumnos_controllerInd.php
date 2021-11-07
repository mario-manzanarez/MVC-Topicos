<?php
        require_once("../models/alumnos_model.php");
        $boton = $_POST["boton1"];
        if ($boton == "Búsqueda por: No control"){
	    	$nc	  = $_POST["no_control"];
	    	$sql  = "call alumnos_BuscarNC('" . $nc . "')"; 
        } 
        if ($boton == "Búsqueda por: Nombre"){
	        $nom  = $_POST["nombre"];
	        $sql  = "call alumnos_BuscarNombre('" . $nom . "')";  
	}   
	$alumno1    = new alumno_model();
        $reg        = $alumno1->ind_alumno($sql);
        require_once("../views/ConAct.php");
