<?php require 'header.php'; ?>
<h1 align="center">Reporte Nomina Semanal Patron</h1>
<form>
<div class="row">
	<div class="col-md-6">
		<h3>Nomina</h3>
		<input type="radio" name="nomina">
			<label>Resumina</label>
		<input type="radio" name="nomina">
			<label>Detalada</label>
		<h3>Orden</h3>
		<input type="radio" name="orden">
			<label>Numero Empleado</label><br>
		<input type="radio" name="orden">
			<label>Nombre Empleado</label><br>
		<input type="radio" name="orden">
			<label>Departamento</label><br>
			<br>
		<label>No. Periodo: </label>
			<input type="number" name=""><br>
		<label>Tipo de Pago: </label>
			<select>
				<option>Todos</option>
				<option>Efectivo</option>
				<option>Cheque</option>
				<option>Trans Bancaria</option>
			</select>
	</div>
	<div class="col-md-6">
		<h3>Empleados</h3>
		<input type="radio" name="empleados"><label>Total</label>
		<input type="radio" name="empleados"><label>Rango</label><br>
		<label>Desde: </label><input type="text" name=""><br>
		<label>Hasta: </label><input type="text" name=""><br>
		<h3>Departamentos</h3>
		<input type="radio" name="departamentos"><label>Total</label>
		<input type="radio" name="departamentos"><label>Rango</label><br>
		<label>Desde: </label><input type="text" name=""><br>
		<label>Hasta: </label><input type="text" name=""><br>
	</div>
</div>
<input type="submit" name="" value="Aceptar" class="btn btn-success">
</form>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
<?php require 'footer.php'; ?>