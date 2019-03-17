<?php 
/**
  * 
  */
 class McapturaMovExcepcionQuincenal extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}


 		public function vertodo(){
 		$this->db->select('*');
 		$this->db->from('movexcepcion');
		return $this->db->get()->result();

 		
 	}
 	public function guardar($param){
 			
 			$campos = array(
			'num_perdec'=> $param['num_perdec'],
			'desc_mov_excep'=> $param['desc_mov_excep'],
			'numemp_excep'=> $param['numemp_excep'],
			'dep_mov_excep'=> $param['dep_mov_excep'],
			'movimiento_en'=> $param['movimiento_en'],
			'importe_mov_excep'=> $param['importe_mov_excep']
		);
 		$this->db->insert('movexcepcion',$campos);
		$this->load->view('vCapturaMovExcepcionQuincenal');
 	}
 } 
 ?>