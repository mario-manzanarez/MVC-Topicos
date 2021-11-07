<?php
   require_once("../models/alumnos_model.php");
   $alumno1      = new alumno_model();
   $info_alumno1 = $alumno1->get_alumno();
   require_once("../views/consulta_global_view.php");
?>