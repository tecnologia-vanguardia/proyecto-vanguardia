<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  <title>ALMAR.site | Contactanos</title>
  <?php include("header.php"); ?>
  </head>
  
  <body>
     <!-- Navbar-->
     <?php include("nav-bar.php"); ?>
    
  <!-- about us -->
  <br/>
  <center>
  <img src="../assets/images/almarLogo.png" class="mx-auto d-block img-thumbnail" alt="jurel" width="250" >
    <p>Llena este formulario para ponerte en contacto con nostros:</p>
  <form style="width: 50%">
  <div class="form-group row">
    <label for="nombre" class="col-4 col-form-label">Nombre:</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>&nbsp;
          </div>
        </div> 
        <input id="nombre" name="nombre" type="text" class="form-control">
      </div><br/>
    </div>
  </div>
  <div class="form-group row">
    <label for="tel" class="col-4 col-form-label">Teléfono:</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-phone"></i>&nbsp;
          </div>
        </div> 
        <input id="tel" name="tel" type="text" class="form-control">
      </div><br/>
    </div>
  </div>
  <div class="form-group row">
    <label for="comentario" class="col-4 col-form-label">Comentario:</label> 
    <div class="col-8">
      <textarea id="comentario" name="comentario" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div> <br/>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form><br/>
</center>

<?php include("footer.php"); ?>

</body>
</html>