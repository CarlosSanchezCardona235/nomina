<?php 
/**
 * 
 */
class Ctablas_isr extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mTablas_ISR');
	}
	public function index(){
		//$this->load->view('vParametros_generalescalculo');
		$data = array(
        'uma_tablas' => $this->mTablas_ISR->vertodo()
    	);
    	$this->load->view('vTablas_ISR',$data);
	}
	public function guardar(){
		$param["uma"] = $this->input->post('uma');

		$this->mTablas_ISR->guardar($param);
		redirect('cTablas_isr');
	}

}

 ?>