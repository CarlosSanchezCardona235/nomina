<?php 
/**
 * 
 */
class Ccuotas_imss_retiro_vivienda extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("mCuotas_imss_retiro_vivienda");
	}

	public function index(){
		$data = array(
        'cuotas_imss' => $this->mCuotas_imss_retiro_vivienda->vertodo()
    	);
    	$this->load->view('vCuotas_imss_retiro_vivienda',$data);
	}
	public function guardar(){
		$param["registro_patronal"] = $this->input->post('registro_patronal');
		$param["fija_patron"] = $this->input->post('fija_patron');
		$param["fija_smdf"] = $this->input->post('fija_smdf');
		$param["excedente_patron"] = $this->input->post('excedente_patron');
		$param["excedente_empleado"] = $this->input->post('excedente_empleado');
		$param["prestadinero_patron"] = $this->input->post('prestadinero_patron');
		$param["prestadinero_empleado"] = $this->input->post('prestadinero_empleado');
		$param["pensionados_patron"] = $this->input->post('pensionados_patron');
		$param["pensionados_empleado"] = $this->input->post('pensionados_empleado');
		$param["riesgotrabajo_patron"] = $this->input->post('riesgotrabajo_patron');
		$param["riesgotrabajo_smdf"] = $this->input->post('riesgotrabajo_smdf');
		$param["invalidez_patron"] = $this->input->post('invalidez_patron');
		$param["invalidez_empleado"] = $this->input->post('invalidez_empleado');
		$param["invalidez_smdf"] = $this->input->post('invalidez_smdf');
		$param["guarderia_patron"] = $this->input->post('guarderia_patron');
		$param["guarderia_smdf"] = $this->input->post('guarderia_smdf');
		$param["retiro_patron"] = $this->input->post('retiro_patron');
		$param["retiro_smdf"] = $this->input->post('retiro_smdf');
		$param["cesantia_patron"] = $this->input->post('cesantia_patron');
		$param["cesantia_empleado"] = $this->input->post('cesantia_empleado');
		$param["cesantia_smdf"] = $this->input->post('cesantia_smdf');
		$param["infonavit_patron"] = $this->input->post('infonavit_patron');
		$param["infonavit_smdf"] = $this->input->post('infonavit_smdf');

		$this->mCuotas_imss_retiro_vivienda->guardar($param);
		redirect('cCuotas_imss_retiro_vivienda');

	}
}
 ?>