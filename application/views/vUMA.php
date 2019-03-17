<?php require 'header.php' ?>

<h1 align="center">UMA y SALARIOS MINIMO</h1>
	
	<form>
		<label>Seleccione la unidad de medida y actualizacion(UMA)</label><br>
		<select name="uma">
			<option value="80.60">1 - 80.60</option>
			<option value="88.36">2 - 88.36</option>
		</select><br> 
		<input type="submit"  value="Aceptar" class="btn btn-success" ><br>
	</form>
	<a href="<?php base_url();?>cMenu_principal" class="btn btn-danger btn-lg danger" role="button">Salir</a>
<?php require 'footer.php' ?>