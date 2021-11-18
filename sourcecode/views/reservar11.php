<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3772c41c90.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->

    <link rel="stylesheet" href="estilos.css">
    <title>Coco's Sportfishing Ensenada</title>
</head>
<?php
     $conexion = mysqli_connect("localhost", "root", "", "cocos2") or
     die("Problemas con la conexión");

     $email = $_SESSION['Email'];
                                                                    
     $buscarusuario = "SELECT * FROM registro_usuario WHERE Email='$email'";
     $result = $conexion->query($buscarusuario);
     $row = $result->fetch_array(MYSQLI_ASSOC);
                                                                   
                                                                    
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
                <form class="col-12" action="agregarReservacion.php" method="POST">
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
                        <div class="form-inline has-success" align="left">
                            <label class="text-dark" for="Fecha"><b>Fecha a Reservar : </b></label>&nbsp;
                            <input type="date" class="form-control col-7" name="Fecha" id="Fecha" placeholder="Ingresa fecha" required>&nbsp;
                            <i class="far fa-calendar-alt" style="font-size:25px;"></i>
                            <div class="valid-feedback">Valido.</div>
                            <div class="invalid-feedback">LLena el campo.</div>
                        </div>
                    </div>
                    <div class="form-group" align="left">
                        <label class="text-dark" for="NombreEmbarcacion"><b>Seleccione la Embarcacion :</b></label>
                        <select name="NombreEmbarcacion" class="custom-select">
                            <option value="1">EL COCO LOCO</option>
                            <option value="2">LITTLE HORSE</option>
                            <option value="3">LIBERTAD II</option>
                            <option value="4">ZEUZ</option>
                            <option value="5">CRAZY TUNA</option>
                            <option value="6">FRESH ONE!</option>
                        </select>
                    </div>

                    <div class="form-group" align="left">
                        <div class="form-inline has-success" align="left">
                            <label class="time" for="Hora_salida"><b>Hora de salida : &nbsp;&nbsp;&nbsp;&nbsp;</b></label>&nbsp;
                            <input type="time" class="form-control col-7 input-lg" name="Hora_salida" id="Hora_salida" placeholder="Ingresa hora" required>&nbsp;
                            <i class="far fa-clock" style="font-size:25px;"></i>
                            <div class="valid-feedback">Valido.</div>
                            <div class="invalid-feedback">LLena el campo.</div>
                        </div>
                    </div>
                    <div class="form-group" align="left">
                        <div class="form-inline has-success" align="left">
                            <label class="time" for="Hora_llegada"><b>Hora de llegada : &nbsp;</b></label>&nbsp;
                            <input type="time" class="form-control col-7 input-lg" name="Hora_llegada" id="Hora_llegada" placeholder="Ingresa hora" required>&nbsp;
                            <i class="far fa-clock" style="font-size:25px;"></i>
                            <div class="valid-feedback">Valido.</div>
                            <div class="invalid-feedback">LLena el campo.</div>
                        </div>
                    </div>
                    <div class="form-group" align="left">
                        <label><b>Metodo de pago :</b></label>
                        <div id="paypal-button-container"></div>
                    </div>


                    <!------------------------>

                    <script src="https://www.paypal.com/sdk/js?client-id=AZUr0mH9W3-MZhHC9zYa6CAOrRwKEqeFD-ON7X1lpzz9JLWngoVe1C9bKpNfiFJwK_2ASjz_blPXr-Ka">
                        // Required. Replace SB_CLIENT_ID with your sandbox client ID.

                    </script>


                    <script>
                        paypal.Buttons({
                            createOrder: function(data, actions) {
                                // This function sets up the details of the transaction, including the amount and line item details.
                                return actions.order.create({
                                    purchase_units: [{
                                        amount: {
                                            value: '0.01'
                                        }
                                    }]
                                });
                            },
                            onApprove: function(data, actions) {
                                // This function captures the funds from the transaction.
                                return actions.order.capture().then(function(details) {
                                    // This function shows a transaction success message to your buyer.
                                    alert('Transaction completed by ' + details.payer.name.given_name);
                                });
                            }
                        }).render('#paypal-button-container');
                        //This function displays Smart Payment Buttons on your web page.

                    </script>
                    <div class="form-group col-6">
                        <input class="form-control btn btn-success" type="submit" name="registrar" value="Registrar">
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
