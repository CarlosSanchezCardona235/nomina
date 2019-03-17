<?php 
/**
  * 
  */
 class Mbuscar extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	
 	public function vertodo(){
 		$this->db->select('*');
 		$this->db->from('empleados');
		return $this->db->get()->result();

 		
 	}
 	public function buscar($numero){
 		$this->db->select('e.numero_empleado,e.fecha_ingreso,e.fecha_baja,e.appaterno,e.apmaterno,e.nombre,e.rfc,e.fecha_nacimiento,e.edad,e.genero,e.estado_civil,e.calle,e.numero_interior,e.numero_exterior,e.colonia,e.ciudad,e.estado,e.telefono,e.email,e.seguro_social,e.curp,e.departamento,e.categoria,e.area_geografica,e.tipo_empleado,e.sindicalizado,e.tipo_nomina,e.tipo_sueldo,e.sueldo,e.salario_diario_integrado,e.calculo_imss,e.numero_cuenta');
 		$this->db->from('empleados e');
 		$this->db->where('numero_empleado',$numero);

 		$resultado = $this->db->get();

 		if ($resultado->num_rows() == 1) {
 			 $resul = $resultado->row();

 			 //$this->session->set_userdata('$s_numero',$resul->numero_empleado);
 			 $this->session->set_flashdata('$s_numero',$resul->numero_empleado);
 		return 1;
 		}
 		else{
 		return 0;
 		}

 	}
 } 
 ?>