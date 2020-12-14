<?php
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/escuela/app/src/css/menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <title>Lista alumnos</title>
</head>

<body>
    <div class="container">
        <h4 class="mt-4 text-center">Lista de los alumnos</h4>
        <div class="row">
            <div class="col">
                <?php
                $query = $database::table('profesor')
                    ->join('grupos', 'profesor.ProfesorId', '=', 'grupos.ProfesorId')
                    ->where('GrupoId', $_GET['id'])->first();
                ?>
                <p><b>Grupo: </b><?php echo $query->Valor; ?></p>
                <p><b>Profesor: </b><?php echo $query->Nombre . ' ' . $query->Apellidos; ?></p>
            </div>
            <div class="col"></div>
            <div class="col">
                <div class="text-right">
                    <a href="index.php" class="btn btn-danger text-right mb-3">Regresar al dashboard</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table" id="tabla_tutores">
                <thead class="thead-dark">
                    <tr>
                        <th>Identificador</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Tutor</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      $query = $database::table('alumno as a')
                      ->join('tutor as t', 'a.TutorId', '=', 't.TutorId')
                      ->where('GrupoId', $_GET['id'])->get();
                      var_dump($query);
                    foreach ($query as $item) {
                        echo '<tr>';
                        echo '<td>' . $item->AlumnoId . '</td>';
                        echo '<td>' . $item->Nombre . '</td>';
                        echo '<td>' . $item->Apellidos . '</td>';
                        echo '<td>'. $item->Nombre.'</td>';
                        echo '<td>'. $item->Telefono.'</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            $('#tabla_tutores').DataTable({

                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sSearch": "Buscar:",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "sProcessing": "Procesando...",
                }

            });
        });
    </script>
</body>

</html>