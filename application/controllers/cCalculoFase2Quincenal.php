<?php 
/**
 * 
 */
class CcalculoFase2Quincenal extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('vCalculoFase2Quincenal');
	}
}
 ?>