


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
  echo form_open('Alumno_controller/asignar_alumnos_clases');

  ?>

<div class="btn-group btn-group-lg" data-toggle="buttons">
  <label class="btn btn-success">
    <input type="radio" name="clase" value="1" id="option1" autocomplete="off"> Sala uno
  </label>
  <label class="btn btn-success">
    <input type="radio" name="clase" value="2" id="option2" autocomplete="off"> Sala dos
  </label>
  <label class="btn btn-success">
    <input type="radio" name="clase" value="3" id="option3" autocomplete="off"> Sala tres
  </label>

</div>

</br>
</br>

<div class="container">

<table class="table" id="tablaaulas">
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
              <th scope="row"><?php echo $alumnos[$i]->id;?></th>
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

    <script type="text/javascript">
          $(document).ready(function() {
           $('#tablaaulas').DataTable( {
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
