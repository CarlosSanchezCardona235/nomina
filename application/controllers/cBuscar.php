<?php 
/**
 * 
 */
class Cbuscar extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mBuscar');

	}
	 public function index(){
	 	//$data['mensaje'] = '';
	 	//$this->load->view('vBuscar',$data);
	
	 	$data = array(
        'empleados' => $this->mBuscar->vertodo()
    	);
    	$this->load->view('vbuscar',$data);
	}
	
	public function vertodo(){
		//$data['mensaje'] = '';
	 	//$this->load->view('vBuscar',$data);	
		//$result=$this->mBuscar->vertodo();
		//print_r($result);

		
	 	//print_r($result[0]);
	 	//echo  "<br>Renglones".$result.count();
 
    }
	public function buscar(){
		$numero = $this->input->post('numero_empleado');

		$resultado = $this->mBuscar->buscar($numero);

		//$this->session->set_userdata($resultado);	
		//where = numero;
		//$result= modelo->select()
		$result["nombre"]="ciberwin";
		//$data['fecha_ingreso'] = "My Real Heading";


		if ($resultado == 1) {
			$this->load->view('vUpdate_Catalogo_empleados',$result);
		}
		else{
		 	$this->load->view('vBuscar');
			echo "Numero de empleado Inexistente";
			//print_r('$resultado');
		}	
	}
}
?>