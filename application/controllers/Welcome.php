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




	public function key()
	{
		echo md5('peliculas');
	}




}
