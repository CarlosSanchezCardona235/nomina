<?php 
/**
 * 
 */
class Ccatalogo_empleados extends CI_controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('mCatalogo_empleados');

	}
	public function index(){
		//$this->load->view('vCatalogo_empleados');

		$data = array(
        'empleados' => $this->mCatalogo_empleados->vertodo()
    	);
    	$this->load->view('vCatalogo_empleados',$data);
	}
	
	public function guardar(){
		$param["numero_empleado"] = $this->input->post('numero_empleado');
		$param["fecha_ingreso"] = $this->input->post('fecha_ingreso');
		$param["fecha_baja"] = $this->input->post('fecha_baja');
		$param["appaterno"] = $this->input->post('appaterno');
		$param["apmaterno"] = $this->input->post('apmaterno');
		$param["nombre"] = $this->input->post('nombre');
		$param["rfc"] = $this->input->post('rfc');
		$param["fecha_nacimiento"] = $this->input->post('fecha_nacimiento');
		$param["edad"] = $this->input->post('edad');
		$param["genero"] = $this->input->post('genero');
		$param["estado_civil"] = $this->input->post('estado_civil');
		$param["calle"] = $this->input->post('calle');
		$param["numero_interior"] = $this->input->post('numero_interior');
		$param["numero_exterior"] = $this->input->post('numero_exterior');
		$param["colonia"] = $this->input->post('colonia');
		$param["ciudad"] = $this->input->post('ciudad');
		$param["estado"] = $this->input->post('estado');
		$param["telefono"] = $this->input->post('telefono');
		$param["email"] = $this->input->post('email');
		$param["seguro_social"] = $this->input->post('seguro_social');
		$param["curp"] = $this->input->post('curp');
		$param["numdepartamento"] = $this->input->post('numdepartamento');
		$param["departamento"] = $this->input->post('departamento');
		$param["categoria"] = $this->input->post('categoria');
		$param["area_geografica"] = $this->input->post('area_geografica');
		$param["tipo_empleado"] = $this->input->post('tipo_empleado');
		$param["sindicalizado"] = $this->input->post('sindicalizado');
		$param["tipo_nomina"] = $this->input->post('tipo_nomina');
		$param["tipo_sueldo"] = $this->input->post('tipo_sueldo');
		$param["sueldo"] = $this->input->post('sueldo');
		$param["salario_diario_integrado"] = $this->input->post('salario_diario_integrado');
		$param["calculo_imss"] = $this->input->post('calculo_imss');
		$param["numero_cuenta"] = $this->input->post('numero_cuenta');
		$param["banco"] = $this->input->post('banco');
		$param["tipo_regimen"] = $this->input->post('tipo_regimen');
		$param["registro_patronal"] = $this->input->post('registro_patronal');
		$param["riesgo_puesto"] = $this->input->post('riesgo_puesto');
		$param["tipo_jornada"] = $this->input->post('tipo_jornada');
		$param["tipo_contrato"] = $this->input->post('tipo_contrato');
		$param["entidad_fed_segunsat"] = $this->input->post('entidad_fed_segunsat');



		$this->mCatalogo_empleados->guardar($param);
		redirect('cCatalogo_empleados');
	}
	public function actualizar_datos(){
		//$param["numero_empleado"] = $this->input->post('numero_empleado');
		$param["fecha_ingreso"] = $this->input->post('fecha_ingreso');
		$param["fecha_baja"] = $this->input->post('fecha_baja');
		$param["appaterno"] = $this->input->post('appaterno');
		$param["apmaterno"] = $this->input->post('apmaterno');
		$param["nombre"] = $this->input->post('nombre');
		$param["rfc"] = $this->input->post('rfc');
		$param["fecha_nacimiento"] = $this->input->post('fecha_nacimiento');
		$param["edad"] = $this->input->post('edad');
		$param["genero"] = $this->input->post('genero');
		$param["estado_civil"] = $this->input->post('estado_civil');
		$param["calle"] = $this->input->post('calle');
		$param["numero_interior"] = $this->input->post('numero_interior');
		$param["numero_exterior"] = $this->input->post('numero_exterior');
		$param["colonia"] = $this->input->post('colonia');
		$param["ciudad"] = $this->input->post('ciudad');
		$param["estado"] = $this->input->post('estado');
		$param["telefono"] = $this->input->post('telefono');
		$param["email"] = $this->input->post('email');
		$param["seguro_social"] = $this->input->post('seguro_social');
		$param["curp"] = $this->input->post('curp');
		$param["numdepartamento"] = $this->input->post('numdepartamento');
		$param["departamento"] = $this->input->post('departamento');
		$param["categoria"] = $this->input->post('categoria');
		$param["area_geografica"] = $this->input->post('area_geografica');
		$param["tipo_empleado"] = $this->input->post('tipo_empleado');
		$param["sindicalizado"] = $this->input->post('sindicalizado');
		$param["tipo_nomina"] = $this->input->post('tipo_nomina');
		$param["tipo_sueldo"] = $this->input->post('tipo_sueldo');
		$param["sueldo"] = $this->input->post('sueldo');
		$param["salario_diario_integrado"] = $this->input->post('salario_diario_integrado');
		$param["calculo_imss"] = $this->input->post('calculo_imss');
		$param["numero_cuenta"] = $this->input->post('numero_cuenta');
		$param["banco"] = $this->input->post('banco');
		$param["tipo_regimen"] = $this->input->post('tipo_regimen');
		$param["registro_patronal"] = $this->input->post('registro_patronal');
		$param["riesgo_puesto"] = $this->input->post('riesgo_puesto');
		$param["tipo_jornada"] = $this->input->post('tipo_jornada');
		$param["tipo_contrato"] = $this->input->post('tipo_contrato');
		$param["entidad_fed_segunsat"] = $this->input->post('entidad_fed_segunsat');

		$this->mCatalogo_empleados->actualizar_datos($param);

		//$this->load->view('vCatalogo_empleados');
		$this->session->sess_destroy();

		redirect('cCatalogo_empleados'); 	
	}
	public function eliminar_empleado(){
		$num_emp = $this->input->post('numero_empleado');
		$this->mCatalogo_empleados->eliminar_empleado($num_emp);
		redirect('cCatalogo_empleados');
	}
	public function buscar_empleado(){
		$numero = $this->input->post('numero_empleado');

		$resultado = $this->mCatalogo_empleados->buscar_empleado($numero);

		//print_r( $resultado);
		//return;
		
		//$this->session->set_userdata($resultado);	
		//where = numero;
		//$result= modelo->select()
		//$data['fecha_ingreso'] = "My Real Heading";


		if (count($resultado) == 1) {
			$this->load->view('vUpdate_Catalogo_empleados',$resultado);
	 }
		else{
		 	$this->load->view('vCatalogo_empleados');
			echo "Numero de empleado Inexistente";
			//print_r('$resultado');
		}	
	}
}
?>