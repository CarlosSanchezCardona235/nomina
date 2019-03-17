<?php 
/**
 * 
 */
class Mparametros_generalescalculo extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
		public function vertodo(){
 		$this->db->select('*');
 		$this->db->from('pargenerales_calculo');
		return $this->db->get()->result();	
 	}
	public function guardar($param){
		$campos = array(
			'descuento_cuotas_imss' => $param['descuento_cuotas_imss'],
			'salario_mensual' => $param['salario_mensual'],
			'bases_retencion_ISPT' => $param['bases_retencion_ISPT'],
			'proceso_nomina' => $param['proceso_nomina'],
			'ajuste_anual' => $param['ajuste_anual'],
			'desc_fondo_ahorro' => $param['desc_fondo_ahorro'],
			'redondeo_calculo' => $param['redondeo_calculo'],
			'calculo_pagosinfonavit' => $param['calculo_pagosinfonavit'],
			'calculopremio_asistencia' => $param['calculopremio_asistencia']		
		 );	

		if ($idpargencalculo=1) {
		$this->db->update('pargenerales_calculo',$campos);
		}
		else{
		$this->db->insert('pargenerales_calculo',$campos);
		redirect('cParametros_generalescalculo');
		$this->load->view('vParametros_generalescalculo');
		}
		
		//$this->db->insert('pargenerales_calculo',$campos);
		//$this->load->view('vParametros_generalescalculo');

	}
}
 ?>