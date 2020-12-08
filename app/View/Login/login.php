<!DOCTYPE html>
<html lang="en">

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
    <main>
        <div class="container ">
            <div class="row">
                <div class="col-sm-6 login-section-wrapper">

                    <div class="login-wrapper my-auto ">
                        <h1 class="display-3" style="text-align:center">Entrar</h1>
                        <form action="../../../ProyectoFinal/Controller/LoginController.php" method="post" name="formulario">
                            <div class="form-group">
                                <label for="user">Usuario</label>
                                <input name="user" id="user" class="form-control" placeholder="Ingresa tu usuario">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Ingresa tu contraseña">
                            </div>
                            <input name="entrar" onclick="ValidarVacios();" class="btn btn-block login-btn btn-primary" type="button" value="Entrar">
                        </form>
                        <br />
                        <div  id="alerta">
                        
                        </div>

                        <p class="login-wrapper-footer-text">No tienes una cuenta? <a href="../../view/login/registro.php" class="btn btn-outline-info">Registrate aquí</a>
                            <a href="../../index.php" class="btn btn-outline-danger">Regresar</a></p>

                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block px-5">
                    <img src="https://www.flaticon.es/svg/static/icons/svg/2643/2643368.svg">
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../../src/js/validar.js"> </script>
</body>

</html>