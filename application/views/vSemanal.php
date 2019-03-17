<?php require 'header.php'; ?>
<h1 align="center">Nomina Semanal</h1>
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
<?php require 'footer.php'; ?>