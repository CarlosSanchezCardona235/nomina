<?php require 'header.php' ?>
<form action="<?php base_url(); ?>cCategorias_puestos/guardar" method="POST">
	<h1 align="center">Categorias y Puestos</h1>
	<hr>
	<h6>Agregar categoria o puesto</h6>
	<div class="row">
		<div class="col-md-4">
			<label>Numero</label>
			<input type="number" name="num_cat"><br>
		</div>
		<div class="col-md-4">
			<label>Descripcion</label>
			<input type="text" name="desc_cat"><br>			
		</div>
		<div class="col-md-4">
			<label>Sueldo Diario: </label>
			<input type="number" name="sueldo_cat" placeholder="0.0000">			
		</div>
	</div>
	<input type="submit" name="" value="Aceptar Y Guardar" class="btn btn-success">
</form>
<br>
<div class="table-responsive">
	<table class="table">
		<tr class="btn-inverse">
			<td>Numero</td>
			<td>Descripcion</td>
			<td>Sueldo Diario</td>
		</tr>
		 <?php 
			foreach($categorias as $categoria) { ?>
				<tr>
					<td><?php echo $categoria->num_cat;?></td>
					<td><?php echo $categoria->desc_cat;?></td>
					<td><?php echo $categoria->sueldo_cat;?></td>
			    </tr>
		<?php } ?>
	</table>
</div>
<br>
<form action="<?php base_url(); ?>cCategorias_puestos/buscar_categoria" method="POST">
	<label>Ingresa numero categoria</label><br>
	<input type="number" name="num_cat">
	<input type="submit" class="btn btn-inverse" value="Modificar">
</form>
<form action="<?php base_url(); ?>cCategorias_puestos/eliminar_categoria" method="POST">
	<input type="number" name="num_cat">
	<input type="submit" class="btn btn-danger" value="Eliminar">	
</form>
<br>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger">Salir</a>
<?php require 'footer.php' ?>