<?php require 'header.php'; ?>
<h1 align="center">Movimientos Calculados Quincenal</h1>
<form action="<?php echo base_url(); ?>cModificacionMovimientosQuincenal/buscar_nomina_auxiliar_empleado" method="POST">
	<label>Empleado: </label>
	<input type="number" name="movnumtra">
<input type="submit" name="" value="Buscar">
</form>
<div class=" table table-responsive">
	<div class="table" align="center">
		<table>
			<tr class="btn-inverse">
				<td>Descripcion</td>
				<td>Num Emp</td>
				<td>Percep/Deduc</td>
				<td>Departamento</td>
				<td>Tarifa</td>
				<td>Cantidad</td>
				<td>Importe</td>
				<td>Tipo Pago</td>
			</tr>
			 <?php 
				foreach($auxiliar_nomina as $auxiliar_nom) { ?>
		    <tr>
		        <td><?php echo $auxiliar_nom->movtipnom;?></td>
		        <td><?php echo $auxiliar_nom->movnumtra;?></td>
		        <td><?php echo $auxiliar_nom->movnumpyd;?></td>
		        <td><?php echo $auxiliar_nom->movdepto;?></td>
		        <td><?php echo $auxiliar_nom->movtarifa;?></td>
		        <td><?php echo $auxiliar_nom->movcantidad;?></td>
		        <td><?php echo $auxiliar_nom->movimport;?></td>
		        <td><?php echo $auxiliar_nom->movindica;?></td>
		        <td><?php echo $auxiliar_nom->mocstatus;?></td>
            </tr>
			<?php } ?>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
	</div>
	<div class="col-md-6">
		<label>Total: </label>
			<input type="number" name="">		
	</div>
</div>



<?php require 'footer.php'; ?>