    <html>
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
                            <a class="nav-link" href="https://sportfishing.simplybook.me/v2/#book" target="_blank">Reservar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Reservaciones de usuarios
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="reservacionesClientes.php">Consultar reservaciones</a>
                                <a class="dropdown-item" href="consultarClientes.php">Consultar clientes</a>
                                <div class="dropdown-divider"></div>
                            </div>
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
    </html>