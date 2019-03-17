<?php 
/**
  * 
  */
 class Mdestajos extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function vertodo(){
 		$this->db->select('*');
 		$this->db->from('destajos');
		return $this->db->get()->result();

 		
 	}

 	public function guardar($param){
 		$campos = array(
			'clave_destajo' => $param['clave_destajo'],
			'desc_destajo' => $param['desc_destajo'],
			'unidad_med' => $param['unidad_med'],
			'tarifa_unidad' => $param['tarifa_unidad']
		);

		$this->db->insert('destajos',$campos);
		$this->load->view('vDestajos');
 	}

 		public function eliminar_destajo($num_destajo){
		$this->db->where('clave_destajo',$num_destajo);
		$this->db->delete('destajos');
		$this->load->view('vDestajos');
	}


		public function buscar_destajo($numero){
 		$this->db->select('clave_destajo,desc_destajo,unidad_med,tarifa_unidad');
 		$this->db->from('destajos');
 		$this->db->where('clave_destajo',$numero);

 		$resultado = $this->db->get();


 		if ($resultado->num_rows() == 1) {
 			 $resul = $resultado->row();

 			 //$this->session->set_userdata('$s_numero',$resul->pydnumero);
 			 $this->session->set_flashdata('$s_numero',$resul->clave_destajo);
 		return  $resultado->row();
 		}
 		else{
 		return 0;
 		}

 	}
 		public function actualizar_destajo($param){
		$campos = array(

			'clave_destajo' => $param['clave_destajo'],
			'desc_destajo' => $param['desc_destajo'],
			'unidad_med' => $param['unidad_med'],
			'tarifa_unidad' => $param['tarifa_unidad']

					);
		$this->db->where('clave_destajo',$this->session->flashdata('$s_numero'));
		$this->db->update('destajos',$campos);
		

		return 1; 

	}
 } 
 ?>