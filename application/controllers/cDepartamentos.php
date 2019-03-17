<?php 
/**
  * 
  */
 class Cdepartamentos extends CI_controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mDepartamentos');
 	}
 	public function index(){
 		//$this->load->view('vDepartamentos');
 		$data = array(
        'departamentos' => $this->mDepartamentos->vertodo()
    	);
    	$this->load->view('vDepartamentos',$data);
 	}
 	public function guardar(){
 		$param["numDepto"] = $this->input->post('numDepto');
 		$param["DescDepto"] = $this->input->post('DescDepto');


 		$this->mDepartamentos->guardar($param);
		redirect('cDepartamentos');
 	}
 	public function eliminar_depto(){
		$numDepto = $this->input->post('numDepto');
		$this->mDepartamentos->eliminar_depto($numDepto);
		redirect('cDepartamentos');
	}
 } ?>