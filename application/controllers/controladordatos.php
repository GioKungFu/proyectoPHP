<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

class Controladordatos extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('modeloformulario');


	}

	function index(){


		$data['usuarios']=	$this->modeloformulario->obtenerusuarios();

		//$this->load->view('usuarios',$data);
	}
	function inicio(){

	$this->load->view('inicio');

	}

	
	function documentos(){

	$this->load->view('documentos');


		
	}
	function publicar(){


		$this->load->view('publicar');
	}

	function servicios(){

		$this->load->view('servicios');
		
	}
	function contactenos(){

	$this->load->view('nosotros');
		
	}
}

?>