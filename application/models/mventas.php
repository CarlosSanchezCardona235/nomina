<?php

class mventas extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
	}

	public function getclave()
	{
		$this->db->order_by('cliclave','asc');
		$cliclave = $this->db->get('fcacli');

		if ($cliclave->num_rows() > 0) {
			return $cliclave->result();
		}
	}


	public function getartnombre(){
		$this->db->order_by('artnombre','asc');
		$artnombre = $this->db->get('productos');

		if ($artnombre->num_rows() > 0) {
			return $artnombre->result();
		}
	}
	public function guardarventa($param){
		$campos = array(
		'idventa' => $param['idventa'],
		'cliclave' => $param['cliclave'],
		'artnombre' => $param['artnombre'],
		'importeventa' => $param['importeventa'],
		'saldoventa' => $param['saldoventa'],
		'fechaventa' => $param['fechaventa'],
		'idperfil' => $param['idperfil'],
		'comentariosventa' => $param['comentariosventa']

	);

		$this->db->insert('ventas',$campos);

	}

	public function actualizardatosventas($param)
	{
		$campos = array(
		'cliclave' => $param['cliclave'],
		'artnombre' => $param['artnombre'],
		'importeventa' => $param['importeventa'],
		'saldoventa' => $param['saldoventa'],
		'fechaventa' => $param['fechaventa'],
		'idperfil' => $param['idperfil'],
		'comentariosventa' => $param['comentariosventa']
		);
			$this->db->where('idventa',$this->session->flashdata('$s_venta'));
			$this->db->update('ventas',$campos);

			return 1;
	}

	public function eliminarventa($idp)
	{	echo "Se borro exitosamente".$idp;
		$campos = array('idventa'=>$idp);

		$this->db->where('idventa',$idp);
		$this->db->delete('ventas');
	}



	public function vertodoventa()
		{
			$this->db->select('*');
			$this->db->from('ventas');
			return $this->db->get()->result();
		}	


	public function buscarventa($idp)
	{
		$this->db->select('v.idventa,v.cliclave,v.artnombre,v.importeventa,v.saldoventa,v.fechaventa,v.fechaventa,v.idperfil,v.comentariosventa');
		$this->db->from('ventas v');
		$this->db->where('v.idventa',$idp);

		$resultado = $this->db->get();

		if($resultado->num_rows() == 1)
		{
			$r = $resultado->row();
			
           // print_r($r);

				$this->session->set_flashdata('$s_venta',$r->idventa);
			return $r;
		}else
		{
			return 0;
		}
	}
}