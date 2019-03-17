<?php 
/**
 * 
 */
class Cpercepciones_deducciones extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mPercepciones_deducciones');
	}
	public function index(){
		$data = array(
        'perce_deduc' => $this->mPercepciones_deducciones->verpercepciones(),
    	'perce_deducion' => $this->mPercepciones_deducciones->verdeducciones()
    	);
		$this->load->view('vPercepciones_deducciones',$data);
	}
	public function guardar(){

		$param["pydnumero"] = $this->input->post('pydnumero');
		$param["pyddescri"] = $this->input->post('pyddescri');
		$param["pydtipmov"] = $this->input->post('pydtipmov');
		$param["pydacptot"] = $this->input->post('pydacptot');
		$param["pydacpgra"] = $this->input->post('pydacpgra');
		$param["pydacpsdi"] = $this->input->post('pydacpsdi');
		$param["pydacpgin"] = $this->input->post('pydacpgin');
		$param["pydacpptu"] = $this->input->post('pydacpptu');
		$param["pydporcen"] = $this->input->post('pydporcen');
		
		$this->mPercepciones_deducciones->guardar($param);
		redirect('cPercepciones_deducciones');
	}
		public function eliminar_perdec(){
		$num_perdec = $this->input->post('pydnumero');
		$this->mPercepciones_deducciones->eliminar_perdec($num_perdec);
		redirect('cPercepciones_deducciones');
	}

		public function buscar_perdec(){
		$numero = $this->input->post('pydnumero');

		$resultado = $this->mPercepciones_deducciones->buscar_perdec($numero);

		//print_r( $resultado);
		//return;
		
		//$this->session->set_userdata($resultado);	
		//where = numero;
		//$result= modelo->select()
		//$data['fecha_ingreso'] = "My Real Heading";


		if (count($resultado) == 1) {
			$this->load->view('vModPerDec',$resultado);
	 }
		else{
		 	$this->load->view('vPercepciones_deducciones');
			echo "No existe Percepcion o Deduccion";
			//print_r('$resultado');
		}	
	}

		public function actualizar_datos(){

		$param["pydnumero"] = $this->input->post('pydnumero');
		$param["pyddescri"] = $this->input->post('pyddescri');
		$param["pydtipmov"] = $this->input->post('pydtipmov');
		$param["pydacptot"] = $this->input->post('pydacptot');
		$param["pydacpgra"] = $this->input->post('pydacpgra');
		$param["pydacpsdi"] = $this->input->post('pydacpsdi');
		$param["pydacpgin"] = $this->input->post('pydacpgin');
		$param["pydacpptu"] = $this->input->post('pydacpptu');
		$param["pydporcen"] = $this->input->post('pydporcen');


		$this->mPercepciones_deducciones->actualizar_datos($param);

		//$this->load->view('vCatalogo_empleados');
		$this->session->sess_destroy();

		redirect('cPercepciones_deducciones');
		}
}
 ?>