<?php require 'header.php'; ?>
<h1 align="center">Nomina Decenal</h1>
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
<?php require 'footer.php'; ?>