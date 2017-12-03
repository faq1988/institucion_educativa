<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}




function crear_menu($data){
		/*$this->db->insert('evento', array('accion'=>$accion, 'descripcion'=>$descripcion,
			'id_alumno'=>$id_alumno));
      */
	}



  function obtener_menu($monday, $friday){
  		$this->db->where('fecha >=', $monday);
    	$this->db->where('fecha <=', $friday);
  		$query = $this->db->get('menu_semanal');
  		if ($query->num_rows() >0 ) return $query;//->result();
  			}










}


?>
