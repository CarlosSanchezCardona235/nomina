<?php require 'header.php' ?>
<h1 align="center">Departamentos</h1>
<hr>
<div class="row">
	<div class="col-md-6">
		<form  action="<?php echo base_url(); ?>cDepartamentos/guardar" method="POST">
			<h6>Nuevo Departamento</h6>
			<label>Numero</label>
			<input type="number" name="numDepto">
			<label>Descripcion</label>
			<input type="text" name="DescDepto"><br>
			<input type="submit" value="Guardar" class="btn btn-success">
		</form>		
	</div>
	<div class="col-md-6">
		<form action="<?php base_url(); ?>cDepartamentos/eliminar_depto" method="POST">
			<h6>Eliminar Departamento</h6>
			<input type="numeric" name="numDepto" placeholder="Numero de Departameto">
			<input type="submit" value="Eliminar" class="btn btn-danger">
		</form>
	</div>
</div>
<div class="row">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<div class="table-responsive">
	<table class="table table-hover table-sm " style="font-size: 15px">
		<tr class="btn-inverse">
			<td>Numero</td>
			<td>Descripcion</td>
		</tr>
		<?php 
			foreach($departamentos as $departamento) { ?>
				<tr>
					<td><?php echo $departamento->numDepto;?></td>
					<td><?php echo $departamento->DescDepto;?></td>
			    </tr>
		<?php } ?>
	</table>
</div>
		
	</div>
	<div class="col-md-2">
		
	</div>
</div>

<br>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger btn-lg">Salir</a>
<?php require 'footer.php' ?>