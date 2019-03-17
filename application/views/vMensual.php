<?php require 'header.php'; ?>
<h1 align="center">Nomina Mensual</h1>
<div class="row">
			<div class="col-md-6">
				<h3 align="center">Calculos</h3>
				<a href="<?php base_url();?>cParametrosCalculoMensual">1.- Parametros del Calculo del Periodo</a><br>
				<a href="">2.- Captura de Destajos</a><br>
				<a href="<?php base_url();?>cCapturaMovExcepcionMensual">3.- Captura de Movimientos por Excepción</a><br>
				<a href="<?php base_url();?>cCalculoFase1Mensual">4.- Calculo de Nomina 1ra Fase</a><br>
				<a href="<?php base_url();?>cCalculoFase2Mensual">5.- Calculo de Nomina 2da Fase</a><br>
				<a href="<?php base_url();?>cModificacionMovimientosMensual">6.- Modificacion de Movimientos Calculados</a><br>
				<a href="<?php base_url();?>cGeneracionAcumuladosMensual">7.- Generacion de acumulados</a><br>
			</div>
			<div class="col-md-6">
				<h3 align="center">Emision de reportes</h3>
				<a href="<?php base_url();?>cMovimientosFijosMensual">Movimientos fijos</a><br>
				<a href="<?php base_url();?>cMovimientosExcepcionMensual">Movimientos por Excepcion</a><br>
				<a href="<?php base_url();?>cReporteNominaMensual">Nomina Resumida/Detallada</a><br>
				<a href="<?php base_url();?>cAnaliticoMensual">Nomina Analitica</a><br>
				<a href="<?php base_url();?>cResumenXdeptoMensual">Resumen por Departamento o Concepto</a><br>
				<a href="<?php base_url();?>cRecibosNominaMensual">Recibos de Nomina</a><br>
				<a href="<?php base_url();?>cMovimientosDestajoMensual">Movimientos por Destajos</a><br>
				<a href="<?php base_url();?>cDeduccionesPatronMensual">Deducciones Patron</a><br>
				<a href="<?php base_url();?>cAnaliticoMensualPatron">Deducciones Patron (Analitico)</a><br>				
			</div>
		</div>
<?php require 'footer.php'; ?>