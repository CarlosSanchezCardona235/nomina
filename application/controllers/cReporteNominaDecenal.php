<?php 
/**
 * 
 */
class CreporteNominaDecenal extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('vReporteNominaDecenal');
	}
}
 ?>