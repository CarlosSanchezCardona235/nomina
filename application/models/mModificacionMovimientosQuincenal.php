<?php 
/**
 * 
 */
class MmodificacionMovimientosQuincenal extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function obtener_datos_auxiliar_nomina(){

 		$this->db->select('*');
 		$this->db->from('auxiliar_nomina');
		return $this->db->get()->result();
	}


	 	public function buscar_nomina_auxiliar_empleado($numero){
 		$this->db->select('movtipnom,movnumtra,movnumpyd,movdepto,movtarifa,movcantidad,movimport,movindica,mocstatus');
 		///echo  "numero:".$numero;
  		//$this->db->select('*');
  		$this->db->from('auxiliar_nomina');
 		$this->db->where('movnumtra',$numero);

 		$resultado = $this->db->get();


 		if ($resultado->num_rows() >= 1) {
 			 $resul = $resultado->row();

 			 //$this->session->set_userdata('$s_numero',$resul->movnumtra);
 			 $this->session->set_flashdata('$s_numero',$resul->movnumtra);
 		return  $resultado;
 		}
 		else{
 			echo "No hay datps";
 			//print_r($resultado);
 		return "";
 		}

 	}
}
 ?>