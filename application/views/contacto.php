


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


<?php //echo validation_errors();?>

<?php 
echo form_open('Sistema_controller/nuevo_contacto');


$nombre = array(
    'name' => 'nombre',
    'id'  => 'nombre',
    'value' => '',
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:50%',
    'class' => 'form-control',

  );

$apellido = array(
    'name' => 'apellido',
    'id'  => 'apellido',
    'value' => '',
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:50%',
    'class' => 'form-control',

  );


$email = array(
    'name' => 'email',
    'id'  => 'email',
    'value' => '',
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:50%',
    'class' => 'form-control',

  );

$telefono = array(
    'name' => 'telefono',
    'id'  => 'telefono',
    'value' => '',
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:50%',
    'class' => 'form-control',

  );

$comentario = array(
    'name' => 'comentario',
    'id'  => 'comentario',
    'value' => '',
    'maxlength' => '30',
    'size'  =>  '30',
    'style' =>  'width:50%',
    'class' => 'form-control',

  );



echo form_label('Nombre', 'nombre');

echo form_input($nombre);

echo '</br>';

echo form_label('Apellido', 'apellido');

echo form_input($apellido);

echo '</br>';

echo form_label('Email', 'email');

echo form_input($email);

echo '</br>';

echo form_label('Telefono', 'telefono');

echo form_input($telefono);

echo '</br>';

echo form_label('Comentario', 'comentario');

echo form_input($comentario);

echo '</br>';

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
