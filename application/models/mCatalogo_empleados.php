<?php 
/**
 * 
 */
class Mcatalogo_empleados extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}

	 	public function vertodo(){
 		$this->db->select('*');
 		$this->db->from('empleados');
		return $this->db->get()->result();

 		
 	}
	public function guardar($param){
		$campos = array(
			'numero_empleado' => $param['numero_empleado'],
			'fecha_ingreso '=> $param['fecha_ingreso'],
			'fecha_baja'=> $param['fecha_baja'],
			'appaterno'=> $param['appaterno'],
			'apmaterno'=> $param['apmaterno'],
			'nombre'=> $param['nombre'],
			'rfc'=> $param['rfc'],
			'fecha_nacimiento'=> $param['fecha_nacimiento'],
			'edad'=> $param['edad'],
			'genero'=> $param['genero'],
			'estado_civil'=> $param['estado_civil'],
			'calle'=> $param['calle'],
			'numero_interior'=> $param['numero_interior'],
			'numero_exterior'=> $param['numero_exterior'],
			'colonia'=> $param['colonia'],
			'ciudad'=> $param['ciudad'],
			'estado'=> $param['estado'],
			'telefono'=> $param['telefono'],
			'email'=> $param['email'],
			'seguro_social'=> $param['seguro_social'],
			'curp'=> $param['curp'],
			'numdepartamento'=> $param['numdepartamento'],
			'departamento'=> $param['departamento'],
			'categoria'=> $param['categoria'],
			'area_geografica'=> $param['area_geografica'],
			'tipo_empleado'=> $param['tipo_empleado'],
			'sindicalizado'=> $param['sindicalizado'],
			'tipo_nomina'=> $param['tipo_nomina'],
			'tipo_sueldo'=> $param['tipo_sueldo'],
			'sueldo'=> $param['sueldo'],
			'salario_diario_integrado'=> $param['salario_diario_integrado'],
			'calculo_imss'=> $param['calculo_imss'],
			'numero_cuenta'=> $param['numero_cuenta'],
			'banco'=> $param['banco'],
			'tipo_regimen'=> $param['tipo_regimen'],
			'registro_patronal'=> $param['registro_patronal'],
			'riesgo_puesto'=> $param['riesgo_puesto'],
			'tipo_jornada'=> $param['tipo_jornada'],
			'tipo_contrato'=> $param['tipo_contrato'],
			'entidad_fed_segunsat'=> $param['entidad_fed_segunsat']



		);
		$this->db->insert('empleados',$campos);
		$this->load->view('vCatalogo_empleados');


	}
	public function actualizar_datos($param){
		$campos = array(
			//'numero_empleado' => $param['numero_empleado'],
			'fecha_ingreso '=> $param['fecha_ingreso'],
			'fecha_baja'=> $param['fecha_baja'],
			'appaterno'=> $param['appaterno'],
			'apmaterno'=> $param['apmaterno'],
			'nombre'=> $param['nombre'],	
			'rfc'=> $param['rfc'],
			'fecha_nacimiento'=> $param['fecha_nacimiento'],
			'edad'=> $param['edad'],
			'genero'=> $param['genero'],
			'estado_civil'=> $param['estado_civil'],
			'calle'=> $param['calle'],
			'numero_interior'=> $param['numero_interior'],
			'numero_exterior'=> $param['numero_exterior'],
			'colonia'=> $param['colonia'],
			'ciudad'=> $param['ciudad'],
			'estado'=> $param['estado'],
			'telefono'=> $param['telefono'],
			'email'=> $param['email'],
			'seguro_social'=> $param['seguro_social'],
			'curp'=> $param['curp'],
			'numdepartamento'=> $param['numdepartamento'],
			'departamento'=> $param['departamento'],
			'categoria'=> $param['categoria'],
			'area_geografica'=> $param['area_geografica'],
			'tipo_empleado'=> $param['tipo_empleado'],
			'sindicalizado'=> $param['sindicalizado'],
			'tipo_nomina'=> $param['tipo_nomina'],
			'tipo_sueldo'=> $param['tipo_sueldo'],
			'sueldo'=> $param['sueldo'],
			'salario_diario_integrado'=> $param['salario_diario_integrado'],
			'calculo_imss'=> $param['calculo_imss'],
			'numero_cuenta'=> $param['numero_cuenta'],
			'banco'=> $param['banco'],
			'tipo_regimen'=> $param['tipo_regimen'],
			'registro_patronal'=> $param['registro_patronal'],
			'riesgo_puesto'=> $param['riesgo_puesto'],
			'tipo_jornada'=> $param['tipo_jornada'],
			'tipo_contrato'=> $param['tipo_contrato'],
			'entidad_fed_segunsat'=> $param['entidad_fed_segunsat']				
		);
		$this->db->where('numero_empleado',$this->session->flashdata('$s_numero'));
		$this->db->update('empleados',$campos);
		

		return 1; 

	}
	public function eliminar_empleado($num_emp){
		$this->db->where('numero_empleado',$num_emp);
		$this->db->delete('empleados');
		$this->load->view('vCatalogo_empleados');
	}
	 	public function buscar_empleado($numero){
 		$this->db->select('e.numero_empleado,e.fecha_ingreso,e.fecha_baja,e.appaterno,e.apmaterno,e.nombre,e.rfc,e.fecha_nacimiento,e.edad,e.genero,e.estado_civil,e.calle,e.numero_interior,e.numero_exterior,e.colonia,e.ciudad,e.estado,e.telefono,e.email,e.seguro_social,e.curp,e.departamento,e.numdepartamento,e.categoria,e.area_geografica,e.tipo_empleado,e.sindicalizado,e.tipo_nomina,e.tipo_sueldo,e.sueldo,e.salario_diario_integrado,e.calculo_imss,e.numero_cuenta,e.banco,e.tipo_regimen,e.registro_patronal,e.riesgo_puesto,e.tipo_jornada,e.tipo_contrato,e.entidad_fed_segunsat');
 		$this->db->from('empleados e');
 		$this->db->where('numero_empleado',$numero);

 		$resultado = $this->db->get();


 		if ($resultado->num_rows() == 1) {
 			 $resul = $resultado->row();

 			 //$this->session->set_userdata('$s_numero',$resul->numero_empleado);
 			 $this->session->set_flashdata('$s_numero',$resul->numero_empleado);
 		return  $resultado->row();
 		}
 		else{
 		return 0;
 		}

 	}

}

?>