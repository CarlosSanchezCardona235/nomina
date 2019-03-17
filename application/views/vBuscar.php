<?php require 'header.php'; ?>


	<form action="<?php base_url(); ?>cBuscar/buscar" method="POST">
	<table>
		<tr>
			<td><label>Numero Empleado</label></td>
			<td><input type="numeric" name="numero_empleado" ></td>
		</tr>
		<tr>
			<td><input type="submit" value="Buscar" class="btn btn-success"></td>
		</tr>
	</table>
	</form>
	<div class="table-responsive">
		<table class="table" >
				<tr>
					<td>Numero Emp</td>
					<td>Fecha Ingreso</td>
					<td>Fecha Baja</td>
					<td>Apellido Paterno </td>
				</tr>
			    <?php 
			    foreach($empleados as $empleado) { ?>
			    <tr>
			        <td><?php echo $empleado->numero_empleado;?></td>
			        <td><?php echo $empleado->fecha_ingreso;?></td>
			        <td><?php echo $empleado->fecha_baja;?></td>
			        <td><?php echo $empleado->appaterno;?></td>
			    </tr>
			<?php } ?>
		</table>
	</div>
	<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
	<!--<?php //echo $mensaje; ?>-->
<?php require 'footer.php'; ?>