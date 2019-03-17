<?php require 'header.php'; ?>
<hr>
<h1 align="center">Analisis de Conceptos</h1>
<hr>
<br>
<div class="container">
<form>
	<label>Tipo de Nomina: </label>
		<select>
			<option>Todas</option>
			<option>Semanal</option>
			<option>Decenal</option>
			<option>Quincenal</option>
			<option>Mensual</option>
		</select>
		
	<label>Fecha Inicial: </label><input type="date" name="">
	<label>Fecha Final: </label><input type="date" name="">
		
	<label>Orden Por: </label>
		<select>
			<option>Departamento</option>
			<option>Empleado</option>
			<option>Concepto</option>
			<option>Fecha</option>
		</select>
		<br>
		<br>
	<div class="row">
		<div class="col-md-4" style="background-color:#9FCFFC ">
				<label>Concepto</label>
				<br>
				<input type="radio" name="concepto"><label>Total</label>
				<br>
				<input type="radio" name="concepto"><label>Rango</label><br>
				<label>Desde: </label><input type="number" name=""><br>
				<label>Hasta: </label><input type="number" name="">	
		</div>
		<div class="col-md-4" style="background-color:#9FCFFC ">
				<label>Empleados</label>
				<br>
				<input type="radio" name="empleados"><label>Total</label>
				<br>
				<input type="radio" name="empleados"><label>Rango</label><br>
				<label>Desde: </label><input type="number" name=""><br>
				<label>Hasta: </label><input type="number" name="">	
		</div> 
		
		<div class="col-md-4" style="background-color:#9FCFFC ">
			<label>Departamentos</label>
				<br>
				<input type="radio" name="departamentos"><label>Total</label>
				<br>
				<input type="radio" name="departamentos"><label>Rango</label><br>
				<label>Desde: </label><input type="number" name=""><br>
				<label>Hasta: </label><input type="number" name="">
		</div>
	</div>
	<br>
	<div class="text-center">
		<input type="submit" value="Imprimir" name="" class="btn btn-inverse btn-lg">
		</form >
		<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger btn-lg" role="button">Salir</a>
	</div>
<?php require 'footer.php'; ?>
</div>