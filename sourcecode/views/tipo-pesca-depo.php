    <?php
    session_start();
    ?>
    <!doctype html>
    <html lang="en">
    <head>
    <?php include("header.php"); ?>
    </head>
    
    <body style="height: 1500px">
        
        <!-- Navbar-->
        <?php include("nav-bar.php"); ?>
        
    <!-- about -->
    <div class="container-fluid  p-2 ">
        <div class="container-fluid  bg-success text-success"><br></div>
            <div class="container-fluid p-3 my-1 bg-info text-white" align="justify">
            <br><h1 align="center">Pesca Deportiva</h1>
            <p>Ven y disfruta de un día de pesca agradable abordo de algunas de nuestras embarcaciones. 
            Vive la experiencia de capturar alguna de las diferentes especies marinas que se encuentran en nuestra bahía, como jurel, bonita, barracuda, atún, dorado, marlín, entre otras especies. Contamos con viajes privados y viajes colectivos. Sino cuentas con experiencia, nuestra tripulación se encargará de explicarle como puede realizar esta actividad sin correr algún riesgo. </p>        
            </div>
            <div class="container-fluid p-1 bg-success text-white" align="center">
            <h1>Tipos de Pesca</h1>        
            </div>
            <div class="container-fluid p-3 bg-dark text-white" align="justify">
            <h1 align="center">Pesca Local</h1>
            <div class="container"><p>La pesca local es un viaje que tiene una duración entre 8 a 9 horas. Puede realizar un viaje privado o viaje colectivo. En este viaje los capitanes de las embarcaciones navegan a diferentes puntos de pesca, como la Isla Todos Santos, Punta Banda, San Miguel, entre otros. En este tipo de viaje se realiza la pesca de superficie y de fondo. Las especies que se pueden capturar son; jurel, bonita, barracuda, curvina, rockot, blancos, lingcot, lenguado, entre otros.</p>
            <img src="../assets/images/jurel2.jpg" class="mx-auto d-block img-thumbnail" alt="jurel" width="400"><br>
            </div>
            <div class="container-fluid p-3 bg-dark text-white" align="justify">
            <div class="container-fluid  bg-success text-success"><br></div>
            <h1 align="center">Pesca al Atún</h1>
            <div class="container"><p>Este tipo de pesca tiene una duración entre 15 a 18 horas. Puede realizar un viaje privado o viaje colectivo. Este viaje inicia en los meses de Junio y termina en Septiembre. En este tipo de viaje las especies que se pueden capturar son; Atún aleta azul, Atún aleta amarrilla, Dorado, Marlín, Wahoo, jurel, entre otras especies.</p>
            <img src="../assets/images/bluefin.jpg" class="mx-auto d-block img-thumbnail" alt="jurel" width="400" >
            </div>
            </div>
            </div>
            
            <div class="container-fluid  bg-success text-success"><br></div>
        <!-- Pie de pagina -->
        <?php include("footer.php"); ?>
    </div>
    </body>
    </html>