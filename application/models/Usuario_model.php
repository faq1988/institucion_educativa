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



function crear_usuario($data){
		
		$this->db->insert('usuario', array('username'=>$data['nombre_usuario'], 'password'=>md5($data['contraseña']), 'email'=>$data['email'], 'rol'=>$data['rol']
			, 'id_establecimiento'=>$data['id_establecimiento'], 'id_persona'=>$data['id_persona']));
	}



public function obtener_usuario($username){

$this->db->where('username', $username);
$q = $this->db->get('usuario');
if ($q->num_rows() >0 ) return $q;//->result();
}



public function obtener_perfil($username)
{		
		$this->db->from('usuario u');
		$this->db->join('persona p', 'u.id_persona = p.id', 'left');		
		$this->db->where('u.username =', $username);		
		$query = $this->db->get();
  		if ($query->num_rows() >0 ) return $query;//->result();
}








}


?>