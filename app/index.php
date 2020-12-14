

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/escuela/app/src/css/menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

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
                <a href="./view/login/login.php">
                    <div class="icon"><img src="https://www.flaticon.es/svg/static/icons/svg/1651/1651104.svg" alt=""> </div>
                    <div class="title"><span>Iniciar sesion</span></div>
                </a>
            </div>

           
        </div>
    </div>


<div class="mt-3 slide">
    <div class="container">

        <div align="center">
            <img src="https://www.flaticon.es/svg/static/icons/svg/3606/3606117.svg" width="300px" height="300px" />
        </div>
        <div align="center">
            <h2>¿Qué es EduConnect?</h2>
            <p class="text-justify">
                EduConnect es la plataforma de ayuda para la comunicación entre los docentes
                y los padres de familia en lo relacionado a la vida académica de los alumnos a nivel primaria.


            </p>
        </div>
    </div>
</div>
<div class="container-md">
    <div class="row">
        <div class="col">
            <div align="center">
                <img src="https://www.flaticon.es/svg/static/icons/svg/906/906175.svg" width="100px" height="100px" />
            </div>
            <h2 class="text-center p-2">Importancia de EduConnect</h2>
            <p class="text-justify">
                Si estás pensando en la administración académica virtual pero que
                por cuestiones de tiempo o distancia no puedes juntar a todo el mundo en un mismo espacio; todos
                pueden aprovechar la enseñanza online desde la innovación.

            </p>
        </div>
        <div class="col">
            <div align="center">
                <img src="https://www.flaticon.es/svg/static/icons/svg/3402/3402135.svg" width="100px" height="100px" />
            </div>
            <h2 class="text-center p-2">¿Cómo funciona?</h2>
            <p class="text-justify">
                Padres de familia: mediante esta plataforma podrán recibir las calificaciones de sus hijos y de la misma manera mejorar
                la interacción con los Profesores de los estudiantes
                <br />
                Profesores: Podrán subir las boletas de calificaciones de sus alumnos para que de esta manera los padres
                puedan tener mejor comunicación con ustedes sobre la vida académica de sus hijos.

            </p>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="col">
                <div align="center">
                    <img src="https://www.flaticon.es/svg/static/icons/svg/3626/3626838.svg" width="100px" height="100px" />
                </div>
                <h2 class="text-center p-2">Conexión con EduConnect</h2>
                <p class="text-justify">
                    En el caso de la educación básica lo virtual entró como un eje de la enseñanza y dependiendo del acceso a
                    la tecnología e Internet, algunas escuelas proponen muchas de sus actividades y evaluaciones de manera
                    virtual. Incluso a través de sistemas que permiten el seguimiento del aprendizaje por parte de los padres.

                    De cualquier forma, es ya bien sabido que las generaciones más jóvenes están tan familiarizadas con
                    la tecnología que ya es parte de la vida cotidiana y no tiene sentido dejar de aprovecharla en la educación.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="col">
                <div align="center">
                    <img src="https://www.flaticon.es/svg/static/icons/svg/3612/3612559.svg" width="100px" height="100px" />
                </div>
                <h2 class="text-center p-2">Interacción</h2>
                <p class="text-justify">
                    Por el hecho de ser virtual, EduConnect cuenta con diferentes características, semejanzas y diferencias que 
                    las hacen ser geniales para contenido online o virtual, de esta manera se puede decir que la novedad 
                    vino por el lado de la tecnología.
                </p>
            </div>
        </div>
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

<?php
include './src/Layout/footer.php';
?>