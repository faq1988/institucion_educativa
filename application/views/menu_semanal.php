


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


</br>

<div class="container">
<button type="button" class="btn btn-primary btn-lg col-1"><--</button>
<button type="button" class="btn btn-primary btn-lg col-9" disabled>Hoy</button>
<button type="button" class="btn btn-primary btn-lg col-1">--></button>
</div>

</br>

<div class="container">
            <table class="table">
              <thead class="thead-default">
                <tr>
                  <th>#</th>
                  <th>Fecha</th>
                  <th>Desayuno</th>
                  <th>Almuerzo</th>
                  <th>Merienda</th>
                  <th>Cena</th>
                </tr>
              </thead>
              <tbody>

                <?php
                    if (isset($menu)){
                     for($i=0; $i<sizeof($menu); $i++){ ?>
                <tr>
                  <th scope="row"><?php echo $i+1;?></th>
                  <td><?php echo $menu[$i]->fecha;?></td>
                  <td><?php echo $menu[$i]->desayuno;?></td>
                  <td><?php echo $menu[$i]->almuerzo;?></td>
                  <td><?php echo $menu[$i]->merienda;?></td>
                  <td><?php echo $menu[$i]->cena;?></td>
                </tr>
                <?php } }?>
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
