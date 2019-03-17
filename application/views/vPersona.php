<h1>Registro de Usuario</h1>
<form action="<?php echo base_url(); ?>cPersona/guardar" method="POST">
	<table>
		<tr>
			<td><label>DNI: </label></td>
			<td><input type="text" name="dni"></td>
		</tr>
		<tr>
			<td><label>Nombre: </label></td>
			<td><input type="text" name="nombre"></td>
		</tr>
		<tr>
			<td><label>Ap Paterno: </label></td>
			<td><input type="text" name="appaterno"></td>
		</tr>
		<tr>
			<td><label>Ap Materno: </label></td>
			<td><input type="text" name="apmaterno"></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td><label>Fecha Nacimiento</label></td>
			<td><input type="date" name="fecnac"></td>
		</tr>
		<tr>
			<td colspan="2">Usuario</td>
		</tr>
		<tr>
			<td><label>Usuario</label></td>
			<td><input type="text" name="usuario"></td>
		</tr>
		<tr>
			<td><label>Clave</label></td>
			<td><input type="password" name="clave"></td>
		</tr>
		<tr>
		<td><input type="submit" value="Guardar" class="btn btn-success"></td>
		</tr>
	</table>
</form>