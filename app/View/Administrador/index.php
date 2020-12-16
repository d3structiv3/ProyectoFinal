<?php
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
session_start();

if($_SESSION['rol_name']!='Admin'){
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

</head>

<body class="body-expanded">
    <!--Menu-->
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
                <a data-bs-toggle="collapse" href="#profesores" role="button" aria-expanded="false" aria-controls="collapseProfesores">
                    <div class="icon"><img src="https://www.flaticon.es/svg/static/icons/svg/2436/2436654.svg" alt=""> </div>
                    <div class="title"><span>Profesores</span></div>
                </a>
            </div>
            <div class="item">
                <a data-bs-toggle="collapse" href="#grados" role="button" aria-expanded="false" aria-controls="collapseProfesores">
                    <div class="icon"><img src="https://www.flaticon.com/premium-icon/icons/svg/1940/1940598.svg" alt=""> </div>
                    <div class="title"><span>Grados</span></div>
                </a>
            </div>
            <div class="item">
                <a data-bs-toggle="collapse" href="#asignaturas" role="button" aria-expanded="false" aria-controls="collapseProfesores">
                    <div class="icon"><img src="https://www.flaticon.es/svg/static/icons/svg/3301/3301632.svg" alt=""> </div>
                    <div class="title"><span>Asignaturas</span></div>
                </a>
            </div>
            <div id="profile">
                <div id="name"><span>Formularios</span></div>
            </div>
            <div class="item">
                <a data-bs-toggle="collapse" href="#addusr" role="button" aria-expanded="false" aria-controls="collapseProfesores">
                    <div class="icon"><img src="https://www.flaticon.com/svg/static/icons/svg/3893/3893246.svg" alt=""> </div>
                    <div class="title"><span>Nuevo usuario</span></div>
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
        <h4 class="text-center mt-3">Dashboar administrador</h4>

        <!--Contenido profesores-->
        <div class="collapse" id="profesores">
            <h4 class="h4">Profesores</h4>
            <?php
            $profesores = $database::table('profesor')->get();
            ?>
            <table class="table table-striped table-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Profesion</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($profesores as $item) {
                        echo "<tr>";
                        echo '<td>' . $item->ProfesorId . '</td>';
                        echo '<td>' . $item->Nombre . '</td>';
                        echo '<td>' . $item->Apellidos . '</td>';
                        echo '<td>' . $item->Profesion . '</td>';
                        echo '<td><a class=""  href="detalle.php?id=' . $item->ProfesorId . '" role="button">Detalle</a></td>';
                        echo "</tr>";
                    } ?>

                </tbody>
            </table>
        </div>
        <!--Contenido grados-->
        <div class="collapse" id="grados">
            <h4 class="h4">Grados</h4>
            <div class="d-flex">
                <?php
                $grupos = $database::table('grados')->get();
                foreach ($grupos as $item) {
                    echo '<div class="card ml-3" style="width: 15rem;">';
                    echo '<img src="https://www.flaticon.com/svg/static/icons/svg/3492/3492080.svg" class="card-img-top" alt="cardimage" width="220" height="100">';
                    echo '<div class="card-body">';

                    echo '<h5 class="card-title"><b>Grado: </b>' . $item->GradoId . '</h5>';
                    echo '<a href="grupo.php?id=' . $item->GradoId . '" class="btn btn-primary">Ver detalles...</a>';
                    echo '</div></div>';
                }
                ?>
            </div>

        </div>
        <!--Asignaturas -->
        <div class="collapse justify-content-center align-items-center" id="asignaturas">
            <h4 class="h4 ">Asignaturas</h4>
            <?php
            $asignaturas = $database::table('asignatura')->get();
            ?>
            <table class="table table-striped table-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($asignaturas as $item) {
                        echo "<tr>";
                        echo '<td>' . $item->AsignaturaId . '</td>';
                        echo '<td>' . $item->Nombre . '</td>';
                        echo "</tr>";
                    } ?>

                </tbody>
            </table>
        </div>

        <!--Formularios-->
        <div class="collapse justify-content-center align-items-center" id="addusr">
            <h4 class="h4 ">Nuevo usuario</h4>
            <form action="../../Controller/Admin/nuevo.php" class="" method="POST">

                <label for="rol" class="form-label">Que tipo de usuario quieres agregar</label>
                <div class="input-group mb-3">
                    <select name="rol" id="rol" class="form-control" onChange="mostrar(this.value);">
                        <?php
                        $items = $database::table('roles')->get();
                        foreach ($items as $item) {
                            echo '<option value="' . $item->RolId . '">' . $item->Nombre . '</option>';
                        } ?>
                    </select>
                </div>
                <div id="addform">

                </div>

            </form>
        </div>
        <!--Nuevo alumno-->
        <div class="collapse" id="alumnoform">
            <h4 class="mt-2 mb-2">Nuevo Alumno</h4>
            <form action="../../Controller/Admin/alumno.php" method="post">
                <input type="hidden" name="rol" value="4">
                <label for="name" class="form-label mt-1">Nombre o nombres</label>
                <input type="text" class="form-control" aria-describedby="basic-addon3" name="nombre">
                <label for="name" class="form-label mt-1">Apellidos</label>
                <input type="text" class="form-control" aria-describedby="basic-addon3" name="apellidos">
                <label for="rol" class="form-label">Selecciona un grado</label>
                <div class="input-group mb-3">
                    <select name="grado" id="grado" class="form-control">
                        <?php
                        $items = $database::table('grados')->get();
                        foreach ($items as $item) {
                            echo '<option value="' . $item->GradoId . '">' . $item->Valor . '</option>';
                        } ?>
                    </select>
                </div>
                <label for="rol" class="form-label">Selecciona un grupo</label>
                <div class="input-group mb-3" id="grupo">

                </div>
                <label for="name" class="form-label mt-1">Identificador del tutor</label>
                <input type="text" class="form-control" aria-describedby="basic-addon3" name="idtutor">
                <div class="alert alert-danger mt-2">
                    <b>¿No conoces el identificador? </b><a href="tutores.php" target="_blank">Click a qui para saber</a>.
                </div>
                <input type="submit" class="mt-3 btn btn-dark" value="Enviar">
            </form>
        </div>
    </div>




    <script type="text/javascript">
        $(document).ready(function() {
            $('#grado').val(1);
            recargarLista();

            $('#grado').change(function() {
                recargarLista();
            });
        })
    </script>
    <script type="text/javascript">
        function recargarLista() {
            $.ajax({
                type: "POST",
                url: "../../src/API/getGrupos.php",
                data: "idgrado=" + $('#grado').val(),
                success: function(r) {
                    $('#grupo').html(r);
                }
            });
        }
    </script>
    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click', e => {
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");

            document.querySelector('body').classList.toggle('body-expanded');
        });
    </script>
    <script src="../../src/js/validarRegistro.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>