<?php require 'header.php' ?>
<!--<?php print_r($pargenerales_calculo) ?>-->
<form action="<?php base_url(); ?>cParametros_generalescalculo/guardar" method="POST">
	<h1 align="center">Parametros Generales del Calculo</h1>
	<hr>
<?php  foreach($pargenerales_calculo as $pargenerales_cal) { ?>
	<div class="row">			
		<div class="col-md-6">
			<label>Descuento cuotas del IMSS: </label>
				<select name="descuento_cuotas_imss">
					<option><?php echo $pargenerales_cal->descuento_cuotas_imss;?></option>
					<option value="IMSS_descontada">Cuota IMSS descontada</option>
					<option value="IMSS_nodescontada">Cuota IMSS no descontada</option>				
				</select><br>
			<label>Salario Mensual: </label>
				<select name="salario_mensual">
					<option><?php echo $pargenerales_cal->salario_mensual;?></option>
					<option value="30.4">Salario diario por 30.4</option>
					<option value="30">Salario diario por 30 dias</option>
					<option value="30.416">Salario diario por 30.416</option>
					<option value="31">Salario Mes calendario</option>
				</select><br>
			<label>Bases de retencion I.S.P.T.</label>
				<select name="bases_retencion_ISPT">
					<option><?php echo $pargenerales_cal->bases_retencion_ISPT;?></option>
					<option value="Personal nuevo">Personal Nuevo (Dias desde Ingreso)</option>
					<option value="365 dias">365 Dias</option>
				</select><br>
			<label>Proceso de nomina: </label>
				<select name="proceso_nomina">
					<option><?php echo $pargenerales_cal->proceso_nomina;?></option>
					<option value="normal">Proceso Normal</option>
					<option value="especial">Proceso Especial</option>
				</select><br>
			<label>Ajuste Anual I.S.P.T.</label>
			<select name="ajuste_anual">
				<option><?php echo $pargenerales_cal->ajuste_anual;?></option>
				<option value="ajuste compensando diferencias">Ajuste anual compensando diferencias</option>
				<option value="no se realiza ajuste">No se realiza ajuste anual</option>
			</select><br>
		</div>

		<div class="col-md-6">
			<label>Descuento de Fondo de ahorro: </label>
				<select name="desc_fondo_ahorro">
					<option><?php echo $pargenerales_cal->desc_fondo_ahorro;?></option>
					<option value="decenal">Solo en nomina decenal</option>
					<option value="quincenal">Solo en nomina quincenal</option>
					<option value="mensual">Solo en nomina Mensual</option>
					<option value="sindicalizados">Solo empleados sondicalizados</option>
					<option value="no sindicalizados">Solo empleados no sindicalizados</option>
					<option value="todos los empleados">Todos los empleados</option>
					<option value="empleados planta">Solo empleados planta</option>
				</select><br>
			<label>Redondeo en el calculo de importes: </label>
				<select name="redondeo_calculo">
					<option><?php echo $pargenerales_cal->redondeo_calculo;?></option>
					<option value="con redondeo">Con redondeo</option>
					<option value="sin redondeo" >Sin redondeo</option>
				</select><br>
			<label>Calculo de Pagos al INFONAVIT</label>
				<select name="calculo_pagosinfonavit">
					<option><?php echo $pargenerales_cal->calculo_pagosinfonavit;?></option>
					<option value="sobre salario diario integrado">Sobre Salario Diario Integrado</option>
					<option value="sobre percepciones gravables">Sobre Percepciones Gravables de INFONAVIT</option>
				</select><br>
			<label>Calculo de premio de asistencia Y puntualidad</label>
				<select name="calculopremio_asistencia">
					<option><?php echo $pargenerales_cal->calculopremio_asistencia;?></option>
					<option value="salario nominal">En Base al salario Nominal</option>
					<option value="salario diario integrado">En base al salario diario integrado</option>
				</select><br>
		</div>
	<?php } ?>
	</div>
	<input type="submit" value="Aceptar" class="btn btn-success">		
</form>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
<?php require 'footer.php' ?>