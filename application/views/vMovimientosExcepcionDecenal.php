<?php require 'header.php'; ?>
<h1 align="center">Movimientos por Excepcion Decenal</h1>
<form>
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
</div>
<label>Departamento: </label>
<input type="number" name="">
<input type="text" name=""><br>
<input type="submit" name="" value="Aceptar" class="btn btn-success"><br>
</form>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
<?php require 'footer.php'; ?>