<?php require 'header.php'; ?>
<hr>
<h1 align="center">Generador de Reportes Nominas</h1>
<hr>
<br>
<div class="container">
<form>
	<div class="row" style="background-color:#9FCFFC ">
		<div class="col-md-2">
			
		</div>
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
			<label>Periodo: </label>
			<input type="number" name="">
			<label>Fecha Inicial: </label>
			<input type="date" name="">
			<label>Fecha Final: </label>
			<input type="date" name="">
		</div>
		<div class="col-md-4">
			<input type="checkbox" name="nomina"><label>Mensual</label><br>
			<input type="checkbox" name="nomina"><label>Anual</label>
		</div class="col-md-2"> 
		<div>
			
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