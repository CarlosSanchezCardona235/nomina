<?php require 'header.php'; ?>
<hr>
<h1 align="center">Ausencias e Incapacidades</h1>
<hr>
<br>
<div class="container">
<form>
	<div class="row">
		<div class="col-md-4">
			<label>Tipo de Nomina: </label>
				<select>
					<option>Todas</option>
					<option>Semanal</option>
					<option>Decenal</option>
					<option>Quincenal</option>
					<option>Mensual</option>
				</select>
				<br>
			<label>Mes: </label>
				<select>
					<option>Enero</option>
					<option>Febrero</option>
					<option>Marzo</option>
					<option>Abril</option>
					<option>Mayo</option>
					<option>Junio</option>
					<option>Julio</option>
					<option>Agosto</option>
					<option>Septiembre</option>
					<option>Octubre</option>
					<option>Noviembre</option>
					<option>Diciembre</option>
				</select>
				<br>
				<label>Orden Por: </label>
				<select>
					<option>Numero de Empleado</option>
					<option>Nombre de Empleado</option>
					<option>Concentrado</option>
				</select>
				<br>
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