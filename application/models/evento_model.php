<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}




function crear_evento($data){
		/*
		$this->db->insert('evento', array('nombre'=>$data['nombre'], 'apellido'=>$data['apellido'],
			'edad'=>$data['edad'], 'dni'=>$data['dni'], 'email'=>$data['email'], 'direccion'=>$data['direccion'],'ciudad'=>$data['ciudad'],'tipo'=>$tipo));
*/
	}



  function obtener_eventos(){

  		$query = $this->db->get('evento');
  		if ($query->num_rows() >0 ) return $query;//->result();

  			}










}


?>
