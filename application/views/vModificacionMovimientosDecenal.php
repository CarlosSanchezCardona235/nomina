<?php require 'header.php'; ?>
<h1 align="center">Modificacion de Movimientos Decenal</h1>
<label>Empleado: </label>
	<input type="number" name="">
	<input type="text" name="">
<div class=" table table-responsive">
	<div class="table" align="center">
		<table>
			<tr class="btn-inverse">
				<td>Lin</td>
				<td>Num</td>
				<td>Percep/Deduc</td>
				<td>Tarifa</td>
				<td>Cantidad</td>
				<td>Importe</td>
			</tr>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<a href=""class="btn btn-warning" role="button">Nuevo</a>
		<a href=""class="btn btn-inverse" role="primary">Modificar</a>
		<a href=""class="btn btn-info" role="button">Baja</a>
		<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
	</div>
	<div class="col-md-6">
		<label>Total: </label>
			<input type="number" name="">		
	</div>
</div>


<?php require 'footer.php'; ?>