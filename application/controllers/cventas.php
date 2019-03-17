<?php

class cventas extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('mventas');
		$this->load->helper('fecha');
	}
	
	public function index(){
		$cliclave = $this->input->post('cliclave');
		$artnombre = $this->input->post('artnombre');
		$data = array('ventas' =>$this->mventas->vertodoventa());
		$data['cliclave'] = $this->mventas->getclave();
		$data['artnombre'] = $this->mventas->getartnombre();
		$this->load->view('vventas',$data);
	}
	

	public function guardarventa()
	{
		$param['idventa'] = $this->input->post('idventa');
		$param['cliclave'] = $this->input->post('cliclave');
		$param['artnombre'] = $this->input->post('artnombre');
		$param['importeventa'] = $this->input->post('importeventa');
		$param['saldoventa'] = $this->input->post('saldoventa');
		$param['fechaventa'] = $this->input->post('fechaventa');
		$param['idperfil'] = $this->input->post('idperfil');
		$param['comentariosventa'] = $this->input->post('comentariosventa');
		
		
			$this->mventas->guardarventa($param);
			header("Location:".base_url()."cventas");
		}

	

	public function actualizardatosventas()
		{
			
		$param['cliclave'] = $this->input->post('cliclave');
		$param['artnombre'] = $this->input->post('artnombre');
		$param['importeventa'] = $this->input->post('importeventa');
		$param['saldoventa'] = $this->input->post('saldoventa');
		$param['fechaventa'] = $this->input->post('fechaventa');
		$param['idperfil'] = $this->input->post('idperfil');
		$param['comentariosventa'] = $this->input->post('comentariosventa');

		$this->mventas->actualizardatosventas($param);

		header("location:".base_url()."cventas");
		}

	
	public function eliminarventa()
		{   echo "si llego";
		
			$idp = $this->input->post('idventa');
			$this->mventas->eliminarventa($idp);

			header("Location:".base_url()."cventas");
		}

	public function buscarventa()
		{
			$idp = $this->input->post('idventa');

			$res = $this->mventas->buscarventa($idp);

			if(count($res) ==1){
				$this->load->view('vactualizarventas',$res);
			}else
			{
				$data['mensaje']="usuario no existe";
				$this->load->view('vventas',$res);
			}
		}

	public function descargarpdf()
		{
			$data = $this->mventas->vertodoventa();

			$hoy = date("d/m/y/his");

			$html='';
			

			$html= '<header class="clearfix">
      <div id="logo">
        <img src="material/img/ciberwin.png">
      </div>
      <h1>BUSINESS SYSTEM DE MEXICO S.A DE C.V </h1>
      <div id="project">
        <div><span>PROYECTO</span> Resumen de documentos</div>
        <div><span>CLIENTE</span> Ciberwin</div>
        <div><span>DIRECCION</span> Soria 140 Col. Alamos. CDMX </div>
        <div><span>EMAIL</span> <a href="www.ciberwine.com.mx">www.ciberwine.com.mx</a></div>
        <div><span>fecha</span> 02/10/2018</div>
        <div><span>Fecha</span> 02/10/2018</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
        	<tr>
			<th>idventa</th>
			<th>Clave cliente</th>
			<th>Nombre del producto</td>
			<th>importe venta</th>
			<th>saldo venta</th>
			<th>fecha de venta</th>
			<th>Idperfil</th>
			<th>comentarios</th>	
		</tr>
        </thead>
       ';
			
 				//Construir la estructura dinamica del pdf
	foreach ($data as $data ) {
			$html.='
			
			<tr>
				<td>'.$data->idventa.'</td>
				<td>'.$data->cliclave.'</td>
				<td>'.$data->artnombre.'</td>
				<td>'.$data->importeventa.'</td>
				<td>'.number_format($data->saldoventa,0,'','.').'</td>
				<td>'.fecha($data->fechaventa).'</td>
				<td>'.$data->idperfil.'</td>
				<td>'.$data->comentariosventa.'</td>
			</tr>
			';
		}
			$html.='</table>
			
   			 		</main>
   			 	<footer>
      			Contacto: 5564.0009 / 5574.0350 / 5264.7410 / 5264.7500 
				</tbody>
    			</footer>';

		

			$pdfFilePath = "Reportedeventa_".$hoy.".pdf";
			
			$css = file_get_contents('material/css/style.css');
			

			$this->m_pdf->pdf->WriteHTML($css,1);

			$this->m_pdf->pdf->WriteHTML($html);

			$this->m_pdf->pdf->Output($pdfFilePath,"D");
		}

	}
