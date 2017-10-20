<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}




function crear_persona($data, $tipo){
		
		$this->db->insert('persona', array('nombre'=>$data['nombre'], 'apellido'=>$data['apellido'], 
			'edad'=>$data['edad'], 'dni'=>$data['dni'], 'email'=>$data['email'], 'direccion'=>$data['direccion'],'ciudad'=>$data['ciudad'],'tipo'=>$tipo));

	}












}


?>