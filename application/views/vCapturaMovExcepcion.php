<?php require 'header.php'; ?>
<h1>Captura de Movimientos por Excepcion</h1>
<hr>
<br>
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
<div class="table-responsive">
	<div class="table" align="center">
		<table>
			<tr class="btn-inverse">
				<td>Per/Ded</td>
				<td>Descripcion</td>
				<td>Emp</td>
				<td>Mov En</td>
				<td>Importe</td>
			</tr>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<label>Nombre Empleado: </label>
			<input type="text" name=""><br>
	</div>
	<div class="col-md-6">
		<label>Departamento: </label>
			<input type="text" name=""><br>
	</div>
</div>
<a href=""class="btn btn-warning" role="button">Agregar</a>
<a href=""class="btn btn-success" role="primary">Eliminar</a><br>
<br><a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger btn-lg" role="button" >Salir</a>
<?php require 'footer.php'; ?>