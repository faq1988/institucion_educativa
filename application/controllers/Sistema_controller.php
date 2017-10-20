<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema_controller extends CI_Controller {

	public function __construct()
{
  parent::__construct();
  $this->load->model('sistema_model');
}



  public function nuevo_contacto()
  {
       
    
      $data = array(        
      'nombre' => $this->input->post('nombre'),      
      'apellido' => $this->input->post('apellido'),      
      'email' => $this->input->post('email'),   
      'telefono' => $this->input->post('telefono'),
      'comentario' => $this->input->post('comentario'),      

      );

      
      $this->sistema_model->crear_contacto($data);

      redirect(welcome);
  }





}
