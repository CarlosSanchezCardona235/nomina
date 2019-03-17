<?php require 'header.php' ?>
<h1 align="center">Definicion de Modulo</h1>
<hr>
<form action="<?php base_url(); ?>cDefinicion_Modulo/guardar" method="POST">
	<div class="container" ></div>
	<p align="center">
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseGenerales" aria-expanded="false" aria-controls="collapseGenerales">
		Datos Generales
		</button>

		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseRegistros" aria-expanded="false" aria-controls="collapseRegistros">
		Registros y otros
		</button>

		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseDeducciones" aria-expanded="false" aria-controls="collapseDeducciones">
		Deducciones Contractuales
		</button>

		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsePercepciones" aria-expanded="false" aria-controls="collapsePercepciones">
		Precepciones Contractuales
		</button>
	</p>
	<hr>
	<div class="collapse" id="collapseGenerales">
		<div class="card card-body">
			<h3>Generales</h3>
				<div class="row">
					<div class="col-md-6">
					<?php  foreach($catdefinicionmodulo as $catdefinicion) { ?>
					<label>Razon Social: </label>
						<input type="text" name="defnombre_empresa" value="<?php echo $catdefinicion->defnombre_empresa;?>"><br>
					<label>Calle y Numero: </label>
						<input type="text" name="defcalle_numero" value="<?php echo $catdefinicion->defcalle_numero;?>" ><br>	
					<label>Colonia: </label>
						<input type="text" name="defcolonia" value="<?php echo $catdefinicion->defcolonia;?>"><br>
					<label>Ciudad: </label>
						<input type="text" name="defciudad" value="<?php echo $catdefinicion->defciudad;?>"><br>
					<label>Estado: </label>
						<input type="text" name="defestado" value="<?php echo $catdefinicion->defestado;?>"><br>
					<label>Codigo Postal: </label>
						<input type="text" name="defcodigo_postal" value="<?php echo $catdefinicion->defcodigo_postal;?>"><br>
					</div>
					<div class="col-md-6">
						<br>
						<label>Telefono Oficina</label>
						<input type="text" name="deftelefono_oficina" value="<?php echo $catdefinicion->deftelefono_oficina;?>"><br>
					<label>Telefono Celular</label>
						<input type="text" name="deftelefono_celular" value="<?php echo $catdefinicion->deftelefono_celular;?>"><br>
					<label>Telefono (otro: )</label>
						<input type="text" name="deftelefono_otro" value="<?php echo $catdefinicion->deftelefono_otro;?>"><br>
					<label>Fax: </label>
						<input type="text" name="def_fax" value="<?php echo $catdefinicion->def_fax;?>"><br>
					<label>Email: </label>
						<input type="email" name="defemail" value="<?php echo $catdefinicion->defemail;?>"><br>
					</div>
				</div>
						
		</div>
	</div>

	<div class="collapse" id="collapseRegistros">
		<div class="card card-body">
			<h3>Registros y otros</h3>
				<div class="row">
					<div class="col-md-5">
						<label>RFC: </label>
							<input type="text" name="defrfc" value="<?php echo $catdefinicion->defrfc;?>"><br>
						<label>Registro IMSS: </label>
							<input type="text" name="defregistro_imss" value="<?php echo $catdefinicion->defregistro_imss;?>"><br>
						<label>Registro INFONAVIT: </label>
							<input type="text" name="defregistro_infonavit" value="<?php echo $catdefinicion->defregistro_infonavit;?>"><br>
						<label>Mes Y Año de Proceso: </label>
							<input type="date" name="defmes_anoproceso" value="<?php echo $catdefinicion->defmes_anoproceso;?>"><br>
					</div>
					<div class="col-md-7">
						<label>Area Geografica: </label>
							<input type="number" name="defarea_geografica" value="<?php echo $catdefinicion->defarea_geografica;?>"><br>
						<label>Digito Verificador: </label>
							<select name="defdigito_verificador">
								<option><?php echo $catdefinicion->defdigito_verificador;?></option>
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select><br>
						<label>Calculo de Destajo</label>
							<select name="defcalculo_destajo">
								<option><?php echo $catdefinicion->defcalculo_destajo;?></option>
								<option value="No">No</option>
								<option value="sin_garantia">Sin Garantia</option>
								<option value="con_garantia">Con Garantia</option>
							</select><br>
						<label>Proporcion Pagos/Erogaciones Ejercicio Anterior</label>
							<input type="number" name="defproporcion_pagos" step="0.0001" value="<?php echo $catdefinicion->defproporcion_pagos;?>">
					</div>
				</div>
		</div>
	</div>

	<div class="collapse" id="collapseDeducciones">
		<div class="card card-body">
				<h3>Deducciones Contractuales</h3>
				<hr>
					<div class="row">
						<div class="col-md-6">
							<label>Fondo de Ahorro Retenido</label>
								<select name="deffondo_ahorro_retenido">
									<option><?php echo $catdefinicion->deffondo_ahorro_retenido;?></option>
									<option value="sin_cuota">Sin Cuota</option>
									<option value="cuota_fija_diaria">Cuota Fija Diaria</option>
									<option value="%s_salario_base">%S/Salario Base</option>
									<option value="%s_total_percepciones">%S/Total Percepciones</option>
								</select><br>
							<label>Monto: </label>
								<input type="number" name="defmonto_retenido"  step="0.0001" value="<?php echo $catdefinicion->defmonto_retenido;?>"><br>
								<hr>
							<label>Fondo de Ahorro Apartado</label>
								<select name="deffondo_ahorro_apartado">
									<option><?php echo $catdefinicion->deffondo_ahorro_apartado;?></option>
									<option value="sin_cuota">Sin Cuota</option>
									<option value="cuota_fija_diaria">Cuota Fija Diaria</option>
									<option value="%s_salario_base">%S/Salario Base</option>
									<option value="%s_total_percepciones">%S/Total Percepciones</option>
								</select><br>
							<label>Monto: </label>
								<input type="number" name="defmonto_apartado" step="0.0001" value="<?php echo $catdefinicion->defmonto_apartado;?>"><br>
								
						</div>
						<div class="col-md-6">
							<label>Cuota Sindical</label>
								<select name="defcuota_sindical">
									<option><?php echo $catdefinicion->defcuota_sindical;?></option>
									<option value="sin_cuota">Sin Cuota</option>
									<option value="cuota_fija_diaria">Cuota Fija Diaria</option>
									<option value="%s_salario_base">%S/Salario Base</option>
									<option value="%s_total_percepciones">%S/Total Percepciones</option>
								</select><br>
							<label>Monto: </label>
								<input type="number" name="defmonto_cuotasindical" step="0.0001" value="<?php echo $catdefinicion->defmonto_cuotasindical;?>"><br>
								<hr>
							<label>Otra Deduccion Fija</label>
								<select name="defotra_deduccion">
									<option><?php echo $catdefinicion->defotra_deduccion;?></option>
									<option value="sin_cuota">Sin Cuota</option>
									<option value="cuota_fija_diaria">Cuota Fija Diaria</option>
									<option value="%s_salario_base">%S/Salario Base</option>
									<option value="%s_total_percepciones">%S/Total Percepciones</option>
								</select><br>
							<label>Monto: </label>
								<input type="number" name="defmonto_deduccionfija" step="0.0001" value="<?php echo $catdefinicion->defmonto_deduccionfija;?>"><br>
								
						</div>
					</div>
		</div>
	</div>
	
	<div class="collapse" id="collapsePercepciones">
		<div class="card card-body">
				<h3>Percepciones Contractuales</h3>
				<input type="checkbox" name="defpagapremios_aucencias" value="Si"><label>Pagar Premios aun con ausencias o Incapacidades</label><br>
					<div class="row">	
						<div class="col-md-3">
							<label>Bono de Despensa: </label>
								<select name="defbono_despensa">
									<option><?php echo $catdefinicion->defbono_despensa;?></option>
									<option value="Si">Si</option>
									<option value="No">No</option>
								</select>
							<br><label>Premio por Asistencia: </label>
								<select name="defpremio_asistencia">
									<option><?php echo $catdefinicion->defpremio_asistencia;?></option>
									<option value="Si">Si</option>
									<option value="No">No</option>
								</select>
							<br><label>Premio por Puntualidad: </label>
								<select name="defpremio_puntualidad">
									<option><?php echo $catdefinicion->defpremio_puntualidad;?></option>
									<option value="Si">Si</option>
									<option value="No">No</option>
								</select>
						</div>
						<div class="col-md-6 " style="background-color:#9FCFFC ">
							<input type="checkbox" name="defbonodespensa_semanal" value="<?php echo $catdefinicion->defbonodespensa_semanal;?>"><label>Semanal</label>
							<input type="checkbox" name="defbonodespensa_decemanal" value="Si"><label>Decemanal</label>
							<input type="checkbox" name="defbonodespensa_quincenal" value="Si"><label>Quincenal</label>
							<input type="checkbox" name="defbonodespensa_mensual" value="Si"><label>Mensual</label><br>
							<input type="checkbox" name="defpremioasistencia_semanal" value="Si"><label>Semanal</label>
							<input type="checkbox" name="defpremioasistencia_decemanal" value="Si"><label>Decemanal</label>
							<input type="checkbox" name="defpremioasistencia_quincenal" value="Si"><label>Quincenal</label>
							<input type="checkbox" name="defpremioasistencia_mensual" value="Si"><label>Mensual</label><br>
							<input type="checkbox" name="defpremiopuntualidad_semanal" value="Si"><label>Semanal</label>
							<input type="checkbox" name="defpremiopuntualidad_decemanal" value="Si"><label>Decemanal</label>
							<input type="checkbox" name="defpremiopuntualidad_quincenal" value="Si"><label>Quincenal</label>
							<input type="checkbox" name="defpremiopuntualidad_mensual" value="Si"><label>Mensual</label>
			
						</div>
						<div class="col-md-3">
						</div>				
					</div>
					<div>
					<label>¿El bono de Despensa se paga?</label>
						<select name="defperiodo_bono_despensa">
							<option><?php echo $catdefinicion->defperiodo_bono_despensa;?></option>
							<option value="Cada Periodo">Cada Periodo</option>
							<option value="Ultimo Periodo del Mes">Ultimo Periodo del Mes</option>
						</select><br>
					<label>Reflejar(sumar) el importe del Bono Despensas Total Recibo</label>
						<select name="defreflejar_bono_puntualidad">
							<option><?php echo $catdefinicion->defreflejar_bono_puntualidad;?></option>
							<option value="Si">Si</option>
							<option value="No">No</option>
						</select><br>
					<label>Deducciones Sobre Nominas Patronal: </label>
					<input type="number" name="defdeducciones_nominapatronal" step="0.0001" value="<?php echo $catdefinicion->defdeducciones_nominapatronal;?>">
					</div>
					<div>
						<h3></h3>
					</div>
				<?php } ?>
		</div>			
	</div>
	<input type="submit" value="Aceptar" class="btn btn-success">
</form>
<a href="<?php base_url();?>cMenu_principal" class="btn btn-danger btn-lg danger" role="button" >Salir</a>


<?php require 'footer.php' ?>