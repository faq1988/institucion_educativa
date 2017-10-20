<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}




function crear_contacto($data){
		
		$this->db->insert('contacto', array('nombre'=>$data['nombre'], 'apellido'=>$data['apellido'], 
			'email'=>$data['email'], 'telefono'=>$data['telefono'],'comentario'=>$data['comentario']));

	}












}


?>