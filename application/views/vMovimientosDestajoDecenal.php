<?php require 'header.php'; ?>
<h1>Movimientos por Destajo Decenal</h1>
<form>
<div class="row">
	<div class="col-md-6">
		<h3>Ordenado por: </h3>
			<input type="radio" name="ordenado">
				<label>Clavde de Destajo</label><br>
			<input type="radio" name="ordenado">
				<label>No. de Empleado</label><br>
			<label>Destajo: </label>
				<input type="text" name=""><br>
				<input type="text" name="">
	</div>
	<div class="col-md-6">
		<h3>Empleados</h3>
		<input type="radio" name="empleados"><label>Total</label>
		<input type="radio" name="empleados"><label>Rango</label><br>
		<label>Desde: </label><input type="text" name=""><br>
		<label>Hasta: </label><input type="text" name=""><br>
	</div>
</div>
<input type="submit" name="" value="Aceptar" class="btn btn-success">
</form>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
<?php require 'footer.php'; ?>