<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
</head>

<body>
    <style type="text/css">
        body {
            background-color: #dee9ff;
        }

        .registration-form {
            padding: 50px 0;
        }

        .registration-form form {
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 50px 70px;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        }
    </style>
    <div class="registration-form">
        <form method="POST">
            <h1 style="text-align: center;">Nuevo Usuario </h1>
            <div class="form-icon my-1" align="center">
                <img src="https://www.flaticon.es/svg/static/icons/svg/2921/2921222.svg" width="100px" height="100px">
            </div>



            <h4 style="text-align: center;">Qué tipo de usuario quieres registrar:</h3>
                <div align="center">
                    <select class="form-group" id="status" name="status" onChange="mostrar(this.value);">
                        <option value="opciones">Selecciona una opción</option>
                        <option value="alumno">Alumno</option>
                        <option value="maestro">Maestro</option>
                        <option value="tutor">Tutor</option>
                        <option value="administrador">Administrador</option>
                    </select>
                </div>
                <div class="formularios">



                    <div class="prueba">
                        <!--Formulario del Alumno-->
                        <div id="alumno" style="display: none;">
                            <form method="post">
                                <h2>Ingresa datos del Alumno</h2>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input name="nombrealumno" id="nombrealumno" class="form-control" placeholder="Ingresa nombre completo del Alumno">
                                </div>
                                <div class="form-group">
                                    <label>Grado</label>
                                    <input name="grado" id="grado" class="form-control" placeholder="Grado que está cursando">
                                </div>
                                <div class="form-group">
                                    <label>Grupo</label>
                                    <input name="grupo" id="grupo" class="form-control" placeholder="Grupo en el que está cursando">
                                </div>
                                <div class="form-group" align="center">
                                    <input type="submit" class="btn btn-success" id="crear" onclick="InsertarUsuario1();" value="Crear Cuenta">
                                    <a class="btn btn-danger" id="crear" href="../../index.php">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>




                    <!--Formulario del Maestro-->
                    <div id="maestro" style="display: none;">

                        <form method="post">
                            <h2>Ingresa datos del Maestro</h2>
                            <div class="form-group">
                                <label>Nombre (s)</label>
                                <input name="nombremaestro" id="nombremaestro" class="form-control" placeholder="ingresa nombre(s) ">
                            </div>
                            <div class="form-group">
                                <label>Apellidos</label>
                                <input name="apellidosmaestro" id="apellidosmaestro" class="form-control" placeholder="Ingresa Apellidos">
                            </div>
                            <div class="form-group">
                                <label>Pedagogía</label>
                                <input name="pedagogia" id="pedagogía" class="form-control" placeholder="Ingresa especializad de enseñanza del Maestro">
                            </div>
                            <div class="form-group" align="center">
                                <input type="submit" class="btn btn-success" id="crear" onclick="InsertarUsuario2();" value="Crear Cuenta">
                                <a class="btn btn-danger" id="crear" href="../../index.php">Cancelar</a>
                            </div>
                        </form>
                    </div>



                    <!--Formulario del Tutor-->
                    <div id="tutor" style="display: none;">

                        <form method="post">
                            <h2>Ingresa datos del Tutor</h2>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input name="nombretutor" id="nombretutor" class="form-control" placeholder="ingresa nombre completo">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input name="email" id="email" class="form-control" type="email" placeholder="ejemplo@ejemplo.com">
                            </div>
                            <div class="form-group">
                                <label>Número de teléfono</label>
                                <input name="numtelefono" id="numtelefono" class="form-control" type="tel" placeholder="ingresa el numero de 10 digitos">
                            </div>
                            <div class="form-group" align="center">
                                <input type="submit" class="btn btn-success" id="crear" onclick="InsertarUsuario3();" value="Crear Cuenta">
                                <a class="btn btn-danger" id="crear" href="../../index.php">Cancelar</a>
                            </div>
                        </form>
                    </div>



                    <!--Formulario del Administrador-->
                    <div id="administrador" style="display: none;">

                        <form method="post">
                            <h2>Ingresa datos del nuevo Administrador</h2>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input name="nombreadmin" id="nombreadmin" class="form-control" placeholder="ingresa nombre completo">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input name="email" id="email" class="form-control" type="email" placeholder="ejemplo@ejemplo.com">
                            </div>

                            <div class="form-group" align="center">
                                <input type="submit" class="btn btn-success" id="crear" onclick="InsertarUsuario3();" value="Crear Cuenta">
                                <a class="btn btn-danger" id="crear" href="../../index.php">Cancelar</a>
                            </div>
                        </form>
                    </div>

        </form>
    </div>





    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="../../src/js/validarRegistro.js"> </script>
</body>

</html>