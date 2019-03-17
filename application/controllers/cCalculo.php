<?php 
/**
  * 
  */
 class Ccalculo extends CI_Controller
 { 	 $tipo_nomina=3;

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mCalcular');
 	}

 	 	public function index(){
 		//$this->load->view('vCalculoFase1Quincenal');
 	 		$this->load->function('obtener_Mov_fijos');
 	 		$this->load->view('vCalculoFase1Quincenal');
 	}

 	public function primera_fase(){



    	//$this->load->view('vCalculoFase1Quincenal',$data);
		 



} 

//$this->load->view('vCalculoPorEmpleado',$data);


// fin primera fase
 		/*
 	//Sueldo diario
 	//movimientos fijos
 	 result_movFijos=$this.obtener_Mov_fijos();
     while(result==)
     {  $idEmpleado=
        $idPyd=""
        $importeMov=""
        $cantidadMov=""
        //$tipo_Cantidad $,H,D
        $totalMov= $importeMov*$cantidadMov; 

     	insertar_movimiento($idEmpleado,$idPyd,$importeMov,$cantidadMov)


     }
        //movimientos excepcion
    //destajos
    //seguro_social
    //cuotas_sindicales
    //caja_Ahorro
    //horas_extras
    //ausencias_incapacidades   
	*/
    }
	
    public function dias_trabajados(){
        return 15;
    }

    public function obtener_Mov_fijos(){

 		$fijos = array(
        'movfijosempleado' => $this->mCalcular->obtener_Mov_fijos(),
    	);
    	
    	var_dump($movfijosempleado); 

    	$i=0;
    	while ($i <= count($movfijosempleado)) {
    		echo $movfijosempleado;
    		$i++;
    	}

    }
    public function obtener_Mov_excepcion(){

    	$excepcion = array(
        'movexcepcion' => $this->mCalcular->obtener_Mov_excepcion(),
    	);
    	
    	var_dump($movexcepcion); 

    	$i=0;
    	while ($i <= count($movexcepcion)) {
    		echo $movexcepcion;
    		$i++;
    	}
    }
 	public function guarda_Mov(){

 	}
 	public function obtener_sueldodiario(){

 		$excepcion = array(
        'movexcepcion' => $this->mCalcular->obtener_Mov_excepcion(),
    	);
    	
    	var_dump($movexcepcion); 

    	$i=0;
    	while ($i <= count($movexcepcion)) {
    		echo $movexcepcion;
    		$i++;
    	}
    }

 	}
  	public function seguro_social(){

 	} 
 	public function coutas_sindicales(){

 	}
 	public function obtener_destajos(){


 		$destajo = array(
        'destajos' => $this->mCalcular->obtener_destajos(),
    	);
    	
    	var_dump($destajos); 

    	$i=0;
    	while ($i <= count($destajos)) {
    		echo $destajos;
    		$i++;
    	}

 	}
 } 
 ?>