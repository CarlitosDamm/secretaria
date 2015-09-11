<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();

	}
   	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
   	public function inicio(){
   			$fecha = mdate('%Y-%m-%d');
   			$datos['tipo'] = $this->session->userdata('tipo');

			$fecha_modificada=explode('-',$fecha);
			switch ($fecha_modificada[1]) {
				case '01':
					$mes='Enero';
					break;
				case '02':
					$mes='Febrero';
					break;
				case '03':
					$mes='Marzo';
					break;
				case '04':
					$mes='Abril';
					break;
				case '05':
					$mes='Mayo';
					break;
				case '06':
					$mes='Junio';
					break;
				case '07':
					$mes='Julio';
					break;
				case '08':
					$mes='Agosto';
					break;
				case '09':
					$mes='Septiembre';
					break;
				case '10':
					$mes='Octubre';
					break;
				case '11':
					$mes='Noviembre';
					break;
				case '12':
					$mes='Diciembre';
					break;
			}
			$datos['fecha'] = "No hay eventos para el ".$fecha_modificada[2]." de ".$mes." del ".$fecha_modificada[0];
   			$datos['agenda'] = $this->Consulta_model->agenda($fecha);
   			$this->load->view('estructura/head', $datos);
			$this->load->view('admin/inicio', $datos);
			$this->load->view('estructura/foot');
	}
	public function buscar($b){
		$datos['eventos'] = $this->Inicio_model->eventos($b);
		$datos['contador'] = $b;
		$this->load->view('usuarios/pruebas', $datos);	
	}

	public function error(){
		$this->load->view('usuarios/error');
	}

	//Controladores para los links
	public function agenda(){

		$datos['tipo'] = $this->session->userdata('tipo');

		if($_POST){

			$fecha     = $this->input->post('FechaE');
			$hora      = $this->input->post('Hora');
			$evento    = $this->input->post('Evento');
			$lugar     = $this->input->post('Lugar');
			$evidencia = $this->input->post('Evidencia');
			
			$nom_doc = substr(md5(uniqid(rand())),0,6);
			$config['file_name'] = $nom_doc;
			$config['upload_path'] = './includes/docs/';
			$config['allowed_types'] = '*';
			$config['max_size']	= '10000';
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('Evidencia')){
				echo $this->upload->display_errors('<p>', '</p>');
			}
			$upload_data = $this->upload->data();
			$nom_doc = $nom_doc.$upload_data['file_ext'];

			if(strpos($nom_doc, '.') === false){

			$nom_doc = 'Sin evidencia';
			$this->Consulta_model->agregar_agenda($evento, $lugar, $fecha, $hora, $nom_doc);
			$datos['direccion']='Admin/agenda';
			$datos['alerta']='1';
			$this->load->view('redirect', $datos);

			}else{

				$this->Consulta_model->agregar_agenda($evento, $lugar, $fecha, $hora, $nom_doc);
				$datos['direccion']='Admin/agenda';
				$datos['alerta']='1';
				$this->load->view('redirect', $datos);

			}
		}else {

			//$this->Consulta_model->agenda();	
			$this->load->view('estructura/head', $datos);
			$this->load->view('admin/agenda');
			$this->load->view('estructura/foot');

		}
	}

	public function buscarEven(){
		$b = $this->input->post('buscarEven');
		$datos['tipo'] = $this->session->userdata('tipo');
		$datos['docs'] = $this->Consulta_model->buscarAgenda($b);
		$datos['contador'] = $b;
		$this->load->view('estructura/head', $datos);
		$this->load->view('admin/buscarEven', $datos);	
		$this->load->view('estructura/foot');

	}

	public function documentos(){
		$datos['tipo'] = $this->session->userdata('tipo');
		$datos['docs']=$this->Consulta_model->verDocs();
		if($_POST){
			$folio = $this->input->post('Folio');
			$hora = $this->input->post('Hora');
			$fechaD = $this->input->post('FechaD');
			$tramite = $this->input->post('Tramite');
			$observacion = $this->input->post('Observacion');
			$quien = $this->input->post('Quien');
			$doc = $this->input->post('Doc');

				$nom_doc =substr(md5(uniqid(rand())),0,6);
				$config['file_name'] = $nom_doc;
				$config['upload_path'] = './includes/docs/';
				$config['allowed_types'] = '*';
				$config['max_size']	= '10000';
				echo $doc;
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('Doc')){
					echo $this->upload->display_errors('<p>', '</p>');
				}

				$upload_data = $this->upload->data();
				$nom_doc = $nom_doc.$upload_data['file_ext'];
				echo $nom_doc;

			$this->Consulta_model->agregarD($folio, $hora, $fechaD, $tramite, $observacion, $quien, $nom_doc);
			$datos['direccion'] = 'Admin/ver';
			$this->load->view('redirect', $datos);
		}else{
			$this->load->view('estructura/head', $datos);
			$this->load->view('admin/documentos', $datos);
			$this->load->view('estructura/foot');
		}
	}

	public function buscarDocs(){
		$b = $this->input->post('buscarDocs');
		$datos['tipo'] = $this->session->userdata('tipo');
		$datos['docs'] = $this->Consulta_model->buscarDocs($b);
		$datos['contador'] = $b;
		$this->load->view('estructura/head', $datos);
		$this->load->view('admin/buscarDocs', $datos);	
		$this->load->view('estructura/foot');
		
			
	}

	public function verDocs(){
		$datos['tipo'] = $this->session->userdata('tipo');
		$datos['docs']=$this->Consulta_model->verDocs();
		$this->load->view('estructura/head', $datos);
		$this->load->view('admin/verDocs', $datos);
		$this->load->view('estructura/foot');
	}

}