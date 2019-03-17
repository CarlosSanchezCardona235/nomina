<?php 
/**
  * 
  */
 class Mcategorias_Puestos extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	
 		 public function vertodo(){
 		$this->db->select('*');
 		$this->db->from('categorias');
		return $this->db->get()->result();

	}
 		public function guardar($param){
		
		$campos = array(
		'num_cat' => $param['num_cat'],
		'desc_cat' => $param['desc_cat'],
		'sueldo_cat' => $param['sueldo_cat'],
 			);

		$this->db->insert('categorias',$campos);
		$this->load->view('vCategorias_puestos');
	}

		public function eliminar_categoria($num_cat){
		$this->db->where('num_cat',$num_cat);
		$this->db->delete('categorias');
		$this->load->view('vCategorias_puestos');
	}

		public function buscar_categoria($numero){
 		$this->db->select('num_cat,desc_cat,sueldo_cat');
 		$this->db->from('categorias');
 		$this->db->where('num_cat',$numero);

 		$resultado = $this->db->get();


 		if ($resultado->num_rows() == 1) {
 			 $resul = $resultado->row();

 			 //$this->session->set_userdata('$s_numero',$resul->numero_empleado);
 			 $this->session->set_flashdata('$s_numero',$resul->num_cat);
 		return  $resultado->row();
 		}
 		else{
 		return 0;
 		}

 	}
 	public function actualizar_cat($param){
		$campos = array(
			'num_cat' => $param['num_cat'],
			'desc_cat' => $param['desc_cat'],
			'sueldo_cat' => $param['sueldo_cat'],
					);
		$this->db->where('num_cat',$this->session->flashdata('$s_numero'));
		$this->db->update('categorias',$campos);
		

		return 1; 

	}
 } 
 ?>