<?php require 'header.php' ?>
<h1 align="center">Aguinaldos, Primas y Vacaciones</h1>
<form>
	<label>Años Cumplidos: </label>
	<input type="number" name="">
	<input type="radio" name="sindicalizados" value="sindicalizado"><label>Sindicalizados</label>
	<input type="radio" name="sindicalizados" value="no sindicalizado"><label>No Sindicalizados</label>
<div class="row">
	<div class="col-md-6">
		<h6>Sindicalizados</h6>
		<label>Dias Vacaciones: </label>
		<input type="" name=""><br>
		<label>Dias Aguinaldo: </label>
		<input type="" name=""><br>
		<label>Factor Integral: </label>
		<input type="" name=""><br>
	</div>
	<div class="col-md-6">
		<br>
		<br>
		<label>Primas % </label><br>
		<label>Vacacional</label>
		<input type="" name=""><br>
		<label>Dominical: </label>
		<input type="" name=""><br>		
	</div>
</div>
<input type="submit" name="" value="Aceptar" class="btn btn-success">
</form>
<br>
<div class="table-responsive">
	<table class="table">
		<tr class="btn-inverse">
			<td>Años</td>
			<td>Dias Vac.</td>
			<td>Dias Agui.</td>
			<td>Fact. Int.</td>
			<td>%Prima Vac.</td>
			<td>%Prima Dom.</td>
		</tr>
	</table>
</div>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>

<?php require 'footer.php' ?>