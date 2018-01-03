


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
<h2> Modificar alumno</h2>

<?php //echo validation_errors();?>

<?php
echo form_open('Alumno_controller/modificar_alumno/'. $alumno[0]->id);


$nombre = array(
    'name' => 'nombre',
    'id'  => 'nombre',
    'value' => ''. $alumno[0]->nombre,
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:50%',
    'class' => 'form-control',
    'placeholder' => 'Nombre',

  );

$apellido = array(
    'name' => 'apellido',
    'id'  => 'apellido',
    'value' => ''. $alumno[0]->apellido,
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:50%',
    'class' => 'form-control',
    'placeholder' => 'Apellido',

  );

$edad = array(
    'name' => 'edad',
    'id'  => 'edad',
    'value' => ''. $alumno[0]->edad,
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:50%',
    'class' => 'form-control',
    'placeholder' => 'Edad',

  );

$dni = array(
    'name' => 'dni',
    'id'  => 'dni',
    'value' => ''. $alumno[0]->dni,
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:50%',
    'class' => 'form-control',
    'placeholder' => 'DNI',

  );

$email = array(
    'name' => 'email',
    'id'  => 'email',
    'value' => ''. $alumno[0]->email,
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:50%',
    'class' => 'form-control',
    'placeholder' => 'Correo electrónico',

  );

$direccion = array(
    'name' => 'direccion',
    'id'  => 'direccion',
    'value' => ''. $alumno[0]->direccion,
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:50%',
    'class' => 'form-control',
    'placeholder' => 'Dirección',

  );

$ciudad = array(
    'name' => 'ciudad',
    'id'  => 'ciudad',
    'value' => ''. $alumno[0]->ciudad,
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:50%',
    'class' => 'form-control',
    'placeholder' => 'Ciudad',

  );



echo form_input($nombre);

echo '</br>';

echo form_input($apellido);

echo '</br>';

echo form_input($edad);

echo '</br>';

echo form_input($dni);

echo '</br>';

echo form_input($email);

echo '</br>';

echo form_input($direccion);

echo '</br>';

echo form_input($ciudad);

echo '</br>';

echo form_submit('enviar','Enviar');


echo form_close();


?>
<input type="hidden" name="id_alumno" value="<?php echo $alumno[0]->id; ?>" />
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
