
<?php 
/**
 * 
 */
class Mmovimientosfijos_empleado extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	 	public function vertodo(){
 		$this->db->select('*');
 		$this->db->from('movfijosempleado');
		return $this->db->get()->result();

 		
 	}
	 	public function buscar_empleado($numero){
 		$this->db->select('*');
 		$this->db->from('movfijosempleado');
 		$this->db->where('numero_emp',$numero);
 		$resultado = $this->db->get();

 		//echo ($resultado->num_rows());
 		if ($resultado->num_rows() >= 1) {
 			 $resul = $resultado->row();

 			 //$this->session->set_userdata('$s_numero',$resul->numero_empleado);
 			 $this->session->set_flashdata('$s_numero',$resul->numero_emp);
 		return  $resultado; //$resultado->row();
 		}
 		else{
 		return "";
 		}

 	}
 	public function guardar($param){
		$campos = array(
			'numero_emp' => $param['numero_emp'],
			'NumPerDec '=> $param['NumPerDec'],
			'concepto'=> $param['concepto'],
			'Total'=> $param['Total'],
			'aplicado'=> $param['aplicado'],
			'por_periodo'=> $param['por_periodo'],
			'por_aplicar'=> $param['por_aplicar']
		);
		$this->db->insert('movfijosempleado',$campos);
		$this->load->view('vMovimientosfijos_empleado');


	}
}
 ?>