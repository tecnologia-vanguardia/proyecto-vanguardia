    <?php
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <?php include("header.php"); ?>
    </head>
    <body>
    
        <!-- Navbar-->
        <?php include("nav-bar.php"); ?>
        
        <h1><b>Galeria de Pesca Deportiva</b></h1>
        <span class="linea"></span>
        <section class="galeria">
            <a href="#image1"><img src="../assets/images/g8.JPG"  alt=""></a>
            <a href="#image2"><img src="../assets/images/g9.JPG" alt=""></a>
            <a href="#image3"><img src="../assets/images/jurel.jpg" alt=""></a>
            <a href="#image4"><img src="../assets/images/g4.jpg" alt=""></a>
            <a href="#image5"><img src="../assets/images/g10.jpg" alt=""></a>
            <a href="#image6"><img src="../assets/images/g11.jpg" alt=""></a>

        </section>
        <article class="light-box" id=image1>
            <a href="#image6" class="next"><i class="fas fa-arrow-left"></i></a><img src="images/g8.JPG">
            <a href="#image2" class="next"><i class="fas fa-arrow-right"></i></a>
            <a href="#" class="close">X</a>
        </article>
        
        <article class="light-box" id=image2>
            <a href="#image1" class="next"><i class="fas fa-arrow-left"></i></a><img src="images/g9.JPG">
            <a href="#image3" class="next"><i class="fas fa-arrow-right"></i></a>
            <a href="#" class="close">X</a>
        </article>
        
        <article class="light-box" id=image3>
            <a href="#image2" class="next"><i class="fas fa-arrow-left"></i></a><img src="images/jurel.jpg">
            <a href="#image4" class="next"><i class="fas fa-arrow-right"></i></a>
            <a href="#" class="close">X</a>
        </article>
        
        <article class="light-box" id=image4>
            <a href="#image3" class="next"><i class="fas fa-arrow-left"></i></a><img src="images/g4.jpg">
            <a href="#image5" class="next"><i class="fas fa-arrow-right"></i></a>
            <a href="#" class="close">X</a>
        </article>
        
        <article class="light-box" id=image5>
            <a href="#image4" class="next"><i class="fas fa-arrow-left"></i></a><img src="images/g10.jpg">
            <a href="#image6" class="next"><i class="fas fa-arrow-right"></i></a>
            <a href="#" class="close">X</a>
        </article>
        
        <article class="light-box" id=image6>
            <a href="#image5" class="next"><i class="fas fa-arrow-left"></i></a><img src="images/g11.jpg">
            <a href="#image1" class="next"><i class="fas fa-arrow-right"></i></a>
            <a href="#" class="close">X</a>
        </article>
            
        <?php include("footer.php"); ?>        
        
    <script src="https://kit.fontawesome.com/3772c41c90.js" crossorigin="anonymous"></script>
    </body>
    </html>