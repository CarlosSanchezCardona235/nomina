<?php require 'header.php'; ?>
<h1 align="center"> Calculo de Nomina Fase 1 Quincenal</h1>
<hr>
<?php //var_dump($movexcepcion); ?>
<form action="<?php echo base_url(); ?>cCalculoFase1Quincenal/primera_fase" method="POST">
<label>Periodo: </label>
	<input type="number" name="" placeholder="1"><br>
<label>Dias a Pagar: </label>
	<input type="number" name="" placeholder="15"><br>
<label>Fecha Inicial: </label>
	<input type="date" name=""><br>
<label>Fecha Final: </label>
	<input type="date" name=""><br>
<input type="submit" name="" value="Calcular" class="btn btn-success"><br>
</form>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>

<?php require 'footer.php'; ?>