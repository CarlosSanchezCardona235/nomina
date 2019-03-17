<?php 
/**
  * 
  */
 class CparametrosCalculoSemanal extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mParametrosCalculoSemanal');
 	}
 	public function index(){
 		//$this->load->view('vParametrosCalculoSemanal');

 		$data = array(
        'parametroscalculosemanal' => $this->mParametrosCalculoSemanal->vertodo()
    	);
    	$this->load->view('vParametrosCalculoSemanal',$data);
 	}
 	public function guardar(){
 		$param["NumSemanasMes"] = $this->input->post('NumSemanasMes');
 		$param["Semana"] = $this->input->post('Semana');
 		$param["FacDiasPagados"] = $this->input->post('FacDiasPagados');
 		$param["NumPerceFijas"] = $this->input->post('NumPerceFijas');
 		$param["NumDeducFijas"] = $this->input->post('NumDeducFijas');
 		$param["NumDiasCotizar"] = $this->input->post('NumDiasCotizar');
 		$param["SalSemaDeducible"] = $this->input->post('SalSemaDeducible');
 		$param["FormDescISPT"] = $this->input->post('FormDescISPT');
 		$param["NumTabMensISPT"] = $this->input->post('NumTabMensISPT');
 		$param["NumPeriodo"] = $this->input->post('NumPeriodo');
 		$param["FechaInicial"] = $this->input->post('FechaInicial');
 		$param["FechaFinal"] = $this->input->post('FechaFinal');
 		$param["NumDiasPagar"] = $this->input->post('NumDiasPagar');

 		$this->mParametrosCalculoSemanal->guardar($param);
		redirect('cParametrosCalculoSemanal');

 	}
 } 
 ?>