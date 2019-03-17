<?php 
/**
 * 
 */
class CcalculoFase1Mensual extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('vCalculoFase1Mensual');
	}
}
 ?>