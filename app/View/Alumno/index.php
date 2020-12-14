<?php
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
include_once '../../Controller/LoginController.php';
?>
<!DOCTYPE html>
<html lang="en">

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
                <div class="icon"><img src="https://www.flaticon.es/svg/static/icons/svg/1651/1651104.svg" alt=""> </div>
                <div class="title">
                    <span>
                        <?php
                        echo $query;
                        ?>
                    </span>
                </div>
            </div>
            <div class="item">
                <a data-bs-toggle="collapse" href="" role="button" aria-expanded="false" aria-controls="collapseProfesores">
                    <div class="icon"><img src="https://www.flaticon.es/svg/static/icons/svg/1574/1574351.svg" alt=""> </div>
                    <div class="title"><span>Cerrar Sesión</span></div>
                </a>
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
</body>

</html>