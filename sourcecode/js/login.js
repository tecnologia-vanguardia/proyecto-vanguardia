function direcciona(opc){
    if(document.forms[0].email.value.length < 1){
        Lobibox.alert('warning',{msg:'Ingrese un correo'});
 }else if(document.forms[0].contraseña.value.length < 1){
    Lobibox.alert('warning',{msg:'Ingrese un password'});
 }
 else {
    switch (opc) {
        case 1: document.forms[0].action = "User.php";
        break;
    }
    document.forms[0].submit();
}
}