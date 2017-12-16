


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


<h2>Agregar aula</h2>
<form action="<?=base_url()?>aulas_controller/agregar_aula" method="POST">
  <div class="form-row">
    <div class="col-8">
      <input type="text" name="nombre" class="form-control" placeholder="Nombre">
    </div>
    <div class="col-3">
      <input type="text" name="capacidad" class="form-control" placeholder="Capacidad">
    </div>
    <div class="col-1">
      <button type="submit" class="btn btn-primary">Insertar</button>
    </div>
  </div>
</form>

</br></br>



<!--table class="table"-->
<table id="tablaalumnos" class="table" cellspacing="0" width="100%">

  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Capacidad</th>
      <th>Seleccionar</th>
    </tr>
  </thead>
  <tbody>
            <?php
                if (isset($aulas)){
                 for($i=0; $i<sizeof($aulas); $i++){ ?>
            <tr>
              <th scope="row"><?php echo $aulas[$i]->id;?></th>
              <td><?php echo $aulas[$i]->nombre;?></td>
              <td><?php echo $aulas[$i]->capacidad;?></td>
              <?php echo "<td><input type='checkbox' name='lista_aulas[]' value='". $aulas[$i]->id . "' </td>"; ?>
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
