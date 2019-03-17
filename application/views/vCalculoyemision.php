<?php require 'header.php'; ?>
<h1 align="center">Calculo Y Emision</h1>
<hr>
<P align="center">
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseSemanal" aria-expanded="false" aria-controls="collapseSemanal">
		Semanal
	</button>
						
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseDecenal" aria-expanded="false" aria-controls="collapseDecenal">
		Decenal
	</button>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseQuincenal" aria-expanded="false" aria-controls="collapseQuincenal">
		Quincenal
	</button>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseMensual" aria-expanded="false" aria-controls="collapseMensual">
		Mensual
	</button>
</P>
<hr>
<div class="collapse" id="collapseSemanal">
	<div class="card card-body">
		<div class="row">
			<div class="col-md-6">
				<h3 align="center">Calculos</h3>
				<a href="<?php base_url(); ?>cParametrosCalculoSemanal">1.- Parametros del Calculo del Periodo</a><br>
				<a href="">2.- Captura de Destajos</a><br>
				<a href="<?php base_url(); ?>cCapturaMovExcepcion">3.- Captura de Movimientos por Excepción</a><br>
				<a href="<?php base_url(); ?>cCalculoFase1Semanal">4.- Calculo de Nomina 1ra Fase</a><br>
				<a href="<?php base_url(); ?>cCalculoFase2Semanal">5.- Calculo de Nomina 2da Fase</a><br>
				<a href="<?php base_url(); ?>cModificacionMovimientos">6.- Modificacion de Movimientos Calculados</a><br>
				<a href="<?php base_url(); ?>cGeneracionAcumulados">7.- Generacion de acumulados</a><br>
			</div>
			<div class="col-md-6">
				<h3 align="center">Emision de reportes</h3>
				<a href="<?php base_url(); ?>cMovimientosFijosSemanal">Movimientos fijos</a><br>
				<a href="<?php base_url(); ?>cMovimientosExcepcion">Movimientos por Excepcion</a><br>
				<a href="<?php base_url(); ?>cReporteNominaSemanal">Nomina Resumida/Detallada</a><br>
				<a href="<?php base_url(); ?>cAnaliticoSemanal">Nomina Analitica</a><br>
				<a href="<?php base_url(); ?>cResumenXdepto">Resumen por Departamento o Concepto</a><br>
				<a href="<?php base_url(); ?>cRecibosNominaSemanal">Recibos de Nomina</a><br>
				<a href="<?php base_url(); ?>cMovimientosDestajoSemanal">Movimientos por Destajos</a><br>
				<a href="<?php base_url(); ?>cDeduccionesPatronSemanal">Deducciones Patron</a><br>
				<a href="<?php base_url(); ?>cAnaliticoSemanalPatron">Deducciones Patron (Analitico)</a><br>				
			</div>
		</div>				
	</div>
</div>
<div class="collapse" id="collapseDecenal">
	<div class="card card-body">
		<div class="row">
			<div class="col-md-6">
				<h3 align="center">Calculos</h3>
				<a href="<?php base_url(); ?>cParametrosCalculoDecenal">1.- Parametros del Calculo del Periodo</a><br>
				<a href="">2.- Captura de Destajos</a><br>
				<a href="<?php base_url(); ?>cCapturaMovExcepcionDecenal">3.- Captura de Movimientos por Excepción</a><br>
				<a href="<?php base_url(); ?>cCalculoFase1Decenal">4.- Calculo de Nomina 1ra Fase</a><br>
				<a href="<?php base_url(); ?>cCalculoFase2Decenal">5.- Calculo de Nomina 2da Fase</a><br>
				<a href="<?php base_url(); ?>cModificacionMovimientosDecenal">6.- Modificacion de Movimientos Calculados</a><br>
				<a href="<?php base_url(); ?>cGeneracionAcumuladosDecenal">7.- Generacion de acumulados</a><br>
			</div>
			<div class="col-md-6">
				<h3 align="center">Emision de reportes</h3>
				<a href="<?php base_url(); ?>cMovimientosFijosDecenal">Movimientos fijos</a><br>
				<a href="<?php base_url(); ?>cMovimientosExcepcionDecenal">Movimientos por Excepcion</a><br>
				<a href="<?php base_url(); ?>cReporteNominaDecenal">Nomina Resumida/Detallada</a><br>
				<a href="<?php base_url(); ?>cAnaliticoDecenal">Nomina Analitica</a><br>
				<a href="<?php base_url(); ?>cResumenXdeptoDecenal">Resumen por Departamento o Concepto</a><br>
				<a href="<?php base_url(); ?>cRecibosNominaDecenal">Recibos de Nomina</a><br>
				<a href="<?php base_url(); ?>cMovimientosDestajoDecenal">Movimientos por Destajos</a><br>
				<a href="<?php base_url(); ?>cDeduccionesPatronDecenal">Deducciones Patron</a><br>
				<a href="<?php base_url(); ?>cAnaliticoDecenalPatron">Deducciones Patron (Analitico)</a><br>				
			</div>
		</div>
		
	</div>
</div>
<div class="collapse" id="collapseQuincenal">
	<div class="card card-body">
		<div class="row">
			<div class="col-md-6">
				<h3 align="center">Calculos</h3>
				<a href="<?php base_url(); ?>cParametrosCalculoQuincenal">1.- Parametros del Calculo del Periodo</a><br>
				<a href="">2.- Captura de Destajos</a><br>
				<a href="<?php base_url(); ?>cCapturaMovExcepcionQuincenal">3.- Captura de Movimientos por Excepción</a><br>
				<a href="<?php base_url(); ?>cCalculoFase1Quincenal">4.- Calculo de Nomina 1ra Fase</a><br>
				<a href="<?php base_url(); ?>cCalculoFase2Quincenal">5.- Calculo de Nomina 2da Fase</a><br>
				<a href="<?php base_url(); ?>cModificacionMovimientosQuincenal">6.- Modificacion de Movimientos Calculados</a><br>
				<a href="<?php base_url(); ?>cGeneracionAcumuladosQuincenal">7.- Generacion de acumulados</a><br>
			</div>
			<div class="col-md-6">
				<h3 align="center">Emision de reportes</h3>
				<a href="<?php base_url(); ?>cMovimientosFijosQuincenal">Movimientos fijos</a><br>
				<a href="<?php base_url(); ?>cMovimientosExcepcionQuincenal">Movimientos por Excepcion</a><br>
				<a href="<?php base_url(); ?>cReporteNominaQuincenal">Nomina Resumida/Detallada</a><br>
				<a href="<?php base_url(); ?>cAnaliticoQuincenal">Nomina Analitica</a><br>
				<a href="<?php base_url(); ?>cResumenXdeptoQuincenal">Resumen por Departamento o Concepto</a><br>
				<a href="<?php base_url(); ?>cRecibosNominaQuincenal">Recibos de Nomina</a><br>
				<a href="<?php base_url(); ?>cMovimientosDestajoQuincenal">Movimientos por Destajos</a><br>
				<a href="<?php base_url(); ?>cDeduccionesPatronQuincenal">Deducciones Patron</a><br>
				<a href="<?php base_url(); ?>cAnaliticoQuincenalPatron">Deducciones Patron (Analitico)</a><br>				
			</div>
		</div>
		
	</div>
</div>
<div class="collapse" id="collapseMensual">
	<div class="card card-body">
		<div class="row">
			<div class="col-md-6">
				<h3 align="center">Calculos</h3>
				<a href="">1.- Parametros del Calculo del Periodo</a><br>
				<a href="">2.- Captura de Destajos</a><br>
				<a href="">3.- Captura de MOvimientos por Excepción</a><br>
				<a href="">4.- Calculo de Nomina 1ra Fase</a><br>
				<a href="">5.- Calculo de Nomina 2da Fase</a><br>
				<a href="">6.- Modificacion de Movimientos Calculados</a><br>
				<a href="">7.- Generacion de acumulados</a><br>
			</div>
			<div class="col-md-6">
				<h3 align="center">Emision de reportes</h3>
				<a href="">Movimientos fijos</a><br>
				<a href="">Movimientos por Excepcion</a><br>
				<a href="">Nomina Resumida/Detallada</a><br>
				<a href="">Nomina Analitica</a><br>
				<a href="">Resumen por Departamento o Concepto</a><br>
				<a href="">Recibos de Nomina</a><br>
				<a href="">Movimientos por Destajos</a><br>
				<a href="">Deducciones Patron</a><br>
				<a href="">Deducciones Patron (Analitico)</a><br>				
			</div>
		</div>
		
	</div>
</div>

<?php require 'footer.php'; ?>