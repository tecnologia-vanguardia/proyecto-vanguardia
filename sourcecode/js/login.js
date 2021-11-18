function direcciona(opc){
    if(document.forms[0].email.value.length < 1){
     alert("Proporcione Correo");
 }else if(document.forms[0].contraseña.value.length < 1){
     alert("Proporcione Contraseña");
 }
 else {
    switch (opc) {
        case 1: document.forms[0].action = "User.php";
        break;
    }
    document.forms[0].submit();
}
}