<?php require 'header.php' ?>
<h1 align="center">Acerca de ...</h1>
<br>
<form>
	<div class="row">
		<div class="col-md-6">
			<br>
			<label>Usuario: </label>
			<input type="number" name=""><br>
			<label>Se autoriza este producto a: </label>
			<input type="text" name="">	
		</div>
		<div class="col-md-6">
			<img src="<?php base_url();?>static/images/Captura.PNG"  width="400" height="200" aling="center">
		</div>

	</div>
	<br>
	<p>
		Esta aplicacion web esta protegida por la leyes de derechos de autor. La reproduccion o distribucion no autorizada de este programa o de cuaquier parte del mismo da lugar a responsabilidades civiles y criminales, lascuales seran perseguidas por la ley.
	</p>
</form>
<br><label>Elaborado por: Carlos José Sánchez Cardona</label><br>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger btn-lg" role="button">Salir</a>

<?php require 'footer.php' ?>