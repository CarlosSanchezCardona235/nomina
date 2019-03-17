<?php 
/**
  * 
  */
 class Cmovimientosfijos_empleado extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mMovimientosfijos_empleado');
 	}
	public function index(){
		//$this->load->view('vCatalogo_empleados');

		$data = array(
        'movfijosempleado' => $this->mMovimientosfijos_empleado->vertodo()
    	);
    	$this->load->view('vMovimientosfijos_empleado',$data);
	}
 	

	public function buscar_empleado(){
	
		$numero = $this->input->post('numero_emp');


		$resultado_total = $this->mMovimientosfijos_empleado->buscar_empleado($numero);
		//$resultado=$resultado_total->result_object;

		//print_r($resultado);
		//return;
		
		//$this->session->set_userdata($resultado);	
		//where = numero;
		//$result= modelo->select()
		//$data['fecha_ingreso'] = "My Real Heading";

		$this->load->view('vActualizarMovEmpleado',$resultado_total);

	/*	if (count($resultado) == 1) {
		//	$this->load->view('vActualizarMovEmpleado',$resultado);
	 }
		else{
		 	$this->load->view('vMovimientosfijos_empleado');
		//	echo "Numero de empleado Inexistente";
			//print_r('$resultado');
		} */	
	}
		public function guardar(){
		$param["numero_emp"] = $this->input->post('numero_emp');
		$param["NumPerDec"] = $this->input->post('NumPerDec');
		$param["concepto"] = $this->input->post('concepto');
		$param["Total"] = $this->input->post('Total');
		$param["aplicado"] = $this->input->post('aplicado');
		$param["por_periodo"] = $this->input->post('por_periodo');
		$param["por_aplicar"] = $this->input->post('por_aplicar');

		$this->mMovimientosfijos_empleado->guardar($param);
		redirect('cMovimientosfijos_empleado');
	}
	public function modficar_movfijos(){
		$this->load->view('vModMovFijos');
	}
		public function eliminar_empleado(){
		$num_emp = $this->input->post('numero_empleado');
		$this->mCatalogo_empleados->eliminar_empleado($num_emp);
		redirect('cCatalogo_empleados');
	}


 } 
 ?>