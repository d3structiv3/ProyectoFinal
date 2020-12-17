<?php
    session_start();
    include '../../Controller/sessiones.php';
    $session = new Sessions();
    if(isset($_SESSION['rol_name'])){
        $session->valsesion($_SESSION['rol'],2);
    }else{
       
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

</head>

<body>
    <main class="mt-5">
        <div class="container ">
            <div class="row">
                <div class="col-sm-6 login-section-wrapper">

                    <div class="login-wrapper my-auto ">
                        <h1 class="display-3" style="text-align:center">Entrar</h1>
                        <form action="../../Controller/LoginController.php" method="post" name="formulario">
                            <div class="form-group">
                                <label for="user">Usuario</label>
                                <input name="email" id="user" class="form-control" type="email" placeholder="ejemplo@ejemplo.com" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Ingresa tu contraseña" required>
                            </div>
                            <input name="entrar" " class=" btn btn-block login-btn btn-primary" type="submit" value="Entrar">
                                                       
                            <a href="../../index.php" class="btn btn-block login-btn btn-outline-primary">Regresar</a>

                        </form>
                            <?php
                                if(isset($_GET['msj'])){
                                    echo' <div class="alert alert-danger mt-1 text-center"><b>'.$_GET['msj'].'</b></div>';
                                }   
                            ?>
                       
                        <br />





                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block px-5 text-center">
                    <img src="https://www.flaticon.es/svg/static/icons/svg/2643/2643368.svg" width="350" height="350">
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../src/js/validar.js"> </script>
</body>

</html>