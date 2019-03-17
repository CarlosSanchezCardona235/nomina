<?php require 'header.php' ?>
<h1 align="center">Movimientos Fijos Por Empleado</h1>
<br>
	<form action="<?php echo base_url(); ?>cMovimientosfijos_empleado/buscar_empleado" method="POST">
		<label> Num. Empleado: </label>
		<input type="number" name="numero_emp">
		<input type="submit" name="" value="Buscar" class="btn btn-success">
	</form>
	<br>
	
			<label>Nombre: </label>
			<input type="text" name="">
			<label>Departamento: </label>
			<input type="number" name="">

<div class="table-responsive">
	<table class="table table-hover table-sm">
			<tr class="btn-inverse">
				<td>Empleado</td>
				<td>Numero</td>
				<td>Concepto</td>
				<td>Total</td>
				<td>Por Periodo</td>
				<td>Aplicado</td>
				<td>Por Aplicar</td>
			</tr>
			 <?php 
				foreach($movfijosempleado as $movfijosemp) { ?>
				    <tr class="celda">
				       <td><?php echo $movfijosemp->numero_emp;?></td>
				       <td><?php echo $movfijosemp->NumPerDec;?></td>
				       <td><?php echo $movfijosemp->concepto;?></td>
				       <td><?php echo $movfijosemp->Total;?></td>
				       <td><?php echo $movfijosemp->aplicado;?></td>
				       <td><?php echo $movfijosemp->por_periodo;?></td>
				       <td><?php echo $movfijosemp->por_aplicar;?></td>

				    </tr>
			<?php } ?>
	</table>
<h6>Agregar Movimiento</h6>
	<form action="<?php echo base_url(); ?>cMovimientosfijos_empleado/guardar" method="POST">
		<label>Numero de Empleado:</label>
		<input type="number" name="numero_emp"><br>
		<label>Percepcion/Deduccion: </label>
		<input type="number" name="NumPerDec">
		<input type="text" name="concepto" ><br>
		<label>Inicial: </label>
		<input type="number" name="Total" placeholder="0.000">
		<label>Aplicado: </label>
		<input type="number" name="aplicado" placeholder="0.000"><br>
		<label>Por Periodo: </label>
		<input type="number" name="por_periodo" placeholder="0.000">
		<label>Por Aplicar: </label>
		<input type="Number" name="por_aplicar" placeholder="0.000">
		<br>
		<input type="submit" name="" value="Aceptar y Guardar" class="btn btn-success"><br>
	</form>
</div>
<br><a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
<?php require 'footer.php' ?>