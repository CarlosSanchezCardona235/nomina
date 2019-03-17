<?php 
/**
 * 
 */
class Cparametros_generalescalculo extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mParametros_generalescalculo');
	}
	public function index(){
		//$this->load->view('vParametros_generalescalculo');
		$data = array(
        'pargenerales_calculo' => $this->mParametros_generalescalculo->vertodo()
    	);
    	$this->load->view('vParametros_generalescalculo',$data);
	}
	public function guardar(){
		$param["descuento_cuotas_imss"] = $this->input->post('descuento_cuotas_imss');
		$param["salario_mensual"] = $this->input->post('salario_mensual');
		$param["bases_retencion_ISPT"] = $this->input->post('bases_retencion_ISPT');
		$param["proceso_nomina"] = $this->input->post('proceso_nomina');
		$param["ajuste_anual"] = $this->input->post('ajuste_anual');
		$param["desc_fondo_ahorro"] = $this->input->post('desc_fondo_ahorro');
		$param["redondeo_calculo"] = $this->input->post('redondeo_calculo');
		$param["calculo_pagosinfonavit"] = $this->input->post('calculo_pagosinfonavit');
		$param["calculopremio_asistencia"] = $this->input->post('calculopremio_asistencia');

		$this->mParametros_generalescalculo->guardar($param);
		redirect('cParametros_generalescalculo');
	}
}
 ?>