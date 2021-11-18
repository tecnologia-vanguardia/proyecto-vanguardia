    <?php
    session_start();
    ?>
    <!doctype html>
    <html lang="en">

    <head>
    <?php include("header.php"); ?>
    </head>

    <body style="height: 500px">
        <!-- Navbar-->
        <?php include("nav-bar.php"); ?>

        <!-- about -->
        <div class="container-fluid  p-2 ">
            <div class="container-fluid  bg-success text-success"><br></div>
            <div class="container-fluid p-3 my-1 bg-info text-white" align="center">
                <br>
                <h1 align="center"><b>Party Boat</b></h1>
                <p>Ven y disfruta de un día agradable abordo de algunas de nuestras embarcaciones. Realiza un viaje por la bahia de Ensenada. Si tienes pensado festejar tu cumpleaños, una graduación, una despedida de solteros o cualquier otro tipo de evento, nuestras embarcaciones se encuentran listas para realizar esta actividad.</p><br>
                
                <div class="container">
                    <div class="row">
                    <div class="col-sm-6">
                        <img src="../assets/images/party2.jpg" class="mx-auto d-block img-thumbnail" alt="jurel" width="485">
                    </div>
                    <div class="col-sm-6">
                        <img src="../assets/images/party1.jpg" class="mx-auto d-block img-thumbnail" alt="jurel" width="800" >
                    </div>
                    </div>
                </div><br>            
                
            </div>
            <!-- Pie de pagina -->
            <?php include("footer.php"); ?>
        </div>
    </body>

    </html>
