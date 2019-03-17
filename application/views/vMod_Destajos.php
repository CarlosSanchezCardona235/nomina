<?php require 'header.php'; ?>
<h1>Modificacion destajos</h1>
<form action="<?php echo base_url(); ?>cDestajos/actualizar_destajo" method="POST">
	<div class="row">
		<div class="col-md-6">
			<label>Clave: </label>
			<input type="number" name="clave_destajo" value="<?php echo $clave_destajo;?>"><br>
			<label>Descrpcion: </label>
			<input type="text" name="desc_destajo" value="<?php echo $desc_destajo;?>"><br>		
		</div>
		<div class="col-md-6">
			<label>Unidad Medida: </label>
			<input type="text" name="unidad_med" value="<?php echo $unidad_med;?>"><br>
			<label>Tarifa/Unidad: </label>
			<input type="number" name="tarifa_unidad" step="0.000" placeholder="0.000" value="<?php echo $tarifa_unidad;?>"><br>	
		</div>
	</div>
	<input type="submit" value="Aceptar y Guardar" name="" class="btn btn-success">
</form>
<?php require 'footer.php'; ?>