<?php 
/**
  * 
  */
 class CcalculoFase1Quincenal extends CI_Controller
 { 

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('mCalcular');
 		$tipo_nomina=3;
 	}

 	 	public function index(){
 		//$this->load->view('vCalculoFase1Quincenal');
 	 		$this->load->view('vCalculoFase1Quincenal');
 	 	}

 	public function primera_fase(){

 		$this->procesar_Mov_excepcion();
 		$this->procesar_Mov_fijos();

 		
 		
// 		$this->guarda_Mov_nomina_auxiliar();
 		//$this->procesar_Mov_fijos();
 		
 		//$this->load->guarda_Mov();






    	//$this->load->view('vCalculoFase1Quincenal',$data);
		 




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

    public function procesar_Mov_fijos(){
 	    $movfijosempleado=$this->mCalcular->obtener_Mov_fijos();

 	    $data =  array();

		foreach($movfijosempleado as $movfijosempl){
			
			$data["movnumpyd"] =$movfijosempl->NumPerDec;
			$data["movnumtra"] =$movfijosempl->numero_emp;
			$data["movtipnom"] =$movfijosempl->concepto;
			$data["movtarifa"] =$movfijosempl->Total;
			$data["movindica"] =$movfijosempl->por_periodo;
			$data["movdepto"] =$movfijosempl->aplicado;
			//$data["movtarifa"] =$movexcep->por_aplicar;


			/*echo $movfijosempl->id_mov;
			echo $movfijosempl->NumPerDec;
			echo $movfijosempl->numero_emp;
			echo $movfijosempl->concepto;
			echo $movfijosempl->Total;
			echo $movfijosempl->por_periodo;
			echo $movfijosempl->aplicado;
			echo $movfijosempl->por_aplicar;*/
			// guardar en nomina_aux()
			$this->mCalcular->guarda_Mov_nomina_auxiliar($data);
		}
    }
    public function procesar_Mov_excepcion(){

	    $movexcepcion=$this->mCalcular->procesar_Mov_excepcion();
        $data =  array();


		foreach($movexcepcion as $movexcep){
			
			$data["movnumpyd"] =$movexcep->num_perdec;
			$data["movtipnom"] =$movexcep->desc_mov_excep;
			$data["movnumtra"] =$movexcep->numemp_excep;
			$data["movdepto"] =$movexcep->dep_mov_excep;
			$data["movtarifa"] =$movexcep->importe_mov_excep;
			$data["movindica"] =$movexcep->movimiento_en;


			/*
			echo $movexcep->id_mov_excep;
			echo $movexcep->num_perdec;
			echo $movexcep->desc_mov_excep;
			echo $movexcep->numemp_excep;
			echo $movexcep->dep_mov_excep;
			echo $movexcep->movimiento_en;
			echo $movexcep->importe_mov_excep;*/
			$this->mCalcular->guarda_Mov_nomina_auxiliar($data);
		}
		return $movexcepcion;
    }
 	public function guarda_Mov_nomina_auxiliar($movexcepcion){
 		

 		$param["movnumpyd"] = $this->$movexcepcion->$num_perdec;
 		$param["numemp_excep"] = $this->$movexcepcion->$desc_mov_excep;
 		/*$param["numemp_excep"] = $this->obtener_Mov_excepcion($movexcepcion->movimiento_en);
 		$param["numemp_excep"] = $this->obtener_Mov_excepcion($movexcepcion->importe_mov_excep);
 		$param["numemp_excep"] = $this->obtener_Mov_excepcion($movexcepcion->num_perdec);
		*/
		//$this->mCalcular->guarda_Mov_nomina_auxiliar($param);
		//redirect('cCalculoFase1Quincenal');


 	}
 	public function obtener_destajos(){

 		$destajos=$this->mCalcular->obtener_destajos();

		foreach($destajos as $destajo){
			echo $destajo->clave_destajo;
			echo $destajo->desc_destajo;
			echo $destajo->unidad_med;
			echo $destajo->tarifa_unidad;
    }
	}
  	public function seguro_social(){

 	} 
 	public function coutas_sindicales(){

		$cuotas_imss=$this->mCalcular->coutas_sindicales();

 			foreach($cuotas_imss as $cuotas_ims){
			echo $cuotas_ims->idcoutas_imss;
			echo $cuotas_ims->registro_patronal;
			echo $cuotas_ims->fija_patron;
			echo $cuotas_ims->fija_smdf;
			echo $cuotas_ims->excedente_patron;
			echo $cuotas_ims->excedente_empleado;
			echo $cuotas_ims->prestadinero_patron;
			echo $cuotas_ims->prestadinero_empleado;
			echo $cuotas_ims->pensionados_patron;
			echo $cuotas_ims->pensionados_empleado;
			echo $cuotas_ims->riesgotrabajo_patron;
			echo $cuotas_ims->riesgotrabajo_smdf;
			echo $cuotas_ims->invalidez_patron;
			echo $cuotas_ims->invalidez_empleado;
			echo $cuotas_ims->invalidez_smdf;
			echo $cuotas_ims->guarderia_patron;
			echo $cuotas_ims->guarderia_smdf;
			echo $cuotas_ims->retiro_patron;
			echo $cuotas_ims->retiro_smdf;
			echo $cuotas_ims->cesantia_patron;
			echo $cuotas_ims->cesantia_empleado;
			echo $cuotas_ims->cesantia_smdf;
			echo $cuotas_ims->infonavit_patron;
			echo $cuotas_ims->infonavit_smdf;
		}
 	}
 } 
 ?>