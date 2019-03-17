<?php require 'header.php'; ?>
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
			 $totalPer=0.0;
			 $totalDec=0.0;
				foreach($result_object as $resul) { ?>
		    <tr>
		        <td><?php echo $resul->movtipnom;?></td>
		        <td><?php echo $resul->movnumtra;?></td>
		        <td><?php echo $resul->movnumpyd;?></td>
		        <td><?php echo $resul->movdepto;?></td>
		        <td><?php echo $resul->movtarifa;?></td>
		        <td><?php echo $resul->movcantidad;?></td>
		        <td><?php 
		        if ($resul->movnumpyd<500)
		        	{$totalPer += $resul->movimport;}
		        else
		        	{$totalDec += $resul->movimport;}
		        echo $resul->movimport;?></td>
		        <td><?php echo $resul->movindica;?></td>
		        <td><?php echo $resul->mocstatus;?></td>
            </tr>
			<?php } ?>
		</table>
		<?php
					$total = $totalPer-$totalDec;
					echo "<h3>Total empleado: ".$total ." MNX</h3>";
					echo "<h6>Total percepciones: ".$totalPer."  MNX</h6>";
		 			echo "<h6>Total deducciones: ".$totalDec."  MNX </h6>";
		 			echo "<hr>";
		 			  ?>
	</div>
</div>
	<form action="<?php echo base_url(); ?>cModificacionMovimientosQuincenal/descargarpdf" method="POST">
		<h3>Impresion del pdf</h3>
			<input type="submit" value="Exportar a pdf" class="btn btn-inverse"></input>
	</form>

<a href="<?php base_url(); ?>vModificacionMovimientosQuincenal" class="btn btn-danger" role="button">Atras</a>
<?php require 'footer.php'; ?>