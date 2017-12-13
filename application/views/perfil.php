


    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Institución educativa</a>
          </li>
          <li class="breadcrumb-item active">Perfil</li>
        </ol>



        <div class="card mb-3">
  <img class="card-img-top" src="<?=base_url()?>img/header.png" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title"><?php echo $perfil[0]->nombre; ?>, <?php echo $perfil[0]->apellido; ?></h4>
    <p class="card-text">Edad: <?php echo $perfil[0]->edad; ?></p>
    <p class="card-text">Fecha de nacimiento: <?php echo $perfil[0]->nacimiento; ?></p>
    <p class="card-text">Nombre de usuario: <?php echo $perfil[0]->username; ?></p>
    <p class="card-text">DNI: <?php echo $perfil[0]->dni; ?></p>
    <p class="card-text">Correo electrónico: <?php echo $perfil[0]->email; ?></p>
    <p class="card-text">Dirección: <?php echo $perfil[0]->direccion; ?></p>
    <p class="card-text">Ciudad: <?php echo $perfil[0]->ciudad; ?></p>
    <p class="card-text">Establecimiento educativo: <?php echo $perfil[0]->id_establecimiento; ?></p>

    <p class="card-text"><small class="text-muted">Fecha de creación: <?php echo $perfil[0]->fechahora; ?></small></p>
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

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>bootstraptemplate/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>bootstraptemplate/vendor/popper/popper.min.js"></script>
    <script src="<?=base_url()?>bootstraptemplate/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?=base_url()?>bootstraptemplate/js/sb-admin.min.js"></script>

  </body>

</html>
