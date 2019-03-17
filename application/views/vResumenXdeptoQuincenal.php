<?php require 'header.php'; ?>
<h1 align="center">Resumen por Departamento Quincenal</h1>
<form>
<div class="row">
	<div class="col-md-4">
		<input type="radio" name="conepto">
			<label>Total: </label>
		<input type="radio" name="concepto">
			<label>Rango: </label><br>
		<label>Desde: </label>
		<input type="number" name=""><br>
		<label>Hasta: </label>
		<input type="number" name="">
	</div>
	<div class="col-md-6">
		<br>
		<br>
		<input type="checkbox" name="">
			<label>Concepto</label>
	</div>
</div>
<br>
<input type="submit" name="" value="Aceptar" class="btn btn-success">
</form>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
<?php require 'footer.php'; ?>