


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


<div class="row" style="padding-top:50px">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" >

            <div class="list-group list-group-horizontal" style="display: inline-block">
                <a href="<?=base_url()?>Welcome/crear_usuario_alumno/<?php echo $id_alumno; ?>" class="list-group-item active" style="display: inline-block">Nuevo</a>                
            </div>

        </div>


  </div>

</br>




<div class="container">

<!--table class="table"-->
<table id="tablaalumnos" class="table" cellspacing="0" width="100%">

  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>Nombre de usuario</th>
      <th>Email</th>
      <th>Acciones</th>
      
    </tr>
  </thead>
  <tbody>
            <?php
                if (isset($usuarios)){
                 for($i=0; $i<sizeof($usuarios); $i++){ ?>
            <tr>
              <th scope="row"><?php echo $usuarios[$i]->id;?></th>
              <td><?php echo $usuarios[$i]->username;?></td>
              <td><?php echo $usuarios[$i]->email;?></td>
              
              <td>
                <!--a href="<?php echo base_url() ?>Welcome/ver_alumno/<?php echo $usuarios[$i]->id; ?>"> <i title="Ver" class="fa fa-fw fa-eye"></i></a-->                   
                <a href="<?php echo base_url() ?>Sistema_controller/eliminar_usuario/<?php echo $usuarios[$i]->id; ?>/<?php echo $id_alumno; ?>"> <i title="Eliminar" class="fa fa-fw fa-trash-o"></i></a>
              </td>
              
              <?php //echo "<td><input type='checkbox' name='lista_alumnos[]' value='". $alumnos[$i]->id . "' </td>"; ?>
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

    <script type="text/javascript">
          $(document).ready(function() {
           $('#tablaalumnos').DataTable( {
                    "language": {
                        "decimal":        "",
                        "emptyTable":     "No hay datos para mostrar",
                        "info":           "Mostrando _START_ a _END_ de _TOTAL_ filas",
                        "infoEmpty":      "Mostrando 0 a 0 de 0 filas",
                        "infoFiltered":   "(filtered from _MAX_ total entries)",
                        "infoPostFix":    "",
                        "thousands":      ",",
                        "lengthMenu":     "Mostrar _MENU_ filas",
                        "loadingRecords": "Cargando...",
                        "processing":     "Procesando...",
                        "search":         "Buscar:",
                        "zeroRecords":    "No se encontraron resultados",
                        "paginate": {
                            "first":      "Primero",
                            "last":       "Último",
                            "next":       "Siguiente",
                            "previous":   "Anterior"
                        },
                        "aria": {
                            "sortAscending":  ": ordenar columna en orden ascendente",
                            "sortDescending": ": ordenar columna en orden descendente"
                        }
                    }
    } );



          } );
    </script>


  </body>

</html>
