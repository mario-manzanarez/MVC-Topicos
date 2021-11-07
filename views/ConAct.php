<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
</body>
<h2 align="center"> Consultar / Actualizar </h2>
<hr> <br>
<form name="formulario" method="post" action="../controllers/alumnos_controllerAct.php">
	<table align="center" border="1">
		<tr>
			<th>No Contro</th>
			<th>Nombre</th>
			<th>Colonia</th>
			<th>Teléfono</th>
			<th>Carrera</th>
		</tr>
		<tr>  
			<td><input type="text" name="no_control" value= <?=$reg["NC"]?> ></td>
			<td><input type="text" name="nombre" value= <?=$reg["Nombre"]?>></td>
			<td><input type="text" name="colonia" value= <?=$reg["Direccion"]?> ></td>
			<td><input type="text" name="telefono" value= <?=$reg["Telef"]?> ></td>
			<td><input type="text" name="carrera" value= <?=$reg["Carrera"]?> ></td>
                       
		</tr>
		<tr>
			<td align="center"><input type="submit" name="boton1" value="Actualizar"></td>
			<td colspan="3" bgcolor="blue"> </td>
			<td align="center"><input type="button" name="boton2" value="Salir" onclick="window.history.back()"></td>>
		</tr>
	</table>   
</form>>
</body>
</html>

