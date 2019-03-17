<?php require 'header.php' ?>
<h1 align="center">Destajos</h1>
<hr>
<h6>Nuevo Destajo</h6>
<form action="<?php echo base_url(); ?>cDestajos/guardar" method="POST">
	<div class="row">
		<div class="col-md-6">
			<label>Clave: </label>
			<input type="number" name="clave_destajo"><br>
			<label>Descrpcion: </label>
			<input type="text" name="desc_destajo"><br>		
		</div>
		<div class="col-md-6">
			<label>Unidad Medida: </label>
			<input type="text" name="unidad_med"><br>
			<label>Tarifa/Unidad: </label>
			<input type="number" name="tarifa_unidad" step="0.000" placeholder="0.000"><br>	
		</div>
	</div>
	<input type="submit" value="Aceptar y Guardar" name="" class="btn btn-success">
</form>
<hr>
<div class="table-responsive">
		<table class="table table-hover">
			<tr class="btn-inverse">
				<td>Clave</td>
				<td>Descripcion</td>
				<td>Unidad Medida</td>
				<td>Tarifa/unidad</td>
			</tr>
			<?php 
				foreach($destajos as $destajo) { ?>
					<tr>
						<td><?php echo $destajo->clave_destajo;?></td>
						<td><?php echo $destajo->desc_destajo;?></td>
						<td><?php echo $destajo->unidad_med;?></td>
						<td><?php echo $destajo->tarifa_unidad;?></td>
		  			</tr>
			<?php } ?>
		</table>
</div>
<br>
<form action="<?php base_url(); ?>cDestajos/buscar_destajo" method="POST">
	<label>Ingresa la clave de destajo</label><br>
	<input type="number" name="clave_destajo">
	<input type="submit" class="btn btn-inverse" value="Modificar">
</form>
<form action="<?php base_url(); ?>cDestajos/eliminar_destajo" method="POST">
	<input type="number" name="clave_destajo">
	<input type="submit" class="btn btn-danger" value="Eliminar">	
</form>
<br>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>		
<?php require 'footer.php' ?>