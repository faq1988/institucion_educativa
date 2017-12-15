


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

<!--table class="table"-->
<table id="tablamaestros" class="table" cellspacing="0" width="100%">

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
                if (isset($maestros)){
                 for($i=0; $i<sizeof($maestros); $i++){ ?>
            <tr>
              <th scope="row"><?php echo $maestros[$i]->id;?></th>
              <td><?php echo $maestros[$i]->dni;?></td>
              <td><?php echo $maestros[$i]->apellido;?>, <?php echo $maestros[$i]->nombre;?></td>
              <td><?php echo $maestros[$i]->edad;?></td>
              <?php echo "<td><input type='checkbox' name='lista_maestros[]' value='". $maestros[$i]->id . "' </td>"; ?>
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
    <script src="<?=base_url()?>bootstraptemplate/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>bootstraptemplate/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?=base_url()?>bootstraptemplate/js/sb-admin.min.js"></script>

    <script type="text/javascript">
          $(document).ready(function() {
           $('#tablamaestros').DataTable( {
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
