<?php require 'header.php'; ?>
<h1 align="center">Reporte de Nómina Semanal</h1>
<hr>
<form>
<label>Nomina: </label>	
	<input type="radio" name="nomina">
	<label>Resumida</label>
	<input type="radio" name="nomina">
	<label>Detallada</label><br>
<div class="row">
	<div class="col-md-4">
		<h3>Orden por: </h3>
		<input type="radio" name="orden"><label>No Empleado</label><br>
		<input type="radio" name="orden"><label>Departamento</label><br>
		<input type="radio" name="orden"><label>No Percep/Deduc</label><br>
	</div>
	<div class="col-md-4">
		<h3>Empleados: </h3>
		<input type="radio" name="empleados"><label>Total</label>
		<input type="radio" name="empleados"><label>Rango</label><br>
		<label>Desde: </label><input type="text" name=""><br>
		<label>Hasta: </label><input type="text" name=""><br>
	</div>
	<div class="col-md-4">
	<h3>Departamentos: </h3>
		<input type="radio" name="departamentos"><label>Total</label>
		<input type="radio" name="departamentos"><label>Rango</label><br>
		<label>Desde: </label><input type="text" name=""><br>
		<label>Hasta: </label><input type="text" name=""><br>
	</div>
</div>
<br>
<label>No de Periodo: </label><input type="text" name="">
<label>Tipo de Pago: </label>
<select>
	<option>Todos</option>
	<option>Efectivo</option>
	<option>Cheque</option>
	<option>Trans Bancaria</option>
</select><br>
<input type="submit" name="" value="Aceptar" class="btn btn-success">
</form>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
<?php require 'footer.php'; ?>