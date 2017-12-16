<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index(){

	if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $this->load->model('usuario_model');
    $usuario= $this->usuario_model->obtener_usuario($this->session->userdata('username')) ->result();

    $header=array();
    $this->load->model('sistema_model');
    $ultimos_mensajes=  $this->sistema_model->obtener_ultimos_mensajes($usuario[0]->id_persona);

    if (isset($ultimos_mensajes))
    $header['ultimos_mensajes']= $ultimos_mensajes->result();
    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header', $header);
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

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
		$this -> load -> view('eventos', $data);
  }


   public function crear_alumno()
  {
  	if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
     $this -> load -> view('menu', $menu);
     $this -> load -> view('header');
	   $this -> load -> view('crear_alumno');
  }


  public function contacto()
  {
  	if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
		$this -> load -> view('contacto');
  }

  public function crear_evento()
  {
  	if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

		$data=array();
		$this->load->model('persona_model');
		$alumnos=  $this->persona_model->obtener_personas('ALUMNO');

		if (isset($alumnos))
		$data['alumnos']= $alumnos->result();

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
		$this -> load -> view('crear_evento', $data);
  }


	public function menu_semanal()
	{
		if (!$this->session->userdata('username'))
		{
			redirect('login');
		}
    $monday = date( 'Y-m-d', strtotime( 'monday this week' ) );
    $friday = date( 'Y-m-d', strtotime( 'friday this week' ) );

		$data=array();
		$this->load->model('menu_model');
		$menu_semanal=  $this->menu_model->obtener_menu($monday, $friday);

		if (isset($menu_semanal))
		$data['menu_semanal']= $menu_semanal->result();

		$menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
		$this -> load -> view('header');
		$this -> load -> view('menu_semanal', $data);
	}


  public function crear_maestro()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
    $this -> load -> view('crear_maestro');
  }

  public function buscar_alumno()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('persona_model');
    $alumnos=  $this->persona_model->obtener_personas('ALUMNO');

    if (isset($alumnos))
    $data['alumnos']= $alumnos->result();

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
    $this -> load -> view('buscar_alumno', $data);
  }

  public function buscar_maestros()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('persona_model');
    $maestros=  $this->persona_model->obtener_personas('MAESTRO');

    if (isset($maestros))
    $data['maestros']= $maestros->result();

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
    $this -> load -> view('buscar_maestros', $data);
  }

    public function ver_mensajes_alumno()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $this->load->model('usuario_model');
    $usuario= $this->usuario_model->obtener_usuario($this->session->userdata('username')) ->result();

    $data=array();
    $this->load->model('sistema_model');
    $mensajes=  $this->sistema_model->obtener_mensajes_alumno($usuario[0]->id_persona);

    if (isset($mensajes))
    $data['mensajes']= $mensajes->result();

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
    $this -> load -> view('mensajes_alumnos', $data);
  }


  public function galeria()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
    $this -> load -> view('galeria');
  }


  public function asignar_clases()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('clase_model');
    //$alumnos=  $this->persona_model->obtener_personas('ALUMNO');
    $alumnos= $this->clase_model->obtener_alumnos_sin_clase();

    if (isset($alumnos))
    $data['alumnos']= $alumnos->result();

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
    $this -> load -> view('clases', $data);
  }


  public function buscar_autorizaciones()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('autorizaciones_model');
    //$alumnos=  $this->persona_model->obtener_personas('ALUMNO');
    $autorizaciones= $this->autorizaciones_model->obtener_autorizaciones();

    if (isset($autorizaciones))
    $data['autorizaciones']= $autorizaciones->result();

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
    $this -> load -> view('autorizaciones', $data);
  }

  public function estadisticas()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
    $this -> load -> view('estadisticas');
  }


    public function crear_usuario_maestros()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }
    $data=array();
    $this->load->model('persona_model');
    $maestros=  $this->persona_model->obtener_personas('MAESTRO');

    if (isset($maestros))
    $data['maestros']= $maestros->result();

    $menu['rol']= $this->session->userdata('rol');

    $data['rol']= 'MAESTRO';

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
    $this -> load -> view('crear_usuario', $data);
  }



  public function ver_perfil()
  {
    if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $menu['rol']= $this->session->userdata('rol');
    $data=array();
    $this->load->model('usuario_model');
    $perfil=  $this->usuario_model->obtener_perfil($this->session->userdata('username'));

    if (isset($perfil))
    $data['perfil']= $perfil->result();

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
    $this -> load -> view('perfil', $data);
  }


  public function buscar_inasistencias()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('inasistencias_model');
    $inasistencias= $this->inasistencias_model->obtener_inasistencias();

    if (isset($inasistencias))
    $data['inasistencias']= $inasistencias->result();

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
    $this -> load -> view('inasistencias', $data);
  }


  public function buscar_aulas()
  {
   if (!$this->session->userdata('username'))
    {
      redirect('login');
    }

    $data=array();
    $this->load->model('Clase_model');
    //$alumnos=  $this->persona_model->obtener_personas('ALUMNO');
    $aulas= $this->Clase_model->obtener_aulas();

    if (isset($aulas))
    $data['aulas']= $aulas->result();

    $menu['rol']= $this->session->userdata('rol');

		$this -> default_vars();
    $this -> load -> view('menu', $menu);
    $this -> load -> view('header');
    $this -> load -> view('buscar_aulas', $data);
  }

  public function default_vars($js_array=array(),$css_array=array()){
    $js=array( );
    $css=array( );

		array_push($js,base_url().'bootstraptemplate/vendor/jquery/jquery.min.js');
		array_push($js,base_url().'bootstraptemplate/vendor/popper/popper.min.js');
		array_push($js,base_url().'bootstraptemplate/vendor/bootstrap/js/bootstrap.min.js');
		array_push($js,base_url().'ootstraptemplate/vendor/chart.js/Chart.min.js');
		array_push($js,base_url().'bootstraptemplate/vendor/datatables/jquery.dataTables.js');

		array_push($js,base_url().'bootstraptemplate/js/sb-admin.js');

		$data=array();
		$data["js_to_load"]=array_unique($js);
    $data["css_to_load"]=array_unique($css);
    if($this->load->view('init_view','',TRUE)!== '')
      $this -> load -> view('init_view',$data);

	}

}
