<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
    <?php include("fragmentos/header.php"); ?>
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="inicio.php"> <img src="../assets/images/212.png" alt="logo1" style="width:90px;">Coco's Sportfishing Ensenada</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tipos de Viaje
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="tipo-pesca-depo.php">Pesca Deportiva</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="tipo-avistamiento-ballena.php">Avistamiento de Ballenas</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="tipo-surfing.php">Surfing</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="tipo-party.php">Party Boat</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="flota-embarcaciones.php">Flota de Embarcaciones</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Galeria
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="galeria-pesca.php">Pesca Deportiva</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="galeria-avistamiento.php">Avistamiento de Ballenas</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="galeria-surfing.php">Surfing</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="galeria-paseos.php">Paseos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservar.php">Reservar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
                <li class="nav-item">
                    <?php
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
                    ?>
                        <a class="nav-link" href="Logout.php">Logout</a>
                        <?php }else{ ?>
                        <a class="nav-link" href="Login.php">Login</a>
                        <?php } ?>
                </li>

            </ul>

            <!-- Redes Sociales -->
            <a href="https://www.facebook.com/CocosSportfishing/" target="_blank"><i class="fa fa-facebook-square" style="font-size:26px;color:white">&nbsp;</i></a>
            <a href="https://www.youtube.com/channel/UCuk1Tnnf0NUOfYoGCoPsmNw/videos?view=0&sort=dd&shelf_id=0&view_as=subscriber" target="_blank"><i class="fa fa-youtube-play" style="font-size:28px;color:white">&nbsp;</i></a>
            <a href="https://www.instagram.com/cocos_sportfishing/" target="_blank"><i class="fa fa-instagram" style="font-size:28px;color:white"></i></a>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
        </ul>

        <!-- The slideshow -->

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/images/stay.jpg" alt="stay" width="1290" style="height: 75vh">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/ense.jpg" alt="s11" width="1290" style="height: 75vh">
                <div class="carousel-caption">
                    <h1>Bienvenidos</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/images/s3.jpg" alt="s3" width="1290" style="height: 75vh">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/s4.jpg" alt="s4" width="1290" style="height: 75vh">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- about us -->
    <div class="container-fluid  p-2 ">
        <div class="container-fluid  bg-success text-success"><br></div>
        <div class="container-fluid p-3 my-1 bg-info text-white" align="center">
            <br>
            <h1>¿Quienes somos?</h1>
            <p>Somos una compañia dedicada a realizar diferentes actividades reacreativas dentro del puerto de Ensenada Baja California, como la pesca deportiva, avistamiento de ballenas, sorfeo, por mencionar algunas.</p>
        </div>
        <div class="container-fluid p-1 my-2  bg-dark text-white" align="center">
            <br>
            <h1>Misión</h1>
            <p>Crear una experiencia única e inolvidable a nuestros pasajeros sin importar que sean novatos o con experiencia. Contamos con personal altamente calificado, embarcaciones equipadas con tecnología de ultima generación, lo cual garantiza a nuestros usuarios seguridad y confianzas.</p>
        </div>
        <div class="container-fluid p-1 my-2 bg-info text-white" align="center">
            <br>
            <h1>Visión</h1>
            <p>Consolidarnos cómo la empresa líder #1 en el puerto de Ensenada (región) en la prestación de servicios de pesca deportiva y paseos ecoturisticos. Con personal altamente calificado brindando ayuda personalizada, seguridad, calidad y confianza a cada unos de nuestros usuarios.</p>
        </div>
        <div class="container-fluid p-1 my-2 bg-dark text-white" align="center">
            <br>
            <h1>Valores</h1>
            <p><b>Honestidad:</b> Actuar con transparencia para así forjar un fuerte vinculo de lealtad entre nuestros usuarios.</p>
            <p><b>Compromiso:</b> Contar con la disposición permanente para lograr la satisfacción de nuestros usuarios.</p>
            <p><b>Liderazgo:</b> Mantenernos siempre a la vanguardia, mejorando día con día nuestro compromiso por la plena satisfacción de nuestros usuarios.</p>
            <p><b>Excelencia:</b> Cumplir con calidad, eficiencia y conocimiento, optimizando la operación de la empresa.</p>
            <p><b>Servicio:</b> Promover un trato cordial entre nuestro equipo de trabaja hacia nuestros usuarios para así superar sus propias expectativas.</p>
        </div>
        <div class="container-fluid  bg-success text-success"><br></div>
        <div class="container-fluid p-3  bg-info text-white">
            <h1 align="center">Viajes más Populares</h1>
        </div>
    </div>

    <!-- Cards Viajes Populares-->
    <div class="container" style="background-color: white"><br>
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width:500px">
                    <img class="card-img-top" src="../assets/images/s55.jpg" alt="Card image" style="width:100%">
                    <div class="card-body text-center">
                        <h5 class="card-title"><b>Avistamiento de la Ballena Gris</b></h5>
                        <p class="card-text">Aprovecha la visita de la ballena gris a las costas de Baja California</p>
                        <a href="tipo-avistamiento-ballena.php" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="width:500px ">
                    <img class="card-img-top" src="../assets/images/c41.jpg" alt="Card image" style="width:100%">
                    <div class="card-body text-center">
                        <h5 class="card-title"><b>Pesca Deportiva</b></h5>
                        <p class="card-text">Ven y disfruta de un día de pesca a bordo de una de nuetras embarcaciones.
                        </p>
                        <a href="tipo-pesca-depo.php" class="btn btn-primary">Ver Más</a><br>
                    </div>
                </div>
            </div>
        </div><br>
    </div>
    <div class="container-fluid  bg-success text-success"><br></div>
    <div class="container-fluid p-3  bg-dark" style="color: #ffaf2a"><br>
        <h6 align="center">Teléfono: (646) 121-33-84</h6>
        <h6 align="center">E-mail: cocossportfishing@gmail.com</h6><br>
        <h6 align="center">Página creada por Ocean Web & Desing</h6>
    </div>

</body>

</html>
