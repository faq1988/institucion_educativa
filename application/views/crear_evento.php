


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

  <?php
  echo form_open('Alumno_controller/registrar_evento');

  $descripcion = array(
      'name' => 'descripcion',
      'id'  => 'descripcion',
      'value' => '',
      'maxlength' => '30',
      'size'  =>  '30',
      'style' =>  'width:50%',
      'class' => 'form-control',

    );
  ?>

<div class="btn-group btn-group-lg" data-toggle="buttons">
  <label class="btn btn-success">
    <input type="radio" name="tipo_evento" value="Dormir" id="option1" autocomplete="off"> Dormir
  </label>
  <label class="btn btn-success">
    <input type="radio" name="tipo_evento" value="Comer" id="option2" autocomplete="off"> Comer
  </label>
  <label class="btn btn-success">
    <input type="radio" name="tipo_evento" value="Baño" id="option3" autocomplete="off"> Baño
  </label>

</div>

</br>
</br>


<?php
  echo form_label('Descripción', 'descripcion');

  echo form_input($descripcion);

  echo '</br>';
?>


<div class="container">




<table class="table">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>DNI</th>
      <th>Nombre</th>
      <th>Edad</th>
      <th>Seleccionar</th>
    </tr>
  </thead>
  <tbody>
            <?php
                if (isset($alumnos)){
                 for($i=0; $i<sizeof($alumnos); $i++){ ?>
            <tr>
              <th scope="row">1</th>
              <td><?php echo $alumnos[$i]->dni;?></td>
              <td><?php echo $alumnos[$i]->apellido;?>, <?php echo $alumnos[$i]->nombre;?></td>
              <td><?php echo $alumnos[$i]->edad;?></td>
              <?php echo "<td><input type='checkbox' name='lista_alumnos[]' value='". $alumnos[$i]->id . "' </td>"; ?>
            </tr>
            <?php } }?>
  </tbody>
</table>
</div>


<?php
echo form_submit('enviar','Enviar');
echo form_close();
?>

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
