<?php require 'header.php'; ?>
<h1>Modificacion Movimientos Registrados</h1>
<br>
<br>
	<form action="<?php echo base_url(); ?>cMovimientosfijos_empleado/guardar" method="POST">
		<label>Percepcion/Deduccion: </label>
		<input type="number" name="NumPerDec">
		<input type="text" name="concepto" ><br>
		<label>Inicial: </label>
		<input type="number" name="Total" placeholder="0.000">
		<label>Aplicado: </label>
		<input type="number" name="aplicado" placeholder="0.000"><br>
		<label>Por Periodo: </label>
		<input type="number" name="por_periodo" placeholder="0.000">
		<label>Por Aplicar: </label>
		<input type="Number" name="por_aplicar" placeholder="0.000">
		<br>
		<input type="submit" name="" value="Aceptar y Guardar" class="btn btn-success"><br>
	</form>
<?php require 'footer.php'; ?>