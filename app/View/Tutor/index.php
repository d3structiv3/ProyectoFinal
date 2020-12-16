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
    <link rel="stylesheet" href="http://localhost/escuela/app/src/css/menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<body class="body-expanded">
    <div id="sidemenu" class="menu-expanded">
        <!-- HEADER -->
        <div id="header">
            <div id="title"><span> <img src="https://www.flaticon.es/premium-icon/icons/svg/3197/3197877.svg" width="35" height="35" class="d-inline-block align-top" alt=""> EduConnect</span></div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>
        <!-- ITEMS -->
        <div id="menu-items">
        <div class="item">
                <div class="icon"><img src="https://www.flaticon.es/svg/static/icons/svg/1319/1319240.svg" alt=""> </div>
                <div class="title">
                    <span>
                        <?php
                            echo 'Rol: '.$_SESSION['rol_name'];
                        ?>
                    </span>
                </div>
            </div>
            <div class="item">
                <a data-bs-toggle="collapse" href="../../Controller/LoginController.php?end=1" role="button" aria-expanded="false" aria-controls="collapseProfesores">
                    <div class="icon"><img src="https://www.flaticon.es/svg/static/icons/svg/1574/1574351.svg" alt=""> </div>
                    <div class="title"><span>Cerrar Sesión</span></div>
                </a>
            </div>
        </div>

    </div>


    <div class="container">
        <?php
            $tutor= $database::table('tutor')->where('UsuarioId',$_SESSION['user_id'])->first();
            
        ?>
        <h4 class="p-3 text-center">Hola: <?php echo $tutor->Nombre;?> </h4>
        <h6>Alumnos asociados al tutor:</h6>
           <?php
            $alumnos= $database::table('alumno as a')
                ->join('grupos as g', 'a.GrupoId', '=', 'g.GrupoId')
                ->join('profesor as p','g.ProfesorId','=','p.ProfesorId')
                ->where('a.TutorId',$tutor->TutorId)
                ->select(
                    'a.AlumnoId',
                    'a.Nombre',
                    'a.Apellidos',
                    'p.Nombre AS NombreP',
                    'p.Apellidos AS ApellidosP',
                    'p.Profesion',
                    'g.GradoId',
                    'g.GrupoId',
                    'g.Valor'
                    
                )
                ->get();
            foreach($alumnos AS $item){
                echo'<div class="card ml-2" style="width: 20rem;">';
                echo ' <div class="card-header">';
                echo 'Datos del alumno: <br>';
                echo '<b>Nombre: </b>'.$item->Nombre.' '.$item->Apellidos;
                echo '<br> <b>Grado : </b>'.$item->GradoId;
                echo '<br> <b>Grupo : </b>'.$item->Valor;
                echo '<br>Datos del docente:';
                echo '<br><b>Profesor: </b>'.$item->NombreP.' '.$item->ApellidosP;
                echo '<br> <b>Licenciatura en: </b>'.$item->Profesion;
                echo'</div>';
                echo '  <div class="card-body">';
                echo '<a href="alumnos.php?id='.$item->AlumnoId.'" class="btn btn-success">Ver evaluaciones</a>';
                echo '</div></div>';
            }
           ?>


    </div>
    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click', e => {
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");

            document.querySelector('body').classList.toggle('body-expanded');
        });
    </script>
</body>

</html>