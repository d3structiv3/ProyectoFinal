<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <!--Menu general del proyecto-->
    <nav class="navbar navbar-light bg-light">
        <a class="ml-5 navbar-brand" href="#" style="font-size:25px">
            <img src="https://www.flaticon.es/premium-icon/icons/svg/3197/3197877.svg" width="35" height="35" class="d-inline-block align-top" alt="">
            EduConnect
        </a>
        <form class="form-inline">
            <?php


            session_start();
            if (isset($_SESSION['tipo'])) {
                if (isset($_SESSION['nombre'])) {
                    switch ($_SESSION['tipo']) {
                        case "Alumno":
                            echo '<a class="text-black nav-link my-2 my-sm-0" type="submit">' . $_SESSION['nombre'] . '</a>';
                            echo '<a class="text-black nav-link my-2 my-sm-0" type="submit">Salir</a>';
                            break;
                        case "Profesor":
                            echo '<a class="text-black nav-link my-2 my-sm-0" type="submit">Grupos</a>';
                            echo '<a class="text-black nav-link my-2 my-sm-0" type="submit">' . $_SESSION['nombre'] . '</a>';
                            echo '<a class="text-black nav-link my-2 my-sm-0" type="submit">Salir</a>';
                            break;
                        case "Tutor":
                            echo '<a class="text-black nav-link my-2 my-sm-0" type="submit">' . $_SESSION['nombre'] . '</a>';
                            echo '<a class="text-black nav-link my-2 my-sm-0" type="submit">Salir</a>';
                            break;
                    }
                }
            } else {
                echo '<a class="text-black nav-link my-2 my-sm-0" type="submit" href="./view/login/registro.php">Registrarme</a>';
                echo '<a class="text-black nav-link my-2 my-sm-0" type="submit" href="./view/login/login.php">Entrar</a>';
            }
            ?>
        </form>
    </nav>