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
        
        <h1><b>Galeria de Avistamiento de Ballenas</b></h1>
        <span class="linea"></span>
        <section class="galeria">
            <a href="#image1"><img src="../assets/images/gb0.jpg"  alt=""></a>
            <a href="#image2"><img src="../assets/images/gb1.jpg" alt=""></a>
            <a href="#image3"><img src="../assets/images/gb2.jpg" alt=""></a>
            <a href="#image4"><img src="../assets/images/gb4.jpg" alt=""></a>
            <a href="#image5"><img src="../assets/images/gb3.jpg" alt=""></a>
            <a href="#image6"><img src="../assets/images/c2.jpg" alt=""></a>

        </section>
        <article class="light-box" id=image1>
            <a href="#image6" class="next"><i class="fas fa-arrow-left"></i></a><img src="../assets/images/gb0.jpg">
            <a href="#image2" class="next"><i class="fas fa-arrow-right"></i></a>
            <a href="#" class="close">X</a>
        </article>
        
        <article class="light-box" id=image2>
            <a href="#image1" class="next"><i class="fas fa-arrow-left"></i></a><img src="../assets/images/gb1.jpg">
            <a href="#image3" class="next"><i class="fas fa-arrow-right"></i></a>
            <a href="#" class="close">X</a>
        </article>
        
        <article class="light-box" id=image3>
            <a href="#image2" class="next"><i class="fas fa-arrow-left"></i></a><img src="../assets/images/gb2.jpg">
            <a href="#image4" class="next"><i class="fas fa-arrow-right"></i></a>
            <a href="#" class="close">X</a>
        </article>
        
        <article class="light-box" id=image4>
            <a href="#image3" class="next"><i class="fas fa-arrow-left"></i></a><img src="../assets/images/gb4.jpg">
            <a href="#image5" class="next"><i class="fas fa-arrow-right"></i></a>
            <a href="#" class="close">X</a>
        </article>
        
        <article class="light-box" id=image5>
            <a href="#image4" class="next"><i class="fas fa-arrow-left"></i></a><img src="../assets/images/gb3.jpg">
            <a href="#image6" class="next"><i class="fas fa-arrow-right"></i></a>
            <a href="#" class="close">X</a>
        </article>
        
        <article class="light-box" id=image6>
            <a href="#image5" class="next"><i class="fas fa-arrow-left"></i></a><img src="../assets/images/c2.jpg">
            <a href="#image1" class="next"><i class="fas fa-arrow-right"></i></a>
            <a href="#" class="close">X</a>
        </article>
            
        <?php include("footer.php"); ?>        
        
    <script src="https://kit.fontawesome.com/3772c41c90.js" crossorigin="anonymous"></script>
    </body>
    </html>