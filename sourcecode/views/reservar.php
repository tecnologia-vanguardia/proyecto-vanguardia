    <?php
    session_start();

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>

    <!doctype html>
    <html lang="en">

    <head>
    <?php include("header.php"); ?>
    </head>
    <?php
        $costo = 50; 
        $conexion = mysqli_connect("localhost", "root", "", "cocos2") or
        die("Problemas con la conexión");

        $email = $_SESSION['Email'];
                                                                        
        $buscarusuario = "SELECT * FROM registro_usuario WHERE Email='$email'";
        $result = $conexion->query($buscarusuario);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $sacarprecio= "SELECT Precio FROM Embarcaciones";
        $resultado = $conexion->query($sacarprecio);
        $arrPrecio= $resultado->fetch_array(MYSQLI_ASSOC);
                                                                        
    ?>

    <body>
        <div class="container-fluid  p-2 ">
            <div class="container-fluid  bg-success text-success"><br></div>
            <div class="container-fluid p-3 my-1 bg-info text-white" align="justify">
                <br>
                <h1 align="center">Proceso para Realizar Reservación</h1>
                <p></p>
            </div>
        </div>

        <!--CUERPO -->
        <div class="modal-dialog" align="center">
            <div class="col-sm-12">
                <div class="modal-content  border-primary">
                    <div class="col-12">
                        <br><Img src="images/212.png" style="width: 110px"></Img>
                    </div>

                    <!----------------------><br>
                    <form class="col-12" action="reservar2.php" method="POST">
                        <div class="form-group " align="left">
                            <label class="text-dark" for="Nombre"><b>Nombre(s) :</b></label>
                            <input type="Nombre" class="form-control" id="Nombre" placeholder="Ingrese su nombre" name="Nombre" required read value="<?php echo $Nombre=$row['Nombre'];?>">
                        </div>
                        <div class="form-group" align="left">
                            <label class="text-dark" for="Apellidop"><b>Apellido Paterno :</b></label>
                            <input type="Apellidop" class="form-control" id="Apellidop" placeholder="Ingrese Apellido Paterno" name="Apellidop" required read value="<?php echo $A_paterno=$row['A_paterno'];?>">
                        </div>
                        <div class="form-group" align="left">
                            <label class="text-dark" for="Apellidom"><b>Apellido Materno :</b></label>
                            <input type="Apellidom" class="form-control" id="Apellidom" placeholder="Ingrese Apellido Materno" name="Apellidom" required read value="<?php echo $A_materno=$row['A_materno'];?>">
                        </div>
                        <div class="form-group" align="left">
                            <label class="text-dark" for="Correo"><b>Correo Electrónico :</b></label>
                            <input type="Correo" class="form-control" id="Correo" placeholder="Ingrese su correo" name="Correo" required read value="<?php echo $email;?>">
                        </div>
                        <div class="form-group" align="left">
                            <label class="text-dark" for="Telefono"><b>Teléfono :</b></label>
                            <input type="Telefono" class="form-control" id="Telefono" placeholder="Ingrese su telefono" name="Telefono" required read value="<?php echo $Telefono=$row['Telefono'];?>">
                        </div>
                        <div class="form-group" align="left">
                            <label class="text-dark" for="TipoViaje"><b>Tipos de Viaje :</b></label>
                            <select name="TipoViaje" class="custom-select">
                                <option value="1">Pesca Deportiva</option>
                                <option value="2">Avistamiento de Ballenas</option>
                                <option value="3">Party Boat</option>
                                <option value="4">Surfing</option>
                            </select>
                        </div>
                    
                        <div class="form-group" align="left">
                            <label class="text-dark" for="NombreEmbarcacion"><b>Seleccione la Embarcacion :</b></label>
                            <select id= 'opciones' name="NombreEmbarcacion" class="custom-select">
                                <option value="1">EL COCO LOCO</option>
                                <option value="2">LITTLE HORSE</option>
                                <option value="3">LIBERTAD II</option>
                                <option value="4">ZEUZ</option>
                                <option value="5">CRAZY TUNA</option>
                                <option value="6">FRESH ONE!</option>
                            </select>
                        </div>
                        
                        
                        
                        
                        <script type="text/javascript">

            // funcion que se ejecuta cada vez que se selecciona una opción

            function cambioOpciones()

            {

                document.getElementById('showId').value=document.getElementById('opciones').value;

            }

        </script>

    

        

    

        <!-- input donde se mostrara el id de la opción -->

        
                        

                        <!------------------------>
    
                        <div class="form-group col-6">
                            <input class="form-control btn btn-success" type="submit" name="registrar" value="Continuar">
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <div class="container-fluid  bg-dark"><br></div>
        <div class="container-fluid  bg-success "><br></div>


    </body>

    </html>
    <?php }else{
        echo "Inicia Sesion para acceder a este contenido.<br>";
        echo "<br><a href='login.php'>Login</a>";
        echo "<br><br><a href='Registro_usuario.php'>Registrarme</a>";
        header('Location: http://localhost/cocos_sportfishing/login.php');

        exit;
    }?>
