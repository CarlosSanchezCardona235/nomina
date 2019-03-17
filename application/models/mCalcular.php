<?php 
/**
  * 
  */
 class Mcalcular extends CI_Model
 {  
 	
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
    public function procesar_Mov_excepcion(){

        $this->db->select('*');
        $this->db->from('movexcepcion');
        $this->db->order_by('num_perdec','numemp_excep');
        return $this->db->get()->result();
    }

    public function obtener_Mov_fijos(){

        $this->db->select('*');
        $this->db->from('movfijosempleado');
        $this->db->order_by('NumPerDec','numero_emp');
        return $this->db->get()->result();
    }

    public function obtener_destajos(){

        $this->db->select('*');
        $this->db->from('destajos');
        $this->db->order_by('clave_destajo','tarifa_unidad');
        return $this->db->get()->result();
    }

    public function obtener_sueldodiario(){
        
        $this->db->select('*');
        $this->db->from('destajos');
        $this->db->order_by('clave_destajo','tarifa_unidad');
        return $this->db->get()->result();
    }
    public function coutas_sindicales(){

        $this->db->select('*');
        $this->db->from('cuotas_imss');
        //$this->db->order_by('clave_destajo','tarifa_unidad');
        return $this->db->get()->result();

    }
 
 	public function guarda_Mov_nomina_auxiliar($param){

        $campos = array(
            'movnumpyd' => $param['movnumpyd'],
            'movnumtra'=> $param['movnumtra'],
            "movdepto"=>$param['movdepto'],
            "movtarifa"=>$param['movtarifa'],
            "movindica"=>$param['movindica']
        );

        $this->db->insert('auxiliar_nomina',$campos);
        $this->load->view('vCalculoFase1Quincenal');

 	}


 } 
 ?>