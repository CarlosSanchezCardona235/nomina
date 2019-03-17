<?php require 'header.php' 
?>
<form  action="<?php echo base_url(); ?>cPercepciones_deducciones/guardar" method="POST">
	<h1 align="center">Percepciones y Deducciones</h1>	
		<P>
			<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsePercepciones" aria-expanded="false" aria-controls="collapsePercepciones">
				Percepciones del 1 al 499
			</button>
						
			<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseDeducciones" aria-expanded="false" aria-controls="collapseDeducciones">
				Deducciones del 500 al 999
			</button>
		</P>
		<div class="collapse" id="collapsePercepciones">
			<div class="card card-body">	
					<table class="table table-hover table-sm" style="font-size: 12px">
						<tbody>
							<tr class="btn-inverse">
								<td>No</td>
								<td>Descripcion</td>
								<td>Total</td>
								<td>ISPT</td>
								<td>INFON</td>
								<td>PTU</td>
								<td>SDI</td>
								<td>Movim</td>
								<td>Auto_exento</td>
								<td>Porcentaje</td>
							</tr>
						</tbody>
						<?php 
						foreach($perce_deduc as $perce_dedu) { ?>
						<tr class="celda">
							<td><?php echo $perce_dedu->pydnumero;?></td>
							<td><?php echo $perce_dedu->pyddescri;?></td>
							<td><?php echo $perce_dedu->pydacptot;?></td>
							<td><?php echo $perce_dedu->pydacpgra;?></td>
							<td><?php echo $perce_dedu->pydacpgin;?></td>
							<td><?php echo $perce_dedu->pydacpptu;?></td>
							<td><?php echo $perce_dedu->pydacpsdi;?></td>
							<td><?php echo $perce_dedu->pydtipmov;?></td>
							<td><?php echo $perce_dedu->gravaexcen;?></td>
							<td><?php echo $perce_dedu->pydporcen;?></td>
						</tr>
					<?php } ?>	
					</table>
			</div>
		</div>
		<div class="collapse" id="collapseDeducciones">
			<div class="card card-body">
				<table class="table table-hover table-sm" style="font-size: 12px">
						<tbody>
							<tr class="btn-inverse">
								<td>No</td>
								<td>Descripcion</td>
								<td>Total</td>
								<td>ISPT</td>
								<td>INFON</td>
								<td>PTU</td>
								<td>SDI</td>
								<td>Movim</td>
								<td>Auto_exento</td>
								<td>Porcentaje</td>
							</tr>
						</tbody>
						<?php 
						foreach($perce_deducion as $perce_deduc) { ?>
						<tr>
							<td><?php echo $perce_deduc->pydnumero;?></td>
							<td><?php echo $perce_deduc->pyddescri;?></td>
							<td><?php echo $perce_deduc->pydacptot;?></td>
							<td><?php echo $perce_deduc->pydacpgra;?></td>
							<td><?php echo $perce_deduc->pydacpgin;?></td>
							<td><?php echo $perce_deduc->pydacpptu;?></td>
							<td><?php echo $perce_deduc->pydacpsdi;?></td>
							<td><?php echo $perce_deduc->pydtipmov;?></td>
							<td><?php echo $perce_deduc->gravaexcen;?></td>
							<td><?php echo $perce_deduc->pydporcen;?></td>
						</tr>
					<?php } ?>	
					</table>
			</div>
		</div>
		<hr>
	<label>Percepcion o deduccion: </label><input type="text" name="pydnumero">
		<input type="text" name="pyddescri" placeholder="definicion" style="background-color:yellow" ><br>
	<label>Tipo Moviminento: </label>
		<input type="text" name="pydtipmov" placeholder="D (ejemplo)">

<h6>Aculumadores</h6>
<div class="row">
	<div class="col-md-9">
				<label>Percepcion Total: </label>
				<input type="number" name="pydacptot">
			<label>Percepcion GRavable de I.S.P.T: </label>
				<input type="number" name="pydacpgra">
			<label>Percepcion Sal. Diario Int.: </label>
				<input type="number" name="pydacpsdi">
			<label>Percepcion Gravable de INFONAVIT: </label>
				<input type="number" name="pydacpgin">
			<label>Percepcion Afectable a P.T.U: </label>
				<input type="number" name="pydacpptu">
			<label>Porcentaje de Calculo</label>
				<input type="number" name="pydporcen" placeholder="0.0000">	
	</div>
	<div class="col-md-3">
		<label>0 - No se suma</label>
		<label>1 - Se suma al mensual Y al anual</label>
	</div>	
</div>
<input type="submit" value="Agregar" class="btn btn-success"><br>
</form>
<hr>
<form action="<?php base_url(); ?>cPercepciones_deducciones/buscar_perdec" method="POST">
	<label>Ingresa el numero de percepcion o deduccion: </label><br>
	<input type="number" name="pydnumero">
	<input type="submit" class="btn btn-inverse" value="Modificar">
</form>
<form action="<?php base_url(); ?>cPercepciones_deducciones/eliminar_perdec" method="POST">
	<input type="number" name="pydnumero">
	<input type="submit" class="btn btn-danger" value="Eliminar">	
</form>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger btn-lg" role="button">Salir</a>
<?php require 'footer.php' ?>