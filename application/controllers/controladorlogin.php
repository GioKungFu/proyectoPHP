<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controladorlogin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('modeloformulario');
		$this->load->helper('url');
		

	}
	function main(){
		
		 $this->load->view('vistainiciologin');
	}


	function recibirdatos(){

		
		$this->load->view('vistainiciologin');

		
		$data = array('nombre' => $this->input->post('nombre'),
		'apellido' => $this->input->post('clave'), 'correo' => $this->input->post('correo'),'contrasena' => $this->input->post('contrasena')   );

		$this->modeloformulario->crearusuario($data);

	}

	function log()
	{


	if ($this -> input -> post('nombre') != "" && $this -> input -> post('contrasena') != "") 
		{
			
			$flag = $this->modeloformulario->validarUsuario(trim($this -> input -> post('nombre')), trim($this -> input -> post('contrasena')));
			
			if($flag != false )
			{
					
			
					$this->load->view('con');
				
				
			}
			else	
				die('El Usuario Ingresado No Existe Por Favor Regrese e  Ingrese Un Usuario Registrado Gracias Por Visitarnos');
			
			

		} else 
		{
			die('failed');
		
		}

	}

		

	
}


	
	

