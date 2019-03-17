<?php require 'header.php';?>
<h1 align="center">VENTAS</h1>
		

<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          INGRESAR NUEVA VENTA
        </button>
      </h5>
    </div>



    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
   		<div class="card-body">
			<form action="<?php echo base_url(); ?>cventas/guardarventa" method="POST">
				<table >
					<tr>
						<td><label>Id Venta: </label></td>
						<td><input type="text" name="idventa" class="form-control"></td>
					</tr>

					<tr>
						<td><label>Clave del cliente:</label></td>
						<td><select id="cliclave" name="cliclave" class="form-control">
						<option value="0">Id del cliente</option>
						<?php 
						foreach ($cliclave as $x ) {
						echo '<option value="'.$x->cliclave.'">'.$x->cliclave.'</option>';
						}
						?>
						</select></td>
					</tr>
					<tr>
						<td><label>Nombre del producto:</label></td>
						<td><select id="artnombre" name="artnombre" class="form-control">
						<option value="0">Nombre del producto</option>
						<?php 
						foreach ($artnombre as $x ) {
						echo '<option value="'.$x->artnombre.'">'.$x->artnombre.'</option>';
							}
						?>
						</select></td>
					</tr>

					<tr>
						<td><label>Importe: </label></td>
						<td><input type="text" name="importeventa" class="form-control"></td>
					</tr>
					<tr>
						<td><label>Saldo: </label></td>
						<td><input type="text" name="saldoventa" class="form-control"></td>
					</tr>
					<tr>
						<td><label>fecha de la venta: </label></td>
						<td><input type="date" name="fechaventa" class="form-control"></td>
					</tr>
					<tr>
						<td><label>Vendedor: </label></td>
						<td><input type="text" name="idperfil" class="form-control"></td>
					</tr>
					<tr>
						<td><label>Comentarios: </label></td>
						<td><textarea name="comentariosventa" id="comentariosventa" cols="35" rows="6" class="form-control"></textarea></td>
					</tr>

					<tr>
						<td colspan="2"><input type="submit" value="Guardar" onClick="swal ( '¡Buen trabajo!','Los datos se guardaron exitosamente ','success' ) ;" class="btn btn-inverse"></td>
					</tr>
				</table>	
			</form>

		


				<script type="text/javascript">
							$(document).ready(function() {
								$("$cliclave").change(function() {
									$("$cliclave option:selected").each(function() {
										cliclave = $('#cliclave').val();
										$.post("<?php echo base_url();?>cventas/", {
											cliclave : cliclave
										},function(data){
											$("cliclave").html(data);
										
										});
									});
								});
							});
				</script>		

				<script type="text/javascript">
							$(document).ready(function() {
								$("$artnombre").change(function() {
									$("$artnombre option:selected").each(function() {
										artnombre = $('#artnombre').val();
										$.post("<?php echo base_url();?>cventas/", {
											artnombre : artnombre
										},function(data){
											$("artnombre").html(data);
										
										});
									});
								});
							});
				</script>
	 	</div>
 	</div>
 

	<div class="card">
	    <div class="card-header" id="headingTwo">
	      <h5 class="mb-0">
	        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	          BUSQUEDA DE VENTA POR ID
	        </button>
	      </h5>
		</div>
	    
	    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
	     	<div class="card-body">
	
				<form action="<?php echo base_url();?>cventas/buscarventa" method="POST">
						<table>
							<tr>
								<td><label>id de venta: </label></td>
								<td><input type="text" name="idventa" class="form-control"></input></td>
							</tr>

							<tr>
								<td><input type="submit" value="buscar" class="btn btn-inverse"></input></td>
								</tr>
						</table>
				</form>

				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<tr>
						<td>idventa</td>
						<td>Clave cliente</td>
						<td>Nombre del producto</td>
						<td>importe venta</td>
						<td>saldo venta</td>
						<td>fecha de venta</td>
						<td>Idperfil</td>
						<td>comentarios</td>	
					</tr>
					<?php
					foreach ($ventas as $venta) { ?>
						<tr>
						<td><?php echo $venta->idventa;?></td>
						<td><?php echo $venta->cliclave;?></td>
						<td><?php echo $venta->artnombre;?></td>
						<td><?php echo $venta->importeventa;?></td>
						<td><?php echo $venta->saldoventa;?></td>
						<td><?php echo $venta->fechaventa;?></td>
						<td><?php echo $venta->idperfil;?></td>
						<td><?php echo $venta->comentariosventa;?></td>
					</tr>
					<?php } ?>
					</table>
					</div>
			</div>
   		</div>
 	</div>

    
	<div class="card">
	    <div class="card-header" id="headingThree">
	      <h5 class="mb-0">
	        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	          ELIMINAR VENTA
	        </button>
	      </h5>
	    </div>
    
	    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
	      <div class="card-body">

				<form action="<?php echo base_url();?>cventas/eliminarventa/" method="POST">
						<table>
						<tr>
							<td><input type="text" name="idventa" placeholder="id" class="form-control"></input></td><br><br>
						</tr>
						<tr>
							<td><input type="submit" value="Eliminar" class="btn btn-inverse"onClick="
	swal({
  title: '¿Estas seguro de borrar esto ?',
  text: 'Despues ya no podras recuperarlo',
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'si, borralo!',
  cancelButtonText: 'Cancelar',
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isconfirm)
{
  if (isconfirm) {
    	window.location = '<?php echo base_url();?>cventas/eliminarventa/';
    }
  else {
    swal('CANCELADO','tu archivo esta a salvo :)','error');
  }
});" ></input></td>
			</tr>
				</table>
				</form>				

					<div class="table-responsive">
					<table class="table table-striped table-bordered" align="center">
						<tr>
						<td>idventa</td>
						<td>Clave cliente</td>
						<td>Nombre del producto</td>
						<td>importe venta</td>
						<td>saldo venta</td>
						<td>fecha de venta</td>
						<td>Idperfil</td>
						<td>comentarios</td>	
					</tr>
					<?php
					foreach ($ventas as $vent) { ?>
						<tr>
						<td><?php echo $vent->idventa;?></td>
						<td><?php echo $vent->cliclave;?></td>
						<td><?php echo $vent->artnombre;?></td>
						<td><?php echo $vent->importeventa;?></td>
						<td><?php echo $vent->saldoventa;?></td>
						<td><?php echo $vent->fechaventa;?></td>
						<td><?php echo $vent->idperfil;?></td>
						<td><?php echo $vent->comentariosventa;?></td>
					</tr>
					<?php } ?>
					</table>
					</div>	
			</div>
	    </div>
	</div>
    	
    <div class="card">
    	<div class="card-header" id="headingFour">
      		<h5 class="mb-0">
        	  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour<">
          		  EXPORTAR A PDF
        	  </button>
      		</h5>
    	</div>

		<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      		<div class="card-body">
				<form action="<?php echo base_url(); ?>cventas/descargarpdf" method="POST">
					<h3>Impresion del pdf</h3>
						<input type="submit" value="Exportar a pdf" class="btn btn-inverse"></input>
				
				</form>
			</div>
      	</div>
    </div>
  </div>
</div>

<?php require 'footer.php'; ?>