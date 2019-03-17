<?php 
/**
 * 
 */
class Mpercepciones_deducciones extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	 	public function verpercepciones(){
 		$this->db->select('*');
 		$this->db->from('perce_deduc');
 		$this->db->where('pydnumero <= 499');
		return $this->db->get()->result();	
 	}

	 	public function verdeducciones(){
 		$this->db->select('*');
 		$this->db->from('perce_deduc');
 		$this->db->where('pydnumero >= 500');
		return $this->db->get()->result();	
 	}
 	public function guardar($param){
 		$campos = array(
			'pydnumero' => $param['pydnumero'],
			'pyddescri' => $param['pyddescri'],
			'pydtipmov' => $param['pydtipmov'],
			'pydacptot' => $param['pydacptot'],
			'pydacpgra' => $param['pydacpgra'],
			'pydacpsdi' => $param['pydacpsdi'],
			'pydacpgin' => $param['pydacpgin'],
			'pydacpptu' => $param['pydacpptu'],
			'pydporcen' => $param['pydporcen']
			);	
 		$this->db->insert('perce_deduc',$campos);
		$this->load->view('vPercepciones_deducciones');
 	}

 		public function eliminar_perdec($num_perdec){
		$this->db->where('pydnumero',$num_perdec);
		$this->db->delete('perce_deduc');
		$this->load->view('vPercepciones_deducciones');
	}


		public function actualizar_datos($param){
		$campos = array(
			'pydnumero' => $param['pydnumero'],
			'pyddescri' => $param['pyddescri'],
			'pydtipmov' => $param['pydtipmov'],
			'pydacptot' => $param['pydacptot'],
			'pydacpgra' => $param['pydacpgra'],
			'pydacpsdi' => $param['pydacpsdi'],
			'pydacpgin' => $param['pydacpgin'],
			'pydacpptu' => $param['pydacpptu'],
			'pydporcen' => $param['pydporcen']
		);
		
		$this->db->where('pydnumero',$this->session->flashdata('$s_numero'));
		$this->db->update('perce_deduc',$campos);
		

		return 1; 

	}
	


		 public function buscar_perdec($numero){
 		$this->db->select('pydnumero,pyddescri,pydtipmov,pydacptot,pydacpgra,pydacpsdi,pydacpgin,pydacpptu,pydporcen');
 		$this->db->from('perce_deduc');
 		$this->db->where('pydnumero',$numero);

 		$resultado = $this->db->get();


 		if ($resultado->num_rows() == 1) {
 			 $resul = $resultado->row();

 			 //$this->session->set_userdata('$s_numero',$resul->pydnumero);
 			 $this->session->set_flashdata('$s_numero',$resul->pydnumero);
 		return  $resultado->row();
 		}
 		else{
 		return 0;
 		}

 	}

}
?>