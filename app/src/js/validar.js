function ValidarVacios(){
    var validar = document.formulario;

    if(validar.user.value == "" && validar.password.value == ""){
        //alert("Debes llenar todos los datos");
        document.getElementById("alerta").innerHTML='<div class="alert alert-danger" role="alert" >Debes de llenar todos los campos <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
        
        return false;
    }
    validar.submit;

}

