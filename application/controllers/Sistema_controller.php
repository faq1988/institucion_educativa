<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema_controller extends CI_Controller {

	public function __construct()
{
  parent::__construct();
  $this->load->model('Sistema_model');
  $this->load->model('Usuario_model');
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



  public function crear_usuario()
  {
       
    
      $data = array(        
      'nombre_usuario' => $this->input->post('nombre_usuario'),      
      'contraseña' => $this->input->post('contraseña'),      
      'email' => $this->input->post('email'),        
      'rol' => $this->input->post('rol'),
      'id_persona' => $this->input->post('maestro'),
      );

      
      $this->Usuario_model->crear_usuario($data);

      redirect(welcome);
  }  


    public function crear_usuario_alumno()
  {
      //$id_alumno = $this->uri->segment(3);
    
      $data = array(        
      'nombre_usuario' => $this->input->post('nombre_usuario'),      
      'contraseña' => $this->input->post('contraseña'),      
      'email' => $this->input->post('email'),        
      'rol' => $this->input->post('rol'),
      'id_persona' => $this->input->post('tutor'),
      'id_alumno' => $this->input->post('id_alumno'),
      );
            
      $this->Usuario_model->crear_usuario($data);

      redirect("Welcome/ver_usuarios_alumno/".$data['id_alumno']);
  }  




  public function eliminar_usuario()
  {
    $id_usuario = $this->uri->segment(3);
    $id_alumno = $this->uri->segment(4);

    $this->Usuario_model->eliminar_usuario($id_usuario);

    redirect("Welcome/ver_usuarios_alumno/".$id_alumno);
  }

}
