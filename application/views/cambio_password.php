


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

<h2> Cambiar contraseña</h2>

<?php //echo validation_errors();?>

<?php

//$hidden = array('username' => 'Joe', 'member_id' => '234');
$hidden = array('rol' => $rol, 'contraseña_actual'=>$perfil[0]->password);


echo form_open('Sistema_controller/cambiar_password', '', $hidden);



$contraseña_anterior = array(
    'name' => 'contraseña_anterior',
    'id'  => 'contraseña_anterior',
    'value' => '',
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:30%',
    'class' => 'form-control',
    'placeholder' => 'Contraseña actual',
  );


$contraseña_nueva = array(
    'name' => 'contraseña_nueva',
    'id'  => 'contraseña_nueva',
    'value' => '',
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:30%',
    'class' => 'form-control',
    'placeholder' => 'Nueva contraseña',
  );

$contraseña_repetir = array(
    'name' => 'contraseña_repetir',
    'id'  => 'contraseña_repetir',
    'value' => '',
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:30%',
    'class' => 'form-control',
    'placeholder' => 'Confirmar contraseña',
  );



echo '</br>';
echo form_label('Nombre:', 'nombre');
echo " ".$perfil[0]->nombre;
//echo form_input($nombre_usuario);

echo '</br>';


echo form_label('Usuario:', 'usuario');
echo " ".$perfil[0]->username;

echo '</br>';

//echo form_label('Apellido', 'apellido');

echo form_password($contraseña_anterior);

echo '</br>';

echo form_password($contraseña_nueva);

echo '</br>';

echo form_password($contraseña_repetir);

echo '</br>';


?>


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
