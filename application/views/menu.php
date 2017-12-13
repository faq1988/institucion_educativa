<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Institución educativa</title>



    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>bootstraptemplate/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom fonts for this template -->
    <link href="<?=base_url()?>bootstraptemplate/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?=base_url()?>bootstraptemplate/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>bootstraptemplate/css/sb-admin.css" rel="stylesheet">

    <!--link href="<?=base_url()?>bootstraptemplate/css/jumbotron.css" rel="stylesheet"-->

    <link href="<?=base_url()?>bootstraptemplate/css/galeria.css" rel="stylesheet">





  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="<?=base_url()?>">Institución educativa</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        


<!--
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************  
-->

       

        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

         <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu2">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAlumnos" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-male"></i>
              <span class="nav-link-text">
                Alumnos</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseAlumnos">
              <li>                
                <a href="<?=base_url()?>Welcome/crear_alumno"><i class="fa fa-fw fa-plus"></i> Nuevo</a>
              </li>
              <li>                
                <a href="<?=base_url()?>Welcome/buscar_alumno"><i class="fa fa-fw fa-search"></i> Buscar</a>
              </li>
              <li>                
                <a href="<?=base_url()?>Welcome/buscar_autorizaciones"><i class="fa fa-fw fa-bullhorn"></i></i> Autorizaciones</a>
              </li>
              <li>                
                <a href="<?=base_url()?>Welcome/buscar_inasistencias"><i class="fa fa-fw fa-check-square-o"></i></i></i> Inasistencias</a>
              </li>
            </ul>
          </li>

          <?php }?>

          <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu2">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseActividades" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-tv"></i>
              <span class="nav-link-text">
                Actividad</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseActividades">
              <li>
                <a href="<?=base_url()?>Welcome/crear_evento"><i class="fa fa-fw fa-plus"></i> Registrar evento</a>
              </li>
              <li>
                <a href="<?=base_url()?>Welcome/eventos"><i class="fa fa-fw fa-search"></i> Últimas actividades</a>
              </li>
            </ul>
          </li>

          <?php }?>
         
         

          <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="<?=base_url()?>Welcome/deberes_o_tareas">
              <i class="fa fa-fw fa-calendar"></i>
              <span class="nav-link-text">
                Deberes/Tareas</span>
            </a>
          </li>

          <?php }?>

           <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu2">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMaestros" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-graduation-cap"></i>
              <span class="nav-link-text">
                Maestros</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMaestros">
              <li>                
                <a href="<?=base_url()?>Welcome/crear_maestro"><i class="fa fa-fw fa-plus"></i> Nuevo</a>
              </li>
              <li>                
                <a href="<?=base_url()?>Welcome/buscar_maestros"><i class="fa fa-fw fa-search"></i> Buscar</a>
              </li>
              <li>                
                <a href="<?=base_url()?>Welcome/crear_usuario_maestros"><i class="fa fa-fw fa-search"></i> Crear usuario</a>
              </li>
            </ul>
          </li>

          <?php }?>

         
          <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?=base_url()?>Welcome/clases">
              <i class="fa fa-fw fa-group"></i>
              <span class="nav-link-text">
                Aulas</span>
            </a>
          </li>

          <?php }?>
          <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?=base_url()?>Welcome/estadisticas">
              <i class="fa fa-fw fa-bar-chart"></i>
              <span class="nav-link-text">
                Estadísticas</span>
            </a>
          </li>

          <?php }?>
          <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?=base_url()?>Welcome/menu_semanal">
              <i class="fa fa-fw fa-cutlery"></i>
              <span class="nav-link-text">
                Menú semanal</span>
            </a>
          </li>

          <?php }?>
          <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-commenting-o"></i>
              <span class="nav-link-text">
                Circulares</span>
            </a>
          </li>
          
          <?php }?>
          <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>

           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?=base_url()?>Welcome/galeria">
              <i class="fa fa-fw fa-camera"></i>
              <span class="nav-link-text">
                Galeria</span>
            </a>
          </li>

          <?php }?>
          <?php if ($rol == 'SUPERUSER' or $rol == 'ESTABLECIMIENTO' or $rol == 'MAESTRO' or $rol == 'TUTOR') {?>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?=base_url()?>Welcome/contacto">
              <i class="fa fa-fw fa-phone"></i>
              <span class="nav-link-text">
                Contacto</span>
            </a>
          </li>

          <?php }?>



        </ul>

        

<!--
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************
  ****************************************************************************************************************************************************  
-->

        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
