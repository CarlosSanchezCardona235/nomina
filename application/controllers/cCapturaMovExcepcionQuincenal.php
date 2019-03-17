<?php 
/**
 * 
 */
class CcapturaMovExcepcionQuincenal extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mCapturaMovExcepcionQuincenal');
	}
	public function index(){
		//$this->load->view('vCatalogo_empleados');

		$data = array(
        'movexcepcion' => $this->mCapturaMovExcepcionQuincenal->vertodo()
    	);
    	$this->load->view('vCapturaMovExcepcionQuincenal',$data);
	}
	
		public function guardar(){
		$param["num_perdec"] = $this->input->post('num_perdec');
		$param["desc_mov_excep"] = $this->input->post('desc_mov_excep');
		$param["numemp_excep"] = $this->input->post('numemp_excep');
		$param["dep_mov_excep"] = $this->input->post('dep_mov_excep');
		$param["movimiento_en"] = $this->input->post('movimiento_en');
		$param["importe_mov_excep"] = $this->input->post('importe_mov_excep');

		$this->mCapturaMovExcepcionQuincenal->guardar($param);
		redirect('cCapturaMovExcepcionQuincenal');

	}
}
 ?>