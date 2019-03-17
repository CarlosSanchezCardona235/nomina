<?php require 'header.php';?>
<h1 align="center">Modificar Percepción o Deducción</h1>

<form action="<?php echo base_url(); ?>cPercepciones_deducciones/actualizar_datos" method="POST">
	<hr>
	<label>Percepcion o deduccion: </label><input type="text" name="pydnumero" value="<?php echo $pydnumero;?>">
		<input type="text" name="pyddescri" placeholder="definicion" style="background-color:yellow" value=" <?php echo $pyddescri;?>"><br>
	<label>Tipo Moviminento: </label>
		<input type="text" name="pydtipmov" placeholder="D (ejemplo)" value="<?php echo $pydtipmov;?>">

	<h6>Aculumadores</h6>
<div class="row">
	<div class="col-md-9">
				<label>Percepcion Total: </label>
				<input type="number" name="pydacptot" value="<?php echo $pydacptot;?>">
			<label>Percepcion GRavable de I.S.P.T: </label>
				<input type="number" name="pydacpgra" value="<?php echo $pydacpgra;?>">
			<label>Percepcion Sal. Diario Int.: </label>
				<input type="number" name="pydacpsdi" value="<?php echo $pydacpsdi;?>">
			<label>Percepcion Gravable de INFONAVIT: </label>
				<input type="number" name="pydacpgin" value="<?php echo $pydacpgin;?>">
			<label>Percepcion Afectable a P.T.U: </label>
				<input type="number" name="pydacpptu" value="<?php echo $pydacpptu;?>">
			<label>Porcentaje de Calculo</label>
				<input type="number" name="pydporcen" placeholder="0.0000" value="<?php echo $pydporcen;?>">	
	</div>
	<div class="col-md-3">
		<label>0 - No se suma</label>
		<label>1 - Se suma al mensual Y al anual</label>
	</div>	
</div>

<input type="submit" value="Actualizar" class="btn btn-success"><br>
</form>
<?php require 'footer.php';?>