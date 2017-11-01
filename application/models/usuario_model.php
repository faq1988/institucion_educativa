<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{



public function __construct()
{
  parent::__construct();
}


public function login($username, $password){

$this->db->where('username', $username);
$this->db->where('password', $password);
$q = $this->db->get('usuario');
if ($q->num_rows()>0)
	return true;
else
	return false;
}



function crearInscripcion($data, $torneo, $tipo){
		
		$this->db->insert('persona', array('nombre'=>$data['nombre'], 'categoria'=>$data['categoria'], 'torneo'=>$torneo));

	}



public function obtener_usuario($username){

$this->db->where('username', $username);
$q = $this->db->get('usuario');
if ($q->num_rows() >0 ) return $q;//->result();
}









}


?>