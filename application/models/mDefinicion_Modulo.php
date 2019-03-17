<?php /**
 * |
 */
class Mdefinicion_Modulo extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function vertodo(){
 		$this->db->select('*');
 		$this->db->from('catdefinicionmodulo');
		return $this->db->get()->result();	
 	}

	public function guardar($param){
		$campos = array(
			//'id' => $param['id'],
			'defnombre_empresa' => $param['defnombre_empresa'],
			'defcalle_numero'=> $param['defcalle_numero'],
			'defcolonia'=> $param['defcolonia'],
			'defciudad'=> $param['defciudad'],
			'defestado'=> $param['defestado'],
			'defcodigo_postal'=> $param['defcodigo_postal'],
			'deftelefono_oficina'=> $param['deftelefono_oficina'],
			'deftelefono_celular'=> $param['deftelefono_celular'],
			'deftelefono_otro'=> $param['deftelefono_otro'],
			'def_fax'=> $param['def_fax'],
			'defemail'=> $param['defemail'],
			'defrfc'=> $param['defrfc'],
			'defregistro_imss'=> $param['defregistro_imss'],
			'defregistro_infonavit'=> $param['defregistro_infonavit'],
			'defmes_anoproceso'=> $param['defmes_anoproceso'],
			'defarea_geografica'=> $param['defarea_geografica'],
			'defdigito_verificador'=> $param['defdigito_verificador'],
			'defcalculo_destajo'=> $param['defcalculo_destajo'],
			'defproporcion_pagos'=> $param['defproporcion_pagos'],
			'deffondo_ahorro_retenido'=> $param['deffondo_ahorro_retenido'],
			'defmonto_retenido'=> $param['defmonto_retenido'],
			'deffondo_ahorro_apartado'=> $param['deffondo_ahorro_apartado'],
			'defmonto_apartado'=> $param['defmonto_apartado'],
			'defcuota_sindical'=> $param['defcuota_sindical'],
			'defmonto_cuotasindical'=> $param['defmonto_cuotasindical'],
			'defotra_deduccion'=> $param['defotra_deduccion'],
			'defmonto_deduccionfija'=> $param['defmonto_deduccionfija'],
			'defpagapremios_aucencias'=> $param['defpagapremios_aucencias'],
			'defbono_despensa'=> $param['defbono_despensa'],
			'defpremio_asistencia'=> $param['defpremio_asistencia'],
			'defpremio_puntualidad'=> $param['defpremio_puntualidad'],
			'defbonodespensa_semanal'=> $param['defbonodespensa_semanal'],		
			'defbonodespensa_decemanal' => $param['defbonodespensa_decemanal'],
			'defbonodespensa_quincenal'=> $param['defbonodespensa_quincenal'],
			'defbonodespensa_mensual'=> $param['defbonodespensa_mensual'],
			'defpremioasistencia_semanal'=> $param['defpremioasistencia_semanal'],
			'defpremioasistencia_decemanal'=> $param['defpremioasistencia_decemanal'],
			'defpremioasistencia_quincenal'=> $param['defpremioasistencia_quincenal'],
			'defpremioasistencia_mensual'=> $param['defpremioasistencia_mensual'],
			'defpremiopuntualidad_semanal'=> $param['defpremiopuntualidad_semanal'],
			'defpremiopuntualidad_decemanal'=> $param['defpremiopuntualidad_decemanal'],
			'defpremiopuntualidad_quincenal'=> $param['defpremiopuntualidad_quincenal'],
			'defpremiopuntualidad_mensual'=> $param['defpremiopuntualidad_mensual'],
			'defperiodo_bono_despensa'=> $param['defperiodo_bono_despensa'],
			'defreflejar_bono_puntualidad'=> $param['defreflejar_bono_puntualidad'],
			'defdeducciones_nominapatronal'=> $param['defdeducciones_nominapatronal']	
		);

		if ($idmodulo=1) {
			$this->db->update('catdefinicionmodulo',$campos);
		}
		else{
		$this->db->insert('catdefinicionmodulo',$campos);
		redirect('cDefinicion_Modulo');
		$this->load->view('vDefinicion_Modulo');
		}

	}

}


?>