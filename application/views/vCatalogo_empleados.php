<?php require 'header.php'; ?>

<h1 align="center">Catalogo Empleados</h1>
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Agregar Empleado
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
			<form class="form-horizontal" role="form" action="<?php echo base_url(); ?>cCatalogo_empleados/guardar" method="POST">
					<P>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseDatosGenerales" aria-expanded="false" aria-controls="collapseDatosGenerales">
							 Datos Generales
						</button>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseDomicilio" aria-expanded="false" aria-controls="collapseDomicilio">
							 Domicilio
						</button>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseDocumentacion" aria-expanded="false" aria-controls="collapseDocumentacion">
							 Documentacion
						</button>
						<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseSueldo" aria-expanded="false" aria-controls="collapseSueldo">
							 Sueldo
						</button>


					</P>
					<div class="collapse" id="collapseDatosGenerales">	
						<div class="card card-body">
							<div class="row">
								<div class="col-md-6">
									<label>Numero Empleado:  </label><input type="number" name="numero_empleado"><br>
									<label>Fecha Ingreso:  </label><input type="date" name="fecha_ingreso"><br>
									<label>Fecha Baja:  </label><input type="date" name="fecha_baja"><br>
									<label>Apellido Paterno:  </label><input type="text" name="appaterno"><br>
									<label>Apellido Materno:  </label><input type="text" name="apmaterno"><br>
									<label>Nombre:  </label><input type="text" name="nombre"><br>
									
								</div>
								<div class="col-md-6">
									<label>RFC: </label><input type="text" name="rfc"><br>
									<label>Fecha de Nacimiento:  </label><input type="date" name="fecha_nacimiento"><br>
									<label>Edad: </label><input type="number" name="edad"><br>
									<label>Genero: </label>
										<select name="genero">
											<option value="masculino">Masculino</option>
											<option value="femenino">Femenino</option>
										</select><br>
									<label>Estado Civil: </label>
									<SELECT name="estado_civil"> 
										<option value="casado">Casado</option>
										<option value="soltero">Soltero</option>
										<option value="viudo">Viudo</option>
										<option	value="union_libre">Union libre</option>
										<option value="divorciado">Divorciado</option>
									</SELECT><br>
								</div>
							</div>
									
						</div>
					</div>	
						
					<div class="collapse" id="collapseDomicilio">
						<div class="card card-body">
							<h3 align="center">Domicilio</h3>
							<div class="row">
								<div class="col-md-6">
									<label>Calle: </label><input type="text" name="calle"><br>
									<label>Numero Int: </label><input type="text" name="numero_interior"><br>
									<label>Numero Ext.</label><input type="text" name="numero_exterior"><br>
									<label>Colonia:  </label><input type="text" name="colonia"><br>
								</div>
								<div class="col-md-6">
									<label>Ciudad:  </label><input type="text" name="ciudad"><br>
									<label>Estado</label><input type="text" name="estado"><br>
									<label>Telefono:  </label><input type="text" name="telefono"><br>
									<label>Email:  </label><input type="email" name="email"><br>
								</div>
							</div>
						</div>
					</div>
					
					<div class="collapse" id="collapseDocumentacion">		
						<div class="card card-body">
							<h2 align="center">Documetacion</h2>
							<div class="row">
								<div class="col-md-6">
										<label>Seguro Social: </label><input type="text" name="seguro_social"><br>
										<label>CURP: </label><input type="text" name="curp"><br>
										<label>Departamento: </label><input type="number" name="numdepartamento"><input type="text" name="departamento"><br>
										<label>Categoria: </label><input type="text" name="categoria"><br>
										<label>Area Geografica: </label><input type="number" name="area_geografica"><br>
								</div>
								<div class="col-md-6">
									<label>Tipo Empleado: </label>
									<select name="tipo_empleado">
										<option value="Eventual">Eventual</option>
										<option value="Permanente">Permanente</option>
										<option value="Consultor">Consultor</option>
									</select><br>
									<br><label>Sindicalizado: </label>
									<select name="sindicalizado">
										<option value="Si">Si</option>
										<option value="No">No</option>
									</select><br>
									
								</div>
							</div>
						</div>
					</div>

					<div class="collapse" id="collapseSueldo">
						<div class="card card-body">
							<h3>Sueldo</h3>
								<div class="row">
									<div class="col-md-6">
										<label>Tipo de Nomina:  </label>
											<select name="tipo_nomina">
												<option value="Semanal">Semanal</option>
												<option value="Decenal">Decenal</option>
												<option value="Quincenal">Quincenal</option>
												<option value="Mensual">Mensual</option>
											</select><br>
											<label>Tipo de Sueldo:  </label>
											<select name="tipo_sueldo">
												<option value="Diario">Diario</option>
												<option value="Hora">Hora</option>
												<option value="Semanal">Semanal</option>
												<option value="Mensual">Mensual</option>
											</select><br>
											<label>Sueldo:  </label><input type="number" name="sueldo" step="0.0001"><br>
											<label>Salario Diario Integrado</label><input type="number" name="salario_diario_integrado" step="0.0001"><br>
											<label>Calculo IMMS:  </label>
											<select name="calculo_imss">
												<option value="Si">Si</option>
												<option value="No">No</option>
											</select><br>											
											<label>Numero Cuenta:  </label><input type="text" name="numero_cuenta"><br>
											<label>Banco: </label><input type=text"" name="banco"><br>
									</div>
									<div class="col-md-6">
											<label>Tipo Regimen: </label><input type="text" name="tipo_regimen"><br>
											<label>Registro Patronal: </label><input type="text" name="registro_patronal"><br>
											<label>Riesgo Puesto: </label><input type="text" name="riesgo_puesto"><br>
											<label>Tipo Jornada: </label><input type="text" name="tipo_jornada"><br>
											<label>Tipo Contrato: </label><input type="text" name="tipo_contrato"><br>
											<label>Entidad Federativa Segun SAT: </label><input type="text" name="entidad_fed_segunsat"><br>
									</div>
								</div>
						</div>
					</div>
				<input type="submit" value="Guardar" name="" class="btn btn-success">
				</form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Buscar Empleados
        </button>
      </h5>
    </div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
					<h3>Buscar Empleado</h3>
						<form action="<?php base_url(); ?>cCatalogo_empleados/buscar_empleado" method="POST">
						<table>
							<tr>
								<td><label>Numero Empleado</label></td>
								<td><input type="numeric" name="numero_empleado" ></td>
							</tr>
							<tr>
								<td><input type="submit" value="Buscar" class="btn btn-success"></td>
							</tr>
						</table>
						</form>
						<div class="table-responsive">
							<table class="table table-hover" >
								<tbody>
									<tr class="btn-inverse">
										<td>Numero Emp</td>
										<td>Fecha Ingreso</td>
										<td>Fecha Baja</td>
										<td>Apellido Paterno </td>
										<td>Apellido Materno</td>
										<td>Nombre</td>
										<td>RFC</td>
										<td>Fecha Nacimiento</td>
										<td>Edad</td>
										<td>Genero</td>
										<td>Estado Civil</td>
										<td>Calle</td>
										<td>Numero Int.</td>
										<td>Numero Ext.</td>
										<td>Colonia</td>
										<td>Ciudad</td>
										<td>Estado</td>
										<td>Telefono</td>
										<td>Email</td>
										<td>Seguro Social</td>
										<td>CURP</td>
										<td>Num Departamento</td>
										<td>Departamento</td>
										<td>Categoria</td>
										<td>Area Geografica</td>
										<td>Tipo Empleado</td>
										<td>Sindicalizado</td>
										<td>Tipo Nomina</td>
										<td>Tipo Sueldo</td>
										<td>Sueldo</td>
										<td>Salario Diario Int.</td>
										<td>Calculo IMSS</td>
										<td>Numero Cuenta</td>
										<td>Banco</td>
										<td>Tipo Regimen</td>
										<td>Registro Patronal</td>
										<td>Riesgo Puesto</td>
										<td>Tipo Jornada</td>
										<td>Tipo Contrato</td>
										<td>Entidad Fed. Segun SAT</td>
									</tr>
								</tbody>
								    <?php 
								    foreach($empleados as $empleado) { ?>
								    <tr>
								        <td><?php echo $empleado->numero_empleado;?></td>
								        <td><?php echo $empleado->fecha_ingreso;?></td>
								        <td><?php echo $empleado->fecha_baja;?></td>
								        <td><?php echo $empleado->appaterno;?></td>
								        <td><?php echo $empleado->apmaterno;?></td>
								        <td><?php echo $empleado->nombre;?></td>
								        <td><?php echo $empleado->rfc;?></td>
								        <td><?php echo $empleado->fecha_nacimiento;?></td>
								        <td><?php echo $empleado->edad;?></td>
								        <td><?php echo $empleado->genero;?></td>
								        <td><?php echo $empleado->estado_civil;?></td>
								        <td><?php echo $empleado->calle;?></td>
								        <td><?php echo $empleado->numero_interior;?></td>
								        <td><?php echo $empleado->numero_exterior;?></td>
								        <td><?php echo $empleado->colonia;?></td>
								        <td><?php echo $empleado->ciudad;?></td>
								        <td><?php echo $empleado->estado;?></td>
								        <td><?php echo $empleado->telefono;?></td>
								        <td><?php echo $empleado->email;?></td>
								        <td><?php echo $empleado->seguro_social;?></td>
								        <td><?php echo $empleado->curp;?></td>
								        <td><?php echo $empleado->numdepartamento;?></td>
								        <td><?php echo $empleado->departamento;?></td>
								        <td><?php echo $empleado->categoria;?></td>
								        <td><?php echo $empleado->area_geografica;?></td>
								        <td><?php echo $empleado->tipo_empleado;?></td>
								        <td><?php echo $empleado->sindicalizado;?></td>
								        <td><?php echo $empleado->tipo_nomina;?></td>
								        <td><?php echo $empleado->tipo_sueldo;?></td>
								        <td><?php echo $empleado->sueldo;?></td>
								        <td><?php echo $empleado->salario_diario_integrado;?></td>
								        <td><?php echo $empleado->calculo_imss;?></td>
								        <td><?php echo $empleado->numero_cuenta;?></td>
								        <td><?php echo $empleado->banco;?></td>
								        <td><?php echo $empleado->tipo_regimen;?></td>
								        <td><?php echo $empleado->registro_patronal;?></td>
								        <td><?php echo $empleado->riesgo_puesto;?></td>
								        <td><?php echo $empleado->tipo_jornada;?></td>
								        <td><?php echo $empleado->tipo_contrato;?></td>
								        <td><?php echo $empleado->entidad_fed_segunsat;?></td>
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
          Eliminar Empleados
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
    	
    	<form action="<?php base_url(); ?>cCatalogo_empleados/eliminar_empleado" method="POST">
			<h3>Eliminar por Numero de empleado</h3>
			<input type="numeric" name="numero_empleado" placeholder="Numero de empleado">
			<input type="submit" value="Eliminar" class="btn btn-danger">
		</form>

      </div>
    </div>
  </div>
</div>
<a href="<?php base_url(); ?>cMenu_principal" class="btn btn-danger" role="button">Salir</a>
<?php require 'footer.php'; ?>