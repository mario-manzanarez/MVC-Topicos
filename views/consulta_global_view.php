<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ejemplo1 - BD: Consultas</title>
	<meta content="text/html" charset="utf-8" />
</head>
<body>
	<h2 align="center" > Ejemplo 1 - MVC : Consultas</h2>
	<hr><br>
	<table align="center" border="1">
		<tr bgcolor="00AAFF">
			<th>No. de control</th>
			<th>Nombre </th>
			<th>Dirección</th>
			<th>Teléfono</th>
			<th>Carrera</th>
		</tr>
        <?php
	       foreach ($info_alumno1 as $datos) {
	       	  echo ("<tr>");
                  echo ("<td>" . $datos["NC"] . "</td>");
		  echo ("<td>" . $datos["Nombre"] . "</td>");
		  echo ("<td>" . $datos["Direccion"] . "</td>");
		  echo ("<td>" . $datos["Telef"] . "</td>");
		  echo ("<td>" . $datos["Carrera"] . "</td>");
	       	  echo ("</tr>");
	       }
	    ?>
	</table>
</body>
</html>