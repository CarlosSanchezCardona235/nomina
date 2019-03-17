<?php 
/**
 * 
 */
class Cmenu_principal extends CI_controller
{
	
	function __construct()
	{
		parent:: __construct();
	}
	public function index(){
		$this->load->view('Vmenu_principal');
	}
}
 ?>