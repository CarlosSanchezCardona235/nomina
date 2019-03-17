<?php 
/**
  * 
  */
 class Ccategorias_puestos extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mCategorias_Puestos');
 	}
 	public function index(){
 		//$this->load->view('vCategorias_puestos');
 		$data = array(
        'categorias' => $this->mCategorias_Puestos->vertodo()
    	);
    	$this->load->view('vCategorias_puestos',$data);
 	}

 	public function guardar(){
		
		$param["num_cat"] = $this->input->post('num_cat');
		$param["desc_cat"] = $this->input->post('desc_cat');
		$param["sueldo_cat"] = $this->input->post('sueldo_cat');


		$this->mCategorias_Puestos->guardar($param);
		redirect('cCategorias_puestos');
	}

	public function eliminar_categoria(){
		$num_cat = $this->input->post('num_cat');
		$this->mCategorias_Puestos->eliminar_categoria($num_cat);
		redirect('cCategorias_puestos');
	}

		public function buscar_categoria(){
		$numero = $this->input->post('num_cat');

		$resultado = $this->mCategorias_Puestos->buscar_categoria($numero);

		//print_r( $resultado);
		//return;
		
		//$this->session->set_userdata($resultado);	
		//where = numero;
		//$result= modelo->select()
		//$data['fecha_ingreso'] = "My Real Heading";


		if (count($resultado) == 1) {
			$this->load->view('vMod_categorias',$resultado);
	 }
		else{
		 	$this->load->view('vCategorias_puestos');
			echo "Numero de categoria Inexistente";
			//print_r('$resultado');
		}	
	}

	public function actualizar_cat(){
		//$param["numero_empleado"] = $this->input->post('numero_empleado');
		$param["num_cat"] = $this->input->post('num_cat');
		$param["desc_cat"] = $this->input->post('desc_cat');
		$param["sueldo_cat"] = $this->input->post('sueldo_cat');

		$this->mCategorias_Puestos->actualizar_cat($param);

		//$this->load->view('vCatalogo_empleados');
		$this->session->sess_destroy();

		redirect('cCategorias_puestos'); 
	}




 } 

 ?>