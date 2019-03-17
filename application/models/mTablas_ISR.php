<?php 

/**
  * 
  */
 class Mtablas_ISR extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 		public function vertodo(){
 		$this->db->select('*');
 		$this->db->from('uma_tablas');
		return $this->db->get()->result();

 		
 	}
 	public function guardar($param){
 		$campos = array(
		'uma' => $param['uma'],

		);
		if ($uma=1) {
		//$this->db->where('idCalSem',$this->session->flashdata('$s_idCalSem'));
		$this->db->update('uma_tablas',$campos);
		}
		else{
		$this->db->insert('uma_tablas',$campos);
		redirect('cTablas_ISR');
		$this->load->view('vTablas_ISR');
	}


		//$this->db->insert('uma',$campos);
		//$this->load->view('vTablas_ISR');

 	}
 } 
 ?>