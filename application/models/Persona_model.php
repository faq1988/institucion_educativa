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



  function obtener_personas($tipo){
      $this->db->where('tipo=',$tipo);
      $query = $this->db->get('persona');
      if ($query->num_rows() >0 ) return $query;//->result();

        }

  function obtener_persona_por_id($id){
      $this->db->where('id=',$id);      
      $query = $this->db->get('persona');
      if ($query->num_rows() >0 ) return $query;//->result();
        }


function eliminar_persona($id)
	{
		$this->db->where('id =', $id);
		$this->db->delete('persona');
	}









}


?>
