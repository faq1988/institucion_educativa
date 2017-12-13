


    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Institución educativa</a>
          </li>
          <li class="breadcrumb-item active">Maestros</li>
          <li class="breadcrumb-item active">Crear usuario</li>
        </ol>



<center>

<h2> Crear nuevo usuario</h2>

<?php //echo validation_errors();?>

<?php 

//$hidden = array('username' => 'Joe', 'member_id' => '234');
$hidden = array('rol' => $rol);


echo form_open('Sistema_controller/crear_usuario', '', $hidden);


$nombre_usuario = array(
    'name' => 'nombre_usuario',
    'id'  => 'nombre_usuario',
    'value' => '',
    'maxlength' => '15',
    'size'  =>  '15',
    'style' =>  'width:30%',
    'class' => 'form-control',
    'placeholder' => 'Nombre de usuario',

  );

$contraseña = array(
    'name' => 'contraseña',
    'id'  => 'contraseña',
    'value' => '',
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:30%',
    'class' => 'form-control',
    'placeholder' => 'Contraseña',
  );

$contraseña_repetir = array(
    'name' => 'contraseña_repetir',
    'id'  => 'contraseña_repetir',
    'value' => '',
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:30%',
    'class' => 'form-control',
    'placeholder' => 'Repetir contraseña',
  );


$email = array(
    'name' => 'email',
    'id'  => 'email',
    'value' => '',
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:30%',
    'class' => 'form-control',
    'placeholder' => 'Correo electrónico',

  );


//echo form_label('Nombre', 'nombre');

echo form_input($nombre_usuario);

echo '</br>';

//echo form_label('Apellido', 'apellido');

echo form_password($contraseña);

echo '</br>';

echo form_password($contraseña_repetir);

echo '</br>';

//echo form_label('Email', 'email');

echo form_input($email);

echo '</br>';

?>
        
                
 <select name="maestro" style="width: 30%" class="form-control">
  <option value="0"> Seleccione un maestro </option>       
<?php
                if (isset($maestros)){
                 for($i=0; $i<sizeof($maestros); $i++){ ?>
            <?php echo "<option value='".$maestros[$i]->id."'>". $maestros[$i]->apellido .", " .$maestros[$i]->nombre . " </option>"; ?>
                       
            <?php } }?>
</select>

</br>
</br>
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

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>bootstraptemplate/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>bootstraptemplate/vendor/popper/popper.min.js"></script>
    <script src="<?=base_url()?>bootstraptemplate/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?=base_url()?>bootstraptemplate/js/sb-admin.min.js"></script>

  </body>

</html>
