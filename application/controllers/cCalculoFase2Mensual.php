<?php 
/**
 * 
 */
class CcalculoFase2Mensual extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('vCalculoFase2Mensual');
	}
}
 ?>