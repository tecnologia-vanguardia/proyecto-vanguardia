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
          <h1><b>Reservaciones</b></h1>
          <div class="col-md-2" style = ""></div>
          <input type="hidden" id="tipo_busqueda" value="1">
			    <table class="table table-bordered" style = "margin-top:10px" id= "tabla-reservas"></table>
		  </div>
        <?php include("footer.php"); ?>
        <script src="../assets/bootstrap/js/bootstrap-table.js"></script>
        <script src="../symplebook/jsonRpc.js"></script>
        <script src="../symplebook/sympleBook.js"></script>
        </body>
        </html>