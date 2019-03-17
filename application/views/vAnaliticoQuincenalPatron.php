<?php require 'header.php'; ?>
<h1 align="center">Reporte Analitico Quincenal Patron</h1>
<form>
<div class="row">
	<div class="col-md-6">
		<h3>Ordenado por: </h3>
		<input type="radio" name="ordenado">
			<label>Concepto-Empleado</label><br>
		<input type="radio" name="ordenado">
			<label>Concepto-Depto.</label><br>
		
	</div>
	<div class="col-md-6">
		<h3>Concepto: </h3>
		<input type="radio" name="conepto">
			<label>Total: </label>
		<input type="radio" name="concepto">
			<label>Rango: </label><br>
		<label>Desde: </label>
		<input type="number" name=""><br>
		<label>Hasta: </label>
		<input type="number" name="">
	</div>
</div>
<input type="submit" name="" value="Aceptar" class="btn btn-success">
</form>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
<?php require 'footer.php'; ?>