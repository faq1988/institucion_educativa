


    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Institución educativa</a>
          </li>
          <li class="breadcrumb-item active">Inicio</li>
        </ol>



    <!--center>
     <img src="<?=base_url()?>img/image.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
</center-->

<center>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="<?=base_url()?>img/image.jpg" alt="First slide">
    </div>

  </div>
</div>






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
                  <th>Horario</th>
                  <th>Evento</th>
                  <th>Descripcion</th>
                </tr>
              </thead>
              <tbody>

                <?php
                    if (isset($eventos)){
                     for($i=0; $i<sizeof($eventos); $i++){ ?>
                <tr>
                  <th scope="row"><?php echo $i+1;?></th>
                  <td><?php echo $eventos[$i]->fechahora;?></td>
                  <td><?php echo $eventos[$i]->accion;?></td>
                  <td><?php echo $eventos[$i]->descripcion;?></td>
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




  </body>

</html>
