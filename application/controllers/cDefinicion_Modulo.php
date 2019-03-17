<?php 
/**
 * 
 */
class Cdefinicion_Modulo extends CI_controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('mDefinicion_Modulo');
	}
	 	public function index(){
 		//$this->load->view('vParametrosCalculoSemanal');

 		$data = array(
        'catdefinicionmodulo' => $this->mDefinicion_Modulo->vertodo()
    	);
    	$this->load->view('vDefinicion_Modulo',$data);
 	}
		public function guardar(){
		//$param["id"] = $this->input->post('id');	
		$param["defnombre_empresa"] = $this->input->post('defnombre_empresa');
		$param["defcalle_numero"] = $this->input->post('defcalle_numero');
		$param["defcolonia"] = $this->input->post('defcolonia');
		$param["defciudad"] = $this->input->post('defciudad');
		$param["defestado"] = $this->input->post('defestado');
		$param["defcodigo_postal"] = $this->input->post('defcodigo_postal');
		$param["deftelefono_oficina"] = $this->input->post('deftelefono_oficina');
		$param["deftelefono_celular"] = $this->input->post('deftelefono_celular');
		$param["deftelefono_otro"] = $this->input->post('deftelefono_otro');
		$param["def_fax"] = $this->input->post('def_fax');
		$param["defemail"] = $this->input->post('defemail');
		$param["defrfc"] = $this->input->post('defrfc');
		$param["defregistro_imss"] = $this->input->post('defregistro_imss');
		$param["defregistro_infonavit"] = $this->input->post('defregistro_infonavit');
		$param["defmes_anoproceso"] = $this->input->post('defmes_anoproceso');
		$param["defarea_geografica"] = $this->input->post('defarea_geografica');
		$param["defdigito_verificador"] = $this->input->post('defdigito_verificador');
		$param["defcalculo_destajo"] = $this->input->post('defcalculo_destajo');
		$param["defproporcion_pagos"] = $this->input->post('defproporcion_pagos');
		$param["deffondo_ahorro_retenido"] = $this->input->post('deffondo_ahorro_retenido');
		$param["defmonto_retenido"] = $this->input->post('defmonto_retenido');
		$param["deffondo_ahorro_apartado"] = $this->input->post('deffondo_ahorro_apartado');
		$param["defmonto_apartado"] = $this->input->post('defmonto_apartado');
		$param["defcuota_sindical"] = $this->input->post('defcuota_sindical');
		$param["defmonto_cuotasindical"] = $this->input->post('defmonto_cuotasindical');
		$param["defotra_deduccion"] = $this->input->post('defotra_deduccion');
		$param["defmonto_deduccionfija"] = $this->input->post('defmonto_deduccionfija');
		$param["defpagapremios_aucencias"] = $this->input->post('defpagapremios_aucencias');
		$param["defbono_despensa"] = $this->input->post('defbono_despensa');
		$param["defpremio_asistencia"] = $this->input->post('defpremio_asistencia');
		$param["defpremio_puntualidad"] = $this->input->post('defpremio_puntualidad');
		$param["defbonodespensa_semanal"] = $this->input->post('defbonodespensa_semanal');
		$param["defbonodespensa_decemanal"] = $this->input->post('defbonodespensa_decemanal');
		$param["defbonodespensa_quincenal"] = $this->input->post('defbonodespensa_quincenal');
		$param["defbonodespensa_mensual"] = $this->input->post('defbonodespensa_mensual');
		$param["defpremioasistencia_semanal"] = $this->input->post('defpremioasistencia_semanal');
		$param["defpremioasistencia_decemanal"] = $this->input->post('defpremioasistencia_decemanal');
		$param["defpremioasistencia_quincenal"] = $this->input->post('defpremioasistencia_quincenal');
		$param["defpremioasistencia_mensual"] = $this->input->post('defpremioasistencia_mensual');
		$param["defpremiopuntualidad_semanal"] = $this->input->post('defpremiopuntualidad_semanal');
		$param["defpremiopuntualidad_decemanal"] = $this->input->post('defpremiopuntualidad_decemanal');
		$param["defpremiopuntualidad_quincenal"] = $this->input->post('defpremiopuntualidad_quincenal');
		$param["defpremiopuntualidad_mensual"] = $this->input->post('defpremiopuntualidad_mensual');
		$param["defperiodo_bono_despensa"] = $this->input->post('defperiodo_bono_despensa');
		$param["defreflejar_bono_puntualidad"] = $this->input->post('defreflejar_bono_puntualidad');
		$param["defdeducciones_nominapatronal"] = $this->input->post('defdeducciones_nominapatronal');
		
		
		$this->mDefinicion_Modulo->guardar($param);
		redirect('cDefinicion_Modulo');
	}
}
 ?>