<?php require 'header.php'; ?>
<h1 align="center">Parametros de Calculo Semanal</h1>
<hr>
<form action="<?php echo base_url(); ?>cParametrosCalculoSemanal/guardar" method="POST">
<div class="row">
	<div class="col-md-6">
		<label>Numero de Semanas en el Mes: </label>
		<select name="NumSemanasMes">
			 <?php  foreach($parametroscalculosemanal as $parametroscalculo) { ?>
			 	<option><?php echo $parametroscalculo->NumSemanasMes;?></option>
			 
			<option value="4">4 Cuatro Semanas en el mes</option>
			<option value="5">5 Cinco  Semanas en el mes</option>
		</select><br>
		<label>No/Semana en el Mes: </label>
		<select name="Semana">
			<option><?php echo $parametroscalculo->Semana;?></option>
			<option value="1">1 Primera semana</option>
			<option value="2">2 Segunda semana</option>
			<option value="3">3 Tercera semana</option>
			<option value="4">4 Cuarta semana</option>
			<option value="5">5 Quinta semana</option>
		</select>
		<br>
		<label>Factor de dias pagados: </label>
		<input type="number" name="FacDiasPagados" value="<?php echo $parametroscalculo->FacDiasPagados;?>"><br>
		<label>Num. percepciones fijas:</label>
		<select name="NumPerceFijas">
				<option><?php echo $parametroscalculo->NumPerceFijas;?></option>
				<option value="1">1 No se Pagan</option>
				<option value="2">2 El pago se realiza solo una vez</option>
				<option value="3">3 El pago se realiza doble</option>
				<option value="4">4 El pago se realiza triple</option>
		</select>
		<br>
		<label>Num. deducciones fijas: </label>
		<select name="NumDeducFijas">
			<option><?php echo $parametroscalculo->NumDeducFijas;?></option>
			<option value="1">1 No se Descuentan</option>
			<option value="2">2 El descuento se realiza solo una vez</option>
			<option value="3">3 El descuento se realiza doble</option>
			<option value="4">4 El descuento se realiza triple</option>
		</select><br>
		<label>Numero de dias a cotizar: </label>
		<input type="number" name="NumDiasCotizar" value="<?php echo $parametroscalculo->NumDiasCotizar;?>"><br>
		<label>Salario semanal deducible: </label>
		<select name="SalSemaDeducible">
			<option><?php echo $parametroscalculo->SalSemaDeducible;?></option>
			<option value="1">1 Minimo por 7 dias</option>
			<option value="2">2 Minimo por 7.0192</option>
		</select>
		<br>
		<label>Forma descuento I.S.P.T: </label>
		<select name="FormDescISPT">
			<option><?php echo $parametroscalculo->FormDescISPT;?></option>
			<option value="1">1 No descuento ISPT</option>
			<option value="2">2 Todos los periodos con la tabla semanal</option>
			<option value="3">3 Ultimo Periodo del año de la tabla anual</option>
		</select><br>
		<label>Num Tabla mensual de I.S.P.T: </label>
		<input type="number" name="NumTabMensISPT" value="<?php echo $parametroscalculo->NumTabMensISPT;?>"><br>
	</div>
	<div class="col-md-6">
		<br>
		<br>
		<br>
		<br>
		<label>Numero de periodo: </label>
		<input type="number" name="NumPeriodo" value="<?php echo $parametroscalculo->NumPeriodo;?>"><br>
		<label>Fecha Inicial: </label>
		<input type="date" name="FechaInicial" value="<?php echo $parametroscalculo->FechaInicial;?>"><br>
		<label>Fecha Final: </label>
		<input type="date" name="FechaFinal" value="<?php echo $parametroscalculo->FechaFinal;?>"><br>
		<label>Numero de dias a pagar: </label>
		<input type="number" name="NumDiasPagar" value="<?php echo $parametroscalculo->NumDiasPagar;?>"><br>
	</div>
	<?php } ?>
</div>
<hr>
<!--<a href=""class="btn btn-inverse" role="primary">Modificar</a>-->
<input type="submit" name="" value="Aceptar" class="btn btn-success">
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
</form>
<?php require 'footer.php'; ?>