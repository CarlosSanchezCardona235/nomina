<?php 
/**
 * 
 */
class MparametrosCalculoSemanal extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	 	public function vertodo(){
 		$this->db->select('*');
 		$this->db->from('parametroscalculosemanal');
		return $this->db->get()->result();	
 	}
		public function guardar($param){
		$campos = array(
			'NumSemanasMes'=> $param['NumSemanasMes'],
			'Semana'=> $param['Semana'],
			'FacDiasPagados'=> $param['FacDiasPagados'],
			'NumPerceFijas'=> $param['NumPerceFijas'],
			'NumDeducFijas'=> $param['NumDeducFijas'],
			'NumDiasCotizar'=> $param['NumDiasCotizar'],
			'SalSemaDeducible'=> $param['SalSemaDeducible'],
			'FormDescISPT'=> $param['FormDescISPT'],
			'NumTabMensISPT'=> $param['NumTabMensISPT'],
			'NumPeriodo'=> $param['NumPeriodo'],
			'FechaInicial'=> $param['FechaInicial'],
			'FechaFinal'=> $param['FechaFinal'],
			'NumDiasPagar'=> $param['NumDiasPagar']

	);
		if ($idCalSem=1) {
		//$this->db->where('idCalSem',$this->session->flashdata('$s_idCalSem'));
		$this->db->update('parametroscalculosemanal',$campos);
		}
		else{
		$this->db->insert('parametroscalculosemanal',$campos);
		redirect('cParametrosCalculoSemanal');
		$this->load->view('vParametrosCalculoSemanal');

		}

	}
}
 ?>