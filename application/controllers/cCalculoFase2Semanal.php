<?php 
/**
 * 
 */
class CcalculoFase2Semanal extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('vCalculoFase2Semanal');
	}
}
 ?>