<?php require 'header.php'; ?>
<form action="<?php base_url(); ?>cCuotas_imss_retiro_vivienda/guardar" method="POST" >

	<?php  foreach($cuotas_imss as $cuotas) { ?>

		<h1 align="center">Coutas IMSS, Retiro y Vivienda</h1>
		<label>Numero de Registro Patronal: </label>
		<input type="text" name="registro_patronal" value="<?php echo $cuotas->registro_patronal;?>"><br>
		<label>Ramos del Seguro</label>
		

	<div class="row">
		<div class="col-md-4">
			<label>Desglose de subramos E y M: </label><br>	
			<br><label>Fija(Art. 106 I): </label><br>
			<label>Excedente sm(Art. 106 II): </label><br>
			<label>Prestaciones en Dinero(Art. 107): </label><br>
			<label>Pensionados(Art. 25): </label><br>
			<label>Riesgo de trabajo: </label><br>
			<label>Invalidez y Vida: </label><br>
			<label>Guarderia: </label><br>


			
		</div>
		<div class="col-md-8">
			<table class="table">
					<td>%Patron</td>
					<td>%Empleado</td>
					<td>SMDF</td>
			</table>
			<input type="number" step="0.001" name="fija_patron" value="<?php echo $cuotas->fija_patron;?>">
			<input type="text" disabled="disabled" name="">
			<input type="number" step="0.001" name="fija_smdf" value="<?php echo $cuotas->fija_smdf;?>"><br>
			
			<input type="number" step="0.001" name="excedente_patron" value="<?php echo $cuotas->excedente_patron;?>">
			<input type="number" step="0.001" name="excedente_empleado" value="<?php echo $cuotas->excedente_empleado;?>">
			<input type="text" disabled="disabled" name=""><br>

			<input type="number" step="0.001" name="prestadinero_patron" value="<?php echo $cuotas->prestadinero_patron;?>">
			<input type="number" step="0.001" name="prestadinero_empleado" value="<?php echo $cuotas->prestadinero_empleado;?>">
			<input type="text" disabled="disabled" name=""><br>

			<input type="number" step="0.001" name="pensionados_patron" value="<?php echo $cuotas->pensionados_patron;?>">
			<input type="number" step="0.001" name="pensionados_empleado" value="<?php echo $cuotas->pensionados_empleado;?>">
			<input type="text" disabled="disabled" name=""><br>

			<input type="number" step="0.001" name="riesgotrabajo_patron" value="<?php echo $cuotas->riesgotrabajo_patron;?>">
			<input type="text" disabled="disabled">
			<input type="number" step="0.001" name="riesgotrabajo_smdf" value="<?php echo $cuotas->riesgotrabajo_smdf;?>"><br>

			<input type="number" step="0.001" name="invalidez_patron" value="<?php echo $cuotas->invalidez_patron;?>">
			<input type="number" step="0.001" name="invalidez_empleado" value="<?php echo $cuotas->invalidez_empleado;?>">
			<input type="number" step="0.001" name="invalidez_smdf" value="<?php echo $cuotas->invalidez_smdf;?>"><br>

			<input type="number" step="0.001" name="guarderia_patron" value="<?php echo $cuotas->guarderia_patron;?>">
			<input type="text" disabled="disabled">
			<input type="number" step="0.001" name="guarderia_smdf" value="<?php echo $cuotas->guarderia_smdf;?>"><br>

		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h6>Ramos de Retiro y Vivienda</h6>
			<label>Desglose de Retiro y CV</label><br>
			
			<label>Retiro: </label><br>
			<label>Cesantia Y Vejez: </label><br>
			<label>INFONAVIT: </label><br>
		</div>
		<div class="col-md-8">
			<br>
			<br>
			<br>
			
			<input type="number" step="0.001" name="retiro_patron" value="<?php echo $cuotas->retiro_patron;?>">
			<input type="text" disabled="disabled" >
			<input type="number" step="0.001" name="retiro_smdf" value="<?php echo $cuotas->retiro_smdf;?>"><br>

			<input type="number" step="0.001" name="cesantia_patron" value="<?php echo $cuotas->cesantia_patron;?>">
			<input type="number" step="0.001" name="cesantia_empleado" value="<?php echo $cuotas->cesantia_empleado;?>">
			<input type="number" step="0.001" name="cesantia_smdf" value="<?php echo $cuotas->cesantia_smdf;?>"><br>

			<input type="number" step="0.001" name="infonavit_patron" value="<?php echo $cuotas->infonavit_patron;?>">
			<input type="text" disabled="disabled">
			<input type="number" step="0.001" name="infonavit_smdf" value="<?php echo $cuotas->infonavit_smdf;?>"><br>

		</div>
	</div>
<?php } ?>

<input type="submit" value="Aceptar" class="btn btn-success">
</form>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
<?php require 'footer.php'; ?>