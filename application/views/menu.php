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
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu2">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseInscripciones" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">
                Alumnos</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseInscripciones">
              <li>
                <a href="<?=base_url()?>Welcome/crear_alumno">Nuevo</a>
              </li>
              <li>
                <a href="<?=base_url()?>Welcome/buscar_alumno">Buscar</a>
              </li>
            </ul>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="<?=base_url()?>Welcome/eventos">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">
                Eventos</span>
            </a>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="<?=base_url()?>Welcome/crear_evento">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">
                Crear evento</span>
            </a>
          </li>

           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="<?=base_url()?>Welcome/registrar_inasistencia">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">
                Inasistencias</span>
            </a>
          </li>

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?=base_url()?>Welcome/crear_maestro">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">
                Maestros</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?=base_url()?>Welcome/clases">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">
                Aulas</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">
                Estadísticas</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?=base_url()?>Welcome/menu_semanal">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">
                Menú semanal</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">
                Circulares</span>
            </a>
          </li>
           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?=base_url()?>Welcome/galeria">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">
                Galeria</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?=base_url()?>Welcome/contacto">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">
                Contacto</span>
            </a>
          </li>



        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
