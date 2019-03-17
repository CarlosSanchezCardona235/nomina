<?php require 'header.php'; ?>
<!--<?php //echo "Empleado Numero: ".$this->session->flashdata('$s_numero'); ?>-->
<h1 align="center">Actualización Movimientos Fijos</h1>
<br>
<br>
	<table class="table table-hover table-sm">
			<tr class="btn-inverse">
				<td>Empleado</td>
				<td>Numero</td>
				<td>Concepto</td>
				<td>Total</td>
				<td>Por Periodo</td>
				<td>Aplicado</td>
				<td>Por Aplicar</td>
				<td></td>
				<td></td>
			</tr>
			 <?php 
			 //$x=$resultado["result_object"];
			//echo "resultado:"; print_r($resultado);

				foreach($resultado as $resul) { ?>
				    <tr class="celda">
				       <td><?php echo $resul->numero_emp;?></td>
				       <td><?php echo $resul->NumPerDec;?></td>
				       <td><?php echo $resul->concepto;?></td>
				       <td><?php echo $resul->Total;?></td>
				       <td><?php echo $resul->aplicado;?></td>
				       <td><?php echo $resul->por_periodo;?></td>
				       <td><?php echo $resul->por_aplicar;?></td>
				       <td><a href="<?php echo base_url(); ?>cMovimientosfijos_empleado/modficar_movfijos">Modificar</a></td>
				    </tr>
			<?php } ?>
	</table>
<?php require 'footer.php'; ?>
