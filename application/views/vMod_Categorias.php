<?php require 'header.php'; ?>
<h1 align="center">Modificacion de categorias</h1>
<form  action="<?php echo base_url(); ?>cCategorias_puestos/actualizar_cat" method="POST">
	<hr>
	<div class="row">
		<div class="col-md-4">
			<label>Numero</label>
			<input type="number" name="num_cat" value="<?php echo $num_cat;?>"><br>
		</div>
		<div class="col-md-4">
			<label>Descripcion</label>
			<input type="text" name="desc_cat" value="<?php echo $desc_cat;?>"><br>			
		</div>
		<div class="col-md-4">
			<label>Sueldo Diario: </label>
			<input type="number" name="sueldo_cat" value="<?php echo $sueldo_cat;?>">			
		</div>
	</div>
	<input type="submit" name="" value="Aceptar Y Guardar" class="btn btn-success">
</form>
<?php require 'footer.php'; ?>