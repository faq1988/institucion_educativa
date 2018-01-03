


    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Institución educativa</a>
          </li>
          <li class="breadcrumb-item active">Inicio</li>
        </ol>



<nav class="navbar navbar-light bg-faded">
  <a class="navbar-brand" href="<?=base_url()?>Welcome/modificar_alumno/<?php echo $alumno[0]->id; ?>">
    <i class="fa fa-fw fa-pencil"></i>
    Modificar
  </a>
  <a class="navbar-brand" href="<?=base_url()?>Welcome/asignar_tutores">
    <i class="fa fa-fw fa-home"></i>
    Tutores
  </a>
  <a class="navbar-brand" href="<?=base_url()?>Welcome/crear_usuario_alumno">
    <i class="fa fa-fw fa-user"></i>
    Usuarios
  </a>
</nav>

</br>
</br>


  <div class="card mb-3 border-dark">  
        <div class="card-body">
          <h4 class="card-title"><?php echo $alumno[0]->nombre; ?>, <?php echo $alumno[0]->apellido; ?></h4>
          <p class="card-text">Edad: <?php echo $alumno[0]->edad; ?></p>
          <p class="card-text">Fecha de nacimiento: <?php echo $alumno[0]->nacimiento; ?></p>          
          <p class="card-text">DNI: <?php echo $alumno[0]->dni; ?></p>
          <p class="card-text">Correo electrónico: <?php echo $alumno[0]->email; ?></p>
          <p class="card-text">Dirección: <?php echo $alumno[0]->direccion; ?></p>
          <p class="card-text">Ciudad: <?php echo $alumno[0]->ciudad; ?></p>
          <p class="card-text">Establecimiento educativo: <?php echo $alumno[0]->id_establecimiento; ?></p>
          
        </div>
</div>





      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  <?php include 'footer.php';?>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

  </body>

</html>
