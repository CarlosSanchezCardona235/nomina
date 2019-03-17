<?php require 'header.php' ?>
<h1 align="center">Tablas de Impuestos (I.S.R)</h1>
<form class="form-horizontal" role="form" action="<?php echo base_url(); ?>cTablas_ISR/guardar" method="POST">
		<label>Seleccione la unidad de medida y actualizacion(UMA)</label><br>
		<?php  foreach($uma_tablas as $uma_tabla) { ?>
		<select name="uma">
			<option><?php echo $uma_tabla->uma;?></option>
			<option value="80.60">1 - 80.60</option>
			<option value="88.36">2 - 88.36</option>
		</select><br> 
		<?php } ?>
		<input type="submit"  value="Aceptar" class="btn btn-success" ><br>
	</form>
	<!--<a href="<?php //base_url();?>cMenu_principal" class="btn btn-danger btn-lg danger" role="button">Salir</a>-->
<br>
<br>
<br>
<form>
	<label>Mes: </label>
	<select>
		<option>Enero - 1</option>
		<option>Febrero - 2</option>
		<option>Marzo - 3</option>
		<option>Abril - 4</option>
		<option>Mayo - 5</option>
		<option>Junio - 6</option>
		<option>Julio - 7</option>
		<option>Agosto - 8</option>
		<option>Septiembre - 9</option>
		<option>Octubre - 10</option>
		<option>Noviembre - 11</option>
		<option>Dciembre - 12</option>		
	</select>
		<select>
			<option>Imp. Semanales</option>
			<option>Imp. Decemanales</option>
			<option>Imp. Quincenales</option>
			<option>Imp. Mensuales</option>
			<option>Imp. Anuales</option>
			<option>Imp. Especiales</option>
		</select><br>
		<fieldset>
		<input type="radio" name="impuesto"><label>Impuesto</label>
		<input type="radio" name="impuesto"><label>Subsidio al Empleo</label><br>
		</fieldset>
	<table class="table">
		<tr class="btn-inverse">
			<td>Numero</td>
			<td>Limite Inferior</td>
			<td>Credito al Salario</td>
		</tr>
	</table>
	<a href="" class="btn btn-primary" role="button">Modificar</a>
	<a href="" class="btn btn-info" role="button">Borrar</a>
	<input type="submit" value="Aceptar" name="" class="btn btn-success"><br>
	<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
</form>



<?php require 'footer.php' ?>