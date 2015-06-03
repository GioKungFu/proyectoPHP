<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modeloformulario extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

function validarUsuario($username,$contrasena){

		$pass = md5($contrasena);
		$this->db->from('CrearUsuario');
		$this->db->where('nombre',$username);
		$this->db->where('contrasena',$contrasena);
		
		$result = $this->db->get();
	
		if($result->num_rows())
		{ 
			
			return true;
		}else
			return false;



	}
function crearusuario($data){

// primero el nombre de la tabla para esta caso usuario luego en nombre de el campo qeu se va amodificar
	$this->db->insert('CrearUsuario',array('nombre'=>$data['nombre'],'apellido'=>$data['apellido'],'correo'=>$data['correo'],'contrasena'=>$data['contrasena']));
	}

}


