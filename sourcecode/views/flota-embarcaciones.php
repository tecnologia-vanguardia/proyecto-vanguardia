            <?php
            session_start();
            ?>
            <!doctype html>
            <html lang="en">
            <link rel="stylesheet" href="../styles/flota-embarcaciones.css">
                <head>
                <?php include("header.php"); ?>
                </head>
            <body>
                <!-- Navbar-->
                <?php include("nav-bar.php"); ?>

                <!-- about us -->
                <div class="main">
                <div class="container-fluid  p-2 ">
                    <div class="container-fluid  bg-success text-success"><br></div>
                    <div class="container-fluid p-3 my-1 bg-info text-white" align="center">
                        <br>
                        <h1 align="center">Flota de Embarcaciones</h1>
                        <p>Contamos con una gran variedad de embarcaciones para que puedas realizar el viaje que tengas pensado.<br> Todas las embarcaciones cuentan con las medidas de seguridad y permisos necesarios para operar.</p>
                    </div>
                    <!-- cards -->
                    <div class="container-fluid  bg-success text-success"><br></div><br>

                    <div id="myBtnContainer">
                        <button class="btn active" onclick="filterSelection('all')"> Todos</button>
                        <button class="btn" onclick="filterSelection('BARCO')"> Barcos</button>
                        <button class="btn" onclick="filterSelection('PANGA')"> Pangas</button>
                    </div>

                    <div class="row">
                    <?php include("../services/flotaEmbarcacioneServices.php"); ?>
                    <?php include("footer.php"); ?>
                </div>
                    </div>
                </div>
                <script src="../js/jquery.min.js"></script>
                <script src="../js/flota-embarcaciones.js"></script>
            </body>
            </html>
