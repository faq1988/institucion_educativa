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


function obtener_mensajes_alumno($id_tutor)
{
	$this->db->where('id_tutor =', $id_tutor);
	$query= $this->db->get('mensajes_alumnos');      
    if ($query->num_rows() >0 ) return $query;//->result();
}










}


?>