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
   			$datos['fecha'] = $fecha;
   			$datos['agenda'] = $this->Consulta_model->agenda($fecha);
   			$this->load->view('estructura/head');
			$this->load->view('admin/inicio', $datos);
			$this->load->view('estructura/foot');
	}
	public function buscar($b){
		$datos['eventos'] = $this->Inicio_model->eventos($b);
		$datos['contador'] = $b;
		$this->load->view('usuarios/preubas', $datos);	
	}

	public function error(){
		$this->load->view('usuarios/error');
	}

	//Controladores para los links
	public function agenda(){
		$this->load->view('estructura/head');
		$this->load->view('admin/agenda');
		$this->load->view('estructura/foot');
	}

}