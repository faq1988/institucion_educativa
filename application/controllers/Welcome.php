<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {





	public function index(){

	if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $this -> load -> view('menu');
    $this -> load -> view('header');
	$this -> load -> view('welcome_message');
  }


  public function eventos()
  {
  	if (!$this->session->userdata('username'))
    {
      redirect('login');
    }
		$data=array();
		$this->load->model('evento_model');
		$eventos=  $this->evento_model->obtener_eventos();

		if (isset($eventos))
		$data['eventos']= $eventos->result();

    $this -> load -> view('menu');
    $this -> load -> view('header');
		$this -> load -> view('eventos', $data);
  }


   public function crear_alumno()
  {
  	if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $this -> load -> view('menu');
    $this -> load -> view('header');
	$this -> load -> view('crear_alumno');
  }


  public function contacto()
  {
  	if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $this -> load -> view('menu');
    $this -> load -> view('header');
	$this -> load -> view('contacto');
  }

  public function crear_evento()
  {
  	if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $this -> load -> view('menu');
    $this -> load -> view('header');
	$this -> load -> view('crear_evento');
  }



	public function key()
	{
		echo md5('peliculas');
	}




}
