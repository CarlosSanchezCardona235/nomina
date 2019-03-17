<?php 
/**
 * 
 */
class CmodificacionMovimientosQuincenal extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mModificacionMovimientosQuincenal');
	}
	public function index(){
		//$this->load->view('vModificacionMovimientosQuincenal');
		$data = array(
        'auxiliar_nomina' => $this->mModificacionMovimientosQuincenal->obtener_datos_auxiliar_nomina()
    	);
    	$this->load->view('vModificacionMovimientosQuincenal',$data);
	}
	public function buscar_nomina_auxiliar_empleado(){
		$numero = $this->input->post('movnumtra');
		//echo "numero en control". $numero;

		$resultado = $this->mModificacionMovimientosQuincenal->buscar_nomina_auxiliar_empleado($numero);
		//echo "resultao:"
		//print_r( $resultado);
		//return;
		
		//$this->session->set_userdata($resultado);	
		//where = numero;
		//$result= modelo->select()
		//$data['fecha_ingreso'] = "My Real Heading";
		$this->load->view('vModificacionMovimientosQuincenalEmpleado',$resultado );

	/*	if (count($resultado) == 1) {
			
	 }
		else{
		 	$this->load->view('vModificacionMovimientosQuincenal');
			echo "Numero de empleado Inexistente";
			//print_r('$resultado');
		}*/	
	}
	public function descargarpdf()
		{
			$data = $this->mModificacionMovimientosQuincenal->obtener_datos_auxiliar_nomina();
			//$resultado = $this->mModificacionMovimientosQuincenal->buscar_nomina_auxiliar_empleado($numero);
			$hoy = date("d/m/y/his");

			$html='';
			

			$html= '<header class="clearfix">
      <div id="logo">
        <img src="static/images/ciberwin.png" aling="center">
      </div>
      <h1>BUSINESS SYSTEM DE MEXICO S.A DE C.V </h1>
      <div id="project">
        <div><span>PROYECTO</span> Impresion Recibo Nomina</div>
        <div><span>Numero Empleado</span> Ciberwin</div>
        <div><span>DIRECCION</span> Soria 140 Col. Alamos. CDMX </div>
        <div><span>EMAIL</span> <a href="www.ciberwine.com.mx">www.ciberwine.com.mx</a></div>
        <div><span>Fecha</span>24/11/2018</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
        	<tr>
			<th>Descripcion</th>
			<th>Num Emp</th>
			<th>Percep/Deduc</td>
			<th>Departamento</th>
			<th>Tarifa</th>
			<th>Cantidad</th>
			<th>Importe</th>
			<th>Tipo Pago</th>	
		</tr>
        </thead>
       ';

 				//Construir la estructura dinamica del pdf
	foreach ($data as $data) {
			$html.='
			
			<tr>
				<td>'.$data->movtipnom.'</td>
				<td>'.$data->movnumtra.'</td>
				<td>'.$data->movnumpyd.'</td>
				<td>'.$data->movdepto.'</td>
				<td>'.$data->movtarifa.'</td>
				<td>'.$data->movcantidad.'</td>
				<td>'.$data->movimport.'</td>
				<td>'.$data->movindica.'</td>
			</tr>
			';
		}
			$html.='</table>
			
   			 		</main>
   			 	<br>
   			 	<footer>
      			Contacto: 5564.0009 / 5574.0350 / 5264.7410 / 5264.7500 
				</tbody>
    			</footer>';

		

			$pdfFilePath = "Reportedeventa_".$hoy.".pdf";
			
			$css = file_get_contents('static/css/style.css');
			
			$this->load->library('M_pdf');

			$this->m_pdf->pdf->WriteHTML($css,1);

			$this->m_pdf->pdf->WriteHTML($html);

			$this->m_pdf->pdf->Output($pdfFilePath,"D");
		}

	

}
 ?>