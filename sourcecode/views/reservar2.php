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
    $costo=0;  
                                if($_REQUEST['NombreEmbarcacion'] == 1){
                                          $costo=800;
                                }
                                else if($_REQUEST['NombreEmbarcacion'] == 2){ 
                                 $costo=450;
                                }else if($_REQUEST['NombreEmbarcacion'] == 3){
                                         $costo=500; 
                                }else if($_REQUEST['NombreEmbarcacion'] == 4){
                                         $costo=380; 
                                }else if($_REQUEST['NombreEmbarcacion'] == 5){
                                     $costo=270;
                                }else{
                                    $costo=270;
                                }
                                          
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
            <h1 align="center">Proceso para Pagar Reservación</h1>
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
                     <div class="form-group" align="left">
                        <label class="text-dark" for="Telefono"><b>Tipo de viaje :</b></label>
                        <input type="text" class="form-control" name="Viaje" required readonly value="<?php if($_POST['TipoViaje'] == 1)
                        echo "Pesca deportiva";
                        else if($_POST['TipoViaje'] == 2)
                        echo "Avistamiento de ballenas";
                        else if($_POST['TipoViaje'] == 3)
                        echo "Party Boat";
                        else if($_POST['TipoViaje'] == 4)
                        echo "Surfing";?>">
                    </div>
                    <div class="form-group" align="left">
                        <label class="text-dark" for="Telefono"><b>Embarcacion :</b></label>
                        <input type="text" class="form-control" name="Embarcacion" required readonly value="<?php $_REQUEST['NombreEmbarcacion']; if($_POST['NombreEmbarcacion'] == 1)
                        echo "EL COCO LOCO";
                        else if($_POST['NombreEmbarcacion'] == 2)
                        echo "LITTLE HORSE";
                        else if($_POST['NombreEmbarcacion'] == 3)
                        echo "LIBERTAD II";
                        else if($_POST['NombreEmbarcacion'] == 4)
                        echo "ZEUZ";
                        else if($_POST['NombreEmbarcacion'] == 5)
                        echo "CRAZY TUNA";
                        else if($_POST['NombreEmbarcacion'] == 6)
                        echo "FRESH ONE!";   ?>">
                    </div>
                    <div class="form-group" align="left">
                        <div class="form-inline has-success" align="left">
                            <label class="text-dark" for="Fecha"><b>Fecha a Reservar :&nbsp;&nbsp; </b></label>
                            <input type="date" class="form-control col-8" name="Fecha" id="Fecha" placeholder="Ingresa fecha" required >
                            
                            <div class="valid-feedback">Valido.</div>
                            <div class="invalid-feedback">LLena el campo.</div>
                        </div>
                    </div>
                    <div class="form-group" align="left">
                        <div class="form-inline has-success" align="left">
                            <label class="time" for="Hora_salida"><b>Hora de salida : &nbsp;&nbsp;&nbsp;&nbsp;</b></label>&nbsp;
                            <input type="time" class="form-control col-7 input-lg" name="Hora_salida" id="Hora_salida" placeholder="Ingresa hora" required readonly value = 
                                   "<?php  
                                $horaSalida=0;
                                if($_REQUEST['TipoViaje'] == 1){
                                        $horaSalida="07:00";
                                        echo $horaSalida; }
                                else if($_REQUEST['TipoViaje'] == 2) 
                                echo "12:00";
                                else if($_REQUEST['TipoViaje'] == 3)
                                        echo "12:00"; 
                                else if($_REQUEST['TipoViaje'] == 4)
                                        echo "08:00"; 
                                else
                                        echo "ERROR"; ?>"> &nbsp;
                            
                            <div class="valid-feedback">Valido.</div>
                            <div class="invalid-feedback">LLena el campo.</div>
                        </div>
                    </div>
                    <div class="form-group" align="left">
                        <div class="form-inline has-success" align="left">
                            <label class="time" for="Hora_llegada"><b>Hora de llegada : &nbsp;</b></label>&nbsp;
                            <input type="time" class="form-control col-7 input-lg" name="Hora_llegada" id="Hora_llegada" placeholder="Ingresa hora" required readonly value = 
                                   "<?php  if($_REQUEST['TipoViaje'] == 1)
                                        echo $horaLlegada="15:00"; 
                                else if($_REQUEST['TipoViaje'] == 2) 
                                echo "16:00";
                                else if($_REQUEST['TipoViaje'] == 3)
                                        echo "16:00"; 
                                else if($_REQUEST['TipoViaje'] == 4)
                                        echo "16:00"; 
                                else
                                        echo "ERROR"; ?>">&nbsp;
                            
                            <div class="valid-feedback">Valido.</div>
                            <div class="invalid-feedback">LLena el campo.</div>
                        </div>
                    </div>
                    <div class="form-group" align="left">
                        <label class="text-dark" for="Telefono"><b>Costo:</b></label>
                        <input type="Telefono" class="form-control" id="Costo" name="Costo" required readonly value=
                               "<?php  if($_REQUEST['NombreEmbarcacion'] == 1){
                                          echo "800";
                                        }
                                else if($_REQUEST['NombreEmbarcacion'] == 2){ 
                                echo "450";
                                }else if($_REQUEST['NombreEmbarcacion'] == 3){
                                        echo "$500"; 
                                }else if($_REQUEST['NombreEmbarcacion'] == 4){
                                        echo "$380"; 
                                }else if($_REQUEST['NombreEmbarcacion'] == 5){
                                    echo "$270";
                                }else{
                                     echo "$270";

                                } 
                        
                                         ?>"> 
                    </div>

                    <!------------------------>
 <script
    src="https://www.paypal.com/sdk/js?client-id=AZUr0mH9W3-MZhHC9zYa6CAOrRwKEqeFD-ON7X1lpzz9JLWngoVe1C9bKpNfiFJwK_2ASjz_blPXr-Ka"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>

  <div id="paypal-button-container"></div>

  
                    <script>
                        var x = '<?php echo $costo; ?>';
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
        
      return actions.order.create({
        
          purchase_units: [{
          amount: {
            value: x
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
                        <input class="form-control btn btn-success" type="submit" name="registrar" value="Reservar">
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

