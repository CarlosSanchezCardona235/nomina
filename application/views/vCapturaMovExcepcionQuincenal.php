<?php require 'header.php'; ?>
<h1 align="center">Captura de Movimientos por excepcion Quincenal</h1>
<form action="<?php echo base_url(); ?>cCapturaMovExcepcionQuincenal/guardar" method="POST">
	<hr>
<!--
<div class="row">
	<div class="col-md-6">
		<label>Cargar archivo </label>
		<input type="text" name="">
		<button>...</button>		
	</div>
	<div class="col-md-6">
		<label>Registros Cargados</label><input type="text" name="">
		<button>Cargar</button> 	
	</div>
</div>
<hr>
-->
<div class="table-responsive">
	<div class="table" align="center">
		<table class="table">
				<tr class="btn-inverse">
					<td>Per/Ded</td>
					<td>Descripcion</td>
					<td>Emp</td>
					<td>Departamento</td>
					<td>Mov En</td>
					<td>Importe</td>
				</tr>
				 <?php 
				foreach($movexcepcion as $movexcep) { ?>
					<tr>
				      <td><?php echo $movexcep->num_perdec;?></td>
    			      <td><?php echo $movexcep->desc_mov_excep;?></td>
    			      <td><?php echo $movexcep->numemp_excep;?></td>
    			      <td><?php echo $movexcep->dep_mov_excep;?></td>
  				      <td><?php echo $movexcep->movimiento_en;?></td>
    			      <td><?php echo $movexcep->importe_mov_excep;?></td>
			        </tr>
				<?php } ?>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<label>Per/Dec: </label>
			<input type="number" name="num_perdec" placeholder="0.000">
			<input type="text" name="desc_mov_excep" placeholder="descripcion"><br>
		<label>Empleado: </label>
			<input type="number" name="numemp_excep"><br>
	</div>
	<div class="col-md-6">
		<label>Departamento: </label>
			<input type="text" name="dep_mov_excep"><br>
		<label>Mov en: </label>
		<select name="movimiento_en">
			<option value="D">D | Dias</option>
			<option value="H">H | Horas</option>
			<option value="$">$ | Pesos</option>
		</select>
		<br>
		<label>Importe: </label>
			<input type="number" name="importe_mov_excep" step="0.000" placeholder="0.000">
	</div>
</div>
<input type="submit" value="Aceptar y guardar" class="btn btn-success btn-lg">
</form>
<br><a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger btn-lg" role="button" >Salir</a>
<?php require 'footer.php'; ?>