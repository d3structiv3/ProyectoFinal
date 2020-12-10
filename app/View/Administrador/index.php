<?php
include_once '../../../vendor/autoload.php';
include_once '../../database/database.php';
include '../../src/Layout/menu.php';
?>
<style type="text/css">
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
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class=" col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Concentrado:</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="collapse" href="#profesores" role="button" aria-expanded="false" aria-controls="collapseProfesores">
                            <span class="material-icons">
                                school
                            </span>
                            Profesores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="collapse" href="#tutor" role="button" aria-expanded="false" aria-controls="collapsetutor">
                            <span class="material-icons">
                                family_restroom
                            </span>
                            Tutores
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="material-icons">
                                face
                            </span>
                            Alumnos
                        </a>
                    </li>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Formularios</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="collapse" href="#addusr" role="button" aria-expanded="false" aria-controls="collapseaddusr">
                            <span class="p-0 material-icons">
                                person_add
                            </span>
                            Agregar usuario
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="collapse" href="#addgrupo" role="button" aria-expanded="false" aria-controls="collapseaddgrupo">
                            <span class="material-icons">
                                supervised_user_circle
                            </span>
                            Aulas
                        </a>
                    </li>

                </ul>
            </div>
        </nav>

        <!--Entradas del dashboard-->
        <main role="main" class="mt-4 ml-2">
            <!--Lectura de datos profesores-->
            <div class="container">
                <!--Contenido de profesores-->
                <div class="collapse" id="profesores">
                    <h4 class="h4">Profesores</h4>
                    <?php
                    $profesores = $database::table('profesor')->get();
                    ?>
                    <table class="table table-striped table-sm">
                        <thead class="table-dark">
                            <tr>
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
                                echo '<td>' . $item->Nombre . '</td>';
                                echo '<td>' . $item->Apellidos . '</td>';
                                echo '<td>' . $item->Profesion . '</td>';
                                echo '<td><a class=""  href="detalle.php?id=' . $item->ProfesorId . '" role="button">Detalle</a></td>';
                                echo "</tr>";
                            } ?>

                        </tbody>
                    </table>
                </div>
                <!--Contenido de tutores-->
                <div class="collapse" id="tutor">
                    <h4 class="h4">Tutores</h4>
                    <?php
                    $tutor = $database::table('tutor')->get();
                    ?>
                    <table class="table table-striped table-sm">
                        <thead class="table-dark">
                            <tr>
                                <th>Nombre completo</th>
                                <th>Telefono</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($tutor as $item) {
                                echo "<tr>";
                                echo '<td>' . $item->Nombre . '</td>';
                                echo '<td>' . $item->Telefono . '</td>';
                                echo '<td><a class=""  href="detalle?id=' . $item->TutorId . '" role="button">Detalle</a></td>';
                                echo "</tr>";
                            } ?>

                        </tbody>
                    </table>
                </div>

                <!--Contenido de formularios-->
                <div align="center">
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
                </div>

                <div align="center">
                    <div class="collapse justify-content-center align-items-center" id="addgrupo">
                        <h4 class="h4 ">Nuevo grupo</h4>
                        <form action="../../Controller/Admin/add.php" class="" method="POST">
                            <input type="hidden" name="operacion" value="addgrupo">           
                            <label for="rol" class="form-label">Selecciona el grado del nuevo grupo</label>
                            <div class="input-group mb-3">
                                <select name="grado" id="grado" class="form-control" >
                                    <?php
                                    $items = $database::table('grados')->get();
                                    foreach ($items as $item) {
                                        echo '<option value="' . $item->GradoId . '">' . $item->Valor. '</option>';
                                    } ?>
                                </select>
                            </div>
                            <label for="rol" class="form-label">Selecciona un profesor</label>
                            <div class="input-group mb-3">
                                <select name="profesor" id="profesor" class="form-control" >
                                    <?php
                                    $items = $database::table('profesor')->get();
                                    foreach ($items as $item) {
                                        echo '<option value="' . $item->ProfesorId . '">'.$item->Apellidos.' '. $item->Nombre.' Prof.'.$item->Profesion.'</option>';
                                    } ?>
                                </select>
                            </div>
                            <div id="_addgrupo">
                                <label for="valor" class="form-label mt-1">Nombre del grupo</label>
                                <input type="text" class="form-control" aria-describedby="basic-addon3" name="valor">
                                <input type="submit" class="mt-3 btn btn-dark" value="Enviar">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </main>

        <script src="../../src/js/validarRegistro.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>