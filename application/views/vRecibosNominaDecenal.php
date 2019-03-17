<?php require 'header.php'; ?>
<h1 align="center">Recibos de Nomina Decenal</h1>
<form>
<div class="row">
	<div class="col-md-4">
		<br>
		<br>
		<br>
		<label>Folio Inicial: </label>
			<input type="number" name=""><br>
		<label>No Periodo: </label>
			<input type="number" name=""><br>
			<input type="text" name=""><br>
		<br>
		<br>
		<h6>Ordenado por: </h6>
			<input type="radio" name="ordenado">
			<label>Empleado</label>
			<input type="radio" name="ordenado">
			<label>Depto.</label><br>
			<input type="checkbox" name="">
			<label>Resumido</label>
	</div>
	<div class="col-md-4">
		<h3>Empleados: </h3>
		<input type="radio" name="empleados"><label>Total</label>
		<input type="radio" name="empleados"><label>Rango</label><br>
		<label>Desde: </label><input type="text" name=""><br>
		<label>Hasta: </label><input type="text" name=""><br>
		<br>
		<br>
		<textarea name="leyenda" rows="5" cols="30">Leyenda</textarea><br>
	</div>
	<div class="col-md-4">
		<h3>Departamentos: </h3>
		<input type="radio" name="departamentos"><label>Total</label>
		<input type="radio" name="departamentos"><label>Rango</label><br>
		<label>Desde: </label><input type="text" name=""><br>
		<label>Hasta: </label><input type="text" name=""><br>
		<br>
		<br>
		<br>
		<br>
		<input type="checkbox" name="copia">
			<label>Con Copia </label>
	</div>
</div>
	<a href="" class="btn btn-inverse" role="button">Catalogo de formatos</a>
<input type="submit" name="" value="Aceptar" class="btn btn-success">
</form>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
<?php require 'footer.php'; ?>