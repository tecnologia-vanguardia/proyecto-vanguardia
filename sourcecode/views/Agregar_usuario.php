<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="estilos.css">
    <title>Coco's Sportfishing Ensenada</title>
</head>
<body>
<div class="container p-3 my-4 bg-dark text-white">
<?php
$conexion = mysqli_connect("localhost", "root", "", "cocos2") or
die("Problemas con la conexión");

session_start();

        $nombre = $_POST["nombre"];
        $apaterno = $_POST["apaterno"];
        $amaterno = $_POST["amaterno"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $contraseña1 = $_POST["contraseña1"];
        $contraseña2 = $_POST["contraseña2"];

        //$error="";

        if ($contraseña1 == $contraseña2) {

            if ($conexion->connect_error) {
                die("La conexion falló: " . $conexion->connect_error);
            }

            $buscaremail = "SELECT Email FROM registro_usuario
            WHERE Email = '$email'";

            $result = $conexion->query($buscaremail);
            $count = mysqli_num_rows($result);

            if ($count >= 1) {
                echo "<br />". "Email ya registrado, ingresa otro." . "<br />";
                echo "<a href='Registro_usuario.php'>Pruebe con otro Email</a>";

            }else{
                $passwordhash=password_hash($contraseña1, PASSWORD_DEFAULT);

                $query = "INSERT INTO registro_usuario (Nombre, A_paterno, A_materno, Telefono, Email, Password) 
                VALUES ('$nombre','$apaterno','$amaterno', '$telefono', '$email', '$passwordhash')";

                if ($conexion->query($query) === TRUE){

                    $_SESSION['loggedin'] = true;
                    $_SESSION['Email'] = $email;

             
               ?>     

                   <div align="center">
                       <h1 style="color:white">Usuario Registrado <br><?php echo "".$_SESSION['Email'];?></h1><br>
                       <center>
                           <a href="inicio.php" class="btn btn-primary">Continuar</a><br>
                       </center>
                   </div>    
                <?php


                }else {
                    echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
                }
            }
        }else{
            echo "Contraseñas  no coinciden";
        }

mysqli_close($conexion);
?>        
</div>    
</body>
</html>