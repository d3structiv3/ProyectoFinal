<?php
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
session_start();

if ($_SESSION['rol_name'] != 'Profesor') {
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
                <a data-bs-toggle="collapse" href="#grupos" role="button" aria-expanded="false" aria-controls="collapseGrupos">
                    <div class="icon"><img src="https://www.flaticon.com/premium-icon/icons/svg/1940/1940598.svg" alt=""> </div>
                    <div class="title"><span>Mis grupos</span></div>
                </a>
            </div>
            <div class="item">
                <a data-bs-toggle="collapse" href="#asignaturas" role="button" aria-expanded="false" aria-controls="collapseGrupos">
                    <div class="icon"><img src="https://www.flaticon.es/svg/static/icons/svg/3301/3301632.svg" alt=""> </div>
                    <div class="title"><span>Asignaturas</span></div>
                </a>
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
        <h4 class="p-3 text-center">Dashboard profesor</h4>

        <div class="collapse" id="grupos">
            <?php
            $profesor = $database::table('profesor')->where('UsuarioId', $_SESSION['user_id'])->first();
            $query = $database::table('grupos')->where('ProfesorId', $profesor->ProfesorId)->get();
            ?>
            <h5>Grupos</h5>
            <div class="d-flex">
                <?php
                foreach ($query as $item) {
                    echo '<div class="card ml-2" style="width: 15rem;">';
                    echo ' <div class="card-header">';
                    echo '<b>Grado: </b>' . $item->GradoId.'<br>';
                    echo '<b>Grupo: </b>' . $item->Valor;
                    echo '</div>';
                    echo '  <div class="card-body">';
                    echo '<a href="alumnos.php?id=' . $item->GrupoId . '" class="btn btn-primary">Ver alumnos</a>';
                    echo '</div></div>';
                }
                ?>
            </div>
        </div>

        <div class="collapse" id="asignaturas">
            <h5 class="">Asignaturas segun los grupos asignados</h5>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>