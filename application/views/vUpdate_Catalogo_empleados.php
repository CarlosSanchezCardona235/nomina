<?php require 'header.php'; ?>  
<!--<?php //echo "empleado:" .$numero_empleado;  ?>
<?php //echo $fecha_ingreso;?>
<?php //echo $appaterno;?>
<?php //echo "nombre:".$nombre;?>


<?php //echo "nombre:".$edad;?>-->
		<form class="form-horizontal" role="form" action="<?php echo base_url(); ?>cCatalogo_empleados/actualizar_datos" method="POST">

		<!--<?php //echo "Empleado Numero: ".$this->session->flashdata('$s_numero'); ?>-->
		<h1 align="center">Actualización de datos</h1>

		<div class="form-group">
				<label>Fecha Ingreso:  </label><input type="text" name="fecha_ingreso" value=" <?php echo $fecha_ingreso;?>"> 
				<label>Fecha Baja:  </label><input type="text" name="fecha_baja" value=" <?php echo $fecha_baja;?>"><br>
				<label>Apellido Paterno:  </label><input type="text" name="appaterno"  value=" <?php echo $appaterno;?>">
				<label>Apellido Materno:  </label><input type="text" name="apmaterno"   value=" <?php echo $apmaterno;?>">
				<label>Nombre:  </label><input type="text" name="nombre" value="<?php echo $nombre;?>">
		</div>
	<hr>
	<h2>Datos Generales</h2>
	<label>RFC: </label><input type="text" name="rfc" value=" <?php echo $rfc;?>"><br>
	<label>Fecha de Nacimiento:  </label><input type="text" name="fecha_nacimiento" value=" <?php echo $fecha_nacimiento;?>">
	<label>Edad: </label><input type="text" name="edad" value=" <?php echo $edad;?>"><br>
	<label>Genero</label>
	<select name="genero">
		<option value="masculino">Masculino</option>
		<option value="femenino">Femenino</option>
	</select>
	<label>Estado Civil</label>
	<SELECT name="estado_civil"> 
		<option value="casado">Casado</option>
		<option value="soltero">Soltero</option>
		<option value="viudo">Viudo</option>
		<option	value="union_libre">Union libre</option>
		<option value="divorciado">Divorciado</option>
	</SELECT>
	<br><br><h3>Domicilio</h3>
	<label>Calle: </label><input type="text" name="calle" value=" <?php echo $calle;?>">
	<label>Numero Int: </label><input type="text" name="numero_interior" value=" <?php echo $numero_interior;?>">
	<label>Numero Ext.</label><input type="text" name="numero_exterior" value=" <?php echo $numero_exterior;?>"><br>
	<label>Colonia:  </label><input type="text" name="colonia" value=" <?php echo $colonia;?>">
	<label>Ciudad:  </label><input type="text" name="ciudad" value=" <?php echo $ciudad;?>">
	<label>Estado</label><input type="text" name="estado" value=" <?php echo $estado;?>"><br>
	<label>Telefono:  </label><input type="text" name="telefono" value=" <?php echo $telefono;?>">
	<label>Email:  </label><input type="email" name="email" value=" <?php echo $email;?>"><br>
	<br>
	<hr>
	<h2>Documetacion</h2>
	<label>Seguro Social: </label><input type="text" name="seguro_social" value=" <?php echo $seguro_social;?>">
	<label>CURP: </label><input type="text" name="curp" value=" <?php echo $curp;?>"><br>
	<label>Departamento: </label><input type="text" name="departamento" value=" <?php echo $departamento;?>">
	<label>Categoria: </label><input type="text" name="categoria" value=" <?php echo $categoria;?>"><br>
	<label>Area Geografica: </label><input type="text" name="area_geografica" value=" <?php echo $area_geografica;?>">
	<label>Tipo Empleado: </label>
	<select name="tipo_empleado">
		<option value="Eventual">Eventual</option>
		<option value="Permanente">Permanente</option>
		<option value="Consultor">Consultor</option>
	</select>
	<br><label>Sindicalizado: </label>
	<select name="sindicalizado">
		<option value="Si">Si</option>
		<option value="No">No</option>
	</select>
	<br>
	<hr>
	<h2>Sueldo</h2>
	<label>Tipo de Nomina:  </label>
	<select name="tipo_nomina">
		<option value="Semanal">Semanal</option>
		<option value="Decenal">Decenal</option>
		<option value="Quincenal">Quincenal</option>
		<option value="Mensual">Mensual</option>
	</select>
	<label>Tipo de Sueldo:  </label>
	<select name="tipo_sueldo">
		<option value="Diario">Diario</option>
		<option value="Hora">Hora</option>
		<option value="Semanal">Semanal</option>
		<option value="Mensual">Mensual</option>
	</select><br>
	<label>Sueldo:  </label><input type="number" name="sueldo" step="0.01" value=" <?php echo $sueldo;?>">
	<label>Salario Diario Integrado</label><input type="number" name="salario_diario_integrado" step="0.01" value=" <?php echo $salario_diario_integrado;?>"><br>
	<label>Calculo IMMS:  </label>
	<select name="calculo_imss">
		<option value="Si">Si</option>
		<option value="No">No</option>
	</select>
	<label>Numero Cuenta:  </label><input type="text" name="numero_cuenta" value=" <?php echo $numero_cuenta;?>">
	<label>Banco: </label><input type="text" name="banco" value=" <?php echo $banco;?>">
	<label>Tipo Regimen: </label><input type="text" name="tipo_regimen" value=" <?php echo $tipo_regimen;?>">
	<label>Registro Patronal: </label><input type="text" name="registro_patronal" value=" <?php echo $registro_patronal;?>">
	<label>Riesgo Puesto: </label><input type="text" name="riesgo_puesto" value=" <?php echo $riesgo_puesto;?>">
	<label>Tipo Jornada: </label><input type="text" name="tipo_jornada" value=" <?php echo $tipo_jornada;?>">
	<label>Tipo Contrato: </label><input type="text" name="tipo_contrato" value=" <?php echo $tipo_contrato;?>">
	<label>Entidad Federativa Segun SAT: </label><input type="text" name="entidad_fed_segunsat" value=" <?php echo $entidad_fed_segunsat;?>"><br>
	<br><input type="submit" value="Actualizar" name="" >
	</form>

<?php require 'footer.php';  ?>