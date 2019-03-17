<?php require 'header.php'; ?>
<h1 align="center">Parametros de Calculo Quincenal</h1>
<form>
<div class="row">
	<div class="col-md-6">
		<label>21.- Tipo de Quincena: </label>
			<select>
				<option>1 Periodo Fijo Siempre 15dias</option>
				<option>2 Periodo Variable Diferente a 15 dias</option>
			</select><br>
		<label>22.-N/Decena en el Mes: </label>
			<select>
				<option>1 Primera Quincena</option>
				<option>2 Segunda Quincena</option>
			</select><br>
		<label>22.-Factor Dias Pagados/Trabajados: </label>
			<input type="number" name="" step="0.0001" placeholder="0.000"><br>
		<label>23.-No. de Percepciones Fijas</label>
			<select>
				<option>1 No se Pagan</option>
				<option>2 El pago se realiza solo una vez</option>
				<option>3 El pago se realiza doble</option>
				<option>4 El pago se realiza triple</option>
			</select><br>
		<label>24.-No de Deducciones Fijas: </label>
			<select>
				<option>1 No se Descuentan</option>
				<option>2 El descuento se realiza solo una vez</option>
				<option>3 El descuento se realiza doble</option>
				<option>4 El descuento se realiza triple</option>
			</select><br>
		<label>25.-No Dias a Cotizar IMSS: </label>
				<input type="numbre" name="" placeholder="15">
	</div>
	<div class="col-md-6">
		<label>27.-Formas de Desc. ISPT: </label>
			<select>
				<option>1 No descuento ISPT</option>
				<option>2 Tabla quincenal cada periodo</option>
				<option>3 Ultimo Periodo del año con tabla anual</option>
			</select><br>
		<label>28.-Numero de tabla de ISPT: </label>
			<input type="number" name=""><br>
		<label>29.-Numero de Periodo: </label>
			<input type="number" name=""><br>
		<label>30.-Fecha Inicial: </label>
			<input type="date" name=""><br>
		<label>31.-Fecha Final: </label>
			<input type="date" name=""><br>
		<label>32.-No Dias a Pagar</label>
			<input type="number" name="" placeholder="15"><br>
	</div>
</div>
<a href=""class="btn btn-inverse" role="primary">Modificar</a>
<input type="submit" name="" value="Aceptar" class="btn btn-success"><br>
</form>
<br><a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>

<?php require 'footer.php'; ?>