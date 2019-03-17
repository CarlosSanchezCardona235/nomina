<?php 
/**
 * 
 */
class Mdepartamentos extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function vertodo(){
 		$this->db->select('*');
 		$this->db->from('departamentos');
		return $this->db->get()->result();

 		
 	}
	public function guardar($param){
		$campos = array(
			'numDepto' => $param['numDepto'],
			'DescDepto' => $param['DescDepto']
			 );		

			$this->db->insert('departamentos',$campos);
			$this->load->view('vDepartamentos');
	}
	public function eliminar_depto($numDepto){
		$this->db->where('numDepto',$numDepto);
		$this->db->delete('departamentos');
	}
}
 ?>