    <?php
    session_start();
    ?>
    <!doctype html>
    <html lang="en">
        <head>
        <?php include("header.php"); ?>
        </head>
        <?php include("nav-bar.php"); ?>

        <body>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">


    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../assets/images/slide01.jpg"/>
      </div>
      <div class="carousel-item">
        <img src="../assets/images/slide02.jpg"/>
      </div>
      <div class="carousel-item">
        <img src="../assets/images/slide03.jpg"/>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



        <!-- Cards Viajes Populares-->
        <div class="container" style="background-color: white"><br>
        <p>En <b>almar.site</b> estamos listos para reservar tu próxima aventura en cualquiera de nuestros barcos, ya sea que quieras salir a pescar o a ver las ballenas, aquí tenemos las mejores opciones para tí.</p>
        <p>Selecciona el tipo de viaje que búscas para obtener mayor información y reservar en linea:</p>
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
        <?php include("footer.php"); ?>
    </body>
    </html>
