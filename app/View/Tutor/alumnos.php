<?php
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
session_start();

if ($_SESSION['rol_name'] != 'Tutor') {
    header('location:../../index.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h4 class="p-3 text-center">Calificaciones</h4>
        <div class="text-right">
            <a href="index.php" class="btn btn-danger text-right mb-3">Regresar al dashboard</a>
        </div>

        <?php
        $calificaciones = $database::table('calificaciones AS c')
            ->join('asignatura AS a', 'c.AsignaturaId', '=', 'a.AsignaturaId')
            ->where('AlumnoId', $_GET['id'])
            ->get();
        ?>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Asignatura</th>
                        <th>Calificaciones</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $acum=0;
                    $total=0;
                        foreach($calificaciones AS $item => $value){
                            echo "<tr>";
                            echo "<td>".$value->Nombre."</td>";
                            echo "<td>".$value->Calificacion."</td>";
                            // foreach(){
                            // }
                            echo "</tr>";
                            $acum+=$value->Calificacion;
                        }
                        
                    ?>
                    <tr>
                        <td class="text-right"><b>Promedio:</b></td>
                        <td><?php echo $acum/6; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>