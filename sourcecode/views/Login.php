<!doctype html>
<html lang="en">

<head>
<?php include("header.php"); ?>
</head>

<body>
    <!--CUERPO -->
    <div class="modal-dialog " align="center">
        <div class="col-sm-8 " >
            <div class="modal-content bg-dark border-success">
                <div class="col-12">
                    <br><img src="../assets/images/almarLogo.png" style="width:90px;">
                </div>
                <!--------------------><br>
                <form class="col-12 " action="Login.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Correo@ejemplo.com" name="email" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Contraseña" name="contraseña" required>
                    </div>
                    <!-------------------->
                    <div class="form-group my-2" >
                        <input class="form-control btn btn-primary" type="button" name="Iniciar" onclick="direcciona(1)" value="Iniciar sesi&oacute;n">
                    </div>
                     <div class="form-group">
                        <input class="form-control btn btn-success" type="button" name="registrar" value="Registrar" onClick="location.href='Registro_usuario.html'">
                    </div> 
                </form>
            </div>
        </div>
    </div>
    <script src="../js/login.js"></script> 
</body>

</html>

