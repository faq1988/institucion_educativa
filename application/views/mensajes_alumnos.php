


    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Institución educativa</a>
          </li>
          <li class="breadcrumb-item active">Inicio</li>
        </ol>



<center>

 





<div class="container">


  <div class="row" style="padding-top:50px">
    
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" >

            <div class="list-group list-group-horizontal" style="display: inline-block">
                <a href="#" class="list-group-item active" style="display: inline-block">Eliminar</a>
                <a href="#" class="list-group-item active" style="display: inline-block">Marcar</a>
                <a href="#" class="list-group-item active" style="display: inline-block">Responder</a>
                <a href="#" class="list-group-item active" style="display: inline-block">Reenviar</a>
            </div>

        </div>
      

  </div>

</br>




<table class="table">
  <thead class="thead-default">
    <tr>
      <th>Seleccionar</th>
      <th>#</th>      
      <th>Asunto</th>
      <th>Mensaje</th>
      <th>Fecha</th>
      
      
    </tr>
  </thead>
  <tbody>
            <?php
                if (isset($mensajes)){
                 for($i=0; $i<sizeof($mensajes); $i++){ ?>
            <tr>
              <?php echo "<td><input type='checkbox' name='lista_mensajes[]' value='". $mensajes[$i]->id . "' </td>"; ?>
              <th scope="row"><?php echo $mensajes[$i]->id;?></th>              
              <td><?php echo $mensajes[$i]->asunto;?></td>
              <td><?php echo $mensajes[$i]->mensaje;?></td>              
              <td><?php echo $mensajes[$i]->fechahora;?></td>
            </tr>
            <?php } }

            else
                echo "Aún no posee ningún mensaje";

            ?>
  </tbody>
</table>
</div>



</center>




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
