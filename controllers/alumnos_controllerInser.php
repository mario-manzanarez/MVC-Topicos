<?php
   require_once("../models/alumnos_model.php");
   $nc	     = $_POST["no_control"];
   $nombre   = $_POST["nombre"];
   $col      = $_POST["colonia"];
   $tel      = $_POST["telefono"];
   $carr     = $_POST["carrera"];
   $sql      = "call alumnos_insertar('" . $nc . "','". $nombre ."','" . $col . "','" . $tel . "','" . $carr . "')";
   $alumno1  = new alumno_model();
   $info_alumno1 = $alumno1->put_alumno($sql);
   header('Location: http://localhost/MVC/');
?>