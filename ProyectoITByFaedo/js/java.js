function validarEmail(cadena) {
    if (cadena.indexOf("@") !== -1) {
        return true;
    } else {
        alert("Falta Llenar Email");
		return false;
    }
}

function validarPass(cadena) {
    if (cadena.length >= 8) {
        return true;
    } else {
       alert("Falta llenar y/o no cumple 8 caracteres");
		return false;
    }
}

function validaForm() {
    var email = document.getElementById("correo").value;
    var pass = document.getElementById("clave").value;


    if (!validarEmail(email(email))){
        email.focus();
        return false;
    } else if(!validarPass(clave)){
        clave.focus();
        return false;
    }  else {
        return true;
    }
}