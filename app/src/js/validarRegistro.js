function mostrar(id) {
    if (id == "alumno") {
        $("#alumno").show();
        $("#maestro").hide();
        $("#tutor").hide();
        $("#administrador").hide();
    }

    if (id == "maestro") {
        $("#alumno").hide();
        $("#maestro").show();
        $("#tutor").hide();
        $("#administrador").hide();
    }

    if (id == "tutor") {
        $("#alumno").hide();
        $("#maestro").hide();
        $("#tutor").show();
        $("#administrador").hide();
    }

    if (id == "administrador") {
        $("#alumno").hide();
        $("#maestro").hide();
        $("#tutor").hide();
        $("#administrador").show();
    }

    if (id == "opciones") {
        $("#alumno").hide();
        $("#maestro").hide();
        $("#tutor").hide();
        $("#administrador").hide();
    }
}