
function mostrar(id) {
    var formcomun = `
    <label for="email" class="form-label mt-1">Correo electronico</label>
    <input type="email" class="form-control" aria-describedby="basic-addon3" name="correo">
    <label for="clave" class="form-label mt-1">Contraseña</label>
    <input type="text" class="form-control" aria-describedby="basic-addon3" name="clave">`;
    var boton = '<input type="submit" class="mt-3 btn btn-dark" value="Enviar">';
    var tipo = document.getElementById('rol').value;
    console.log("Elemento " + tipo);

    if (tipo == "1") {
        //admin
        document.getElementById('addform').innerHTML = formcomun + boton;
    }
    if (tipo == "2") {
        let tutor = `
        <label for="name" class="form-label mt-1">Nombre completo</label>
        <input type="text" class="form-control" aria-describedby="basic-addon3" name="nombre">
        <label for="clave" class="form-label mt-1">Telefono</label>
        <input type="number" class="form-control" aria-describedby="basic-addon3" name="telefono">`;
        var boton = '<input type="submit" class="mt-3 btn btn-dark" value="Enviar">';
        document.getElementById('addform').innerHTML = formcomun + tutor + boton;
    }
    if (tipo == "3") {
        let profesor = `
        <label for="name" class="form-label mt-1">Nombre o nombres</label>
        <input type="text" class="form-control" aria-describedby="basic-addon3" name="nombre">
        <label for="apellido" class="form-label mt-1">Apellidos</label>
        <input type="text" class="form-control" aria-describedby="basic-addon3" name="apellidos">
        <label for="profesion" class="form-label mt-1">Liceciatura o ingenieria en:</label>
        <input type="text" class="form-control" aria-describedby="basic-addon3" name="profesion">`;
        document.getElementById('addform').innerHTML = formcomun + profesor + boton;
    }
    if (tipo == "4") {
        console.log("alumno");
        let alumno=`<a data-bs-toggle="collapse" href="#alumnoform" role="button" aria-expanded="false" aria-controls="collapseProfesores">Agregar alumno</a>`;
        document.getElementById('addform').innerHTML = alumno;
    }
}