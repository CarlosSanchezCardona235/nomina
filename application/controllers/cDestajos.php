<?php 
/**
  * 
  */
 class Cdestajos extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mDestajos');
 	}
 	public function index(){
 		//$this->load->view('vDestajos');

		$data = array(
        'destajos' => $this->mDestajos->vertodo()
    	);
    	$this->load->view('vDestajos',$data);

 	}

 	public function guardar(){
		$param["clave_destajo"] = $this->input->post('clave_destajo');
		$param["desc_destajo"] = $this->input->post('desc_destajo');
		$param["unidad_med"] = $this->input->post('unidad_med');
		$param["tarifa_unidad"] = $this->input->post('tarifa_unidad');

		$this->mDestajos->guardar($param);
		redirect('cDestajos');
	}
		public function eliminar_destajo(){
		$num_destajo = $this->input->post('clave_destajo');
		$this->mDestajos->eliminar_destajo($num_destajo);
		redirect('cDestajos');
	}
	public function buscar_destajo(){
		$numero = $this->input->post('clave_destajo');

		$resultado = $this->mDestajos->buscar_destajo($numero);

		//print_r( $resultado);
		//return;
		
		//$this->session->set_userdata($resultado);	
		//where = numero;
		//$result= modelo->select()
		//$data['fecha_ingreso'] = "My Real Heading";


		if (count($resultado) == 1) {
			$this->load->view('vMod_Destajos',$resultado);
	 }
		else{
		 	$this->load->view('vDestajos');
			echo "Numero de empleado Inexistente";
			//print_r('$resultado');
		}	
	}
	public function actualizar_destajo(){

		$param["clave_destajo"] = $this->input->post('clave_destajo');
		$param["desc_destajo"] = $this->input->post('desc_destajo');
		$param["unidad_med"] = $this->input->post('unidad_med');
		$param["tarifa_unidad"] = $this->input->post('tarifa_unidad');



		$this->mDestajos->actualizar_destajo($param);

		//$this->load->view('vCatalogo_empleados');
		$this->session->sess_destroy();

		redirect('cDestajos'); 
	}
 } 
 ?>