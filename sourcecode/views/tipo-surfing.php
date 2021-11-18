    <?php
    session_start();
    ?>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <?php include("header.php"); ?>
    </head>

    <body>

        <!-- Navbar-->
        <?php include("nav-bar.php"); ?>

        <!-- about us -->
        <div class="container-fluid  p-2 ">
            <div class="container-fluid  bg-success text-success"><br></div>
            <div class="container-fluid p-3 my-1 bg-info text-white" align="center">
                <br>
                <h1 align="center">Surfing Isla Todos Santos</h1>
                <p>La Isla Todos Santos es un lugar reconocido a nivel mundial por sus grandes olas, surfistas de todo el mundo vienen todos los años a practicar este deporte. Otoño e invierno son la mejor temporada para las olas. </p> <br>
                <div class="container">
                    <img src="../assets/images/surf3.jpg" class="mx-auto d-block img-thumbnail" alt="jurel" width="600">
                </div>
            </div>

            <!-- Pie de pagina -->
            <?php include("footer.php"); ?>
        </div>
    </body>

    </html>
