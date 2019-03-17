<?php 
/**
 * 
 */
class Mcuotas_imss_retiro_vivienda extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function vertodo(){
 		$this->db->select('*');
 		$this->db->from('cuotas_imss');
		return $this->db->get()->result();	
 	}
	public function guardar($param){
		$campos = array(
			'registro_patronal' =>$param['registro_patronal'],
			'fija_patron' =>$param['fija_patron'],
			'fija_smdf' =>$param['fija_smdf'],
			'excedente_patron' =>$param['excedente_patron'],
			'excedente_empleado' =>$param['excedente_empleado'],
			'prestadinero_patron' =>$param['prestadinero_patron'],
			'prestadinero_empleado' =>$param['prestadinero_empleado'],
			'pensionados_patron' =>$param['pensionados_patron'],
			'pensionados_empleado' =>$param['pensionados_empleado'],
			'riesgotrabajo_patron' =>$param['riesgotrabajo_patron'],
			'riesgotrabajo_smdf' =>$param['riesgotrabajo_smdf'],
			'invalidez_patron' =>$param['invalidez_patron'],
			'invalidez_empleado' =>$param['invalidez_empleado'],
			'invalidez_smdf' =>$param['invalidez_smdf'],
			'guarderia_patron' =>$param['guarderia_patron'],
			'guarderia_smdf' =>$param['guarderia_smdf'],
			'retiro_patron' =>$param['retiro_patron'],
			'retiro_smdf' =>$param['retiro_smdf'],
			'cesantia_patron' =>$param['cesantia_patron'],
			'cesantia_empleado' =>$param['cesantia_empleado'],
			'cesantia_smdf' =>$param['cesantia_smdf'],
			'infonavit_patron' =>$param['infonavit_patron'],
			'infonavit_smdf' =>$param['infonavit_smdf']
			 );
		if ($idcoutas_imss=1) {
			$this->db->update('cuotas_imss',$campos);
		}
		else{
			$this->db->insert('cuotas_imss',$campos);
			redirect('cCuotas_imss_retiro_vivienda');
			$this->load->view('vCuotas_imss_retiro_vivienda');
		}

			//$this->db->insert('cuotas_imss',$campos);
			//$this->load->view('vCuotas_imss_retiro_vivienda');

	}
}
 ?>