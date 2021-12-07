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
          <h1><b>Consultar reservaci&oacute;n</b></h1>
          <form class="form-inline">
            <div class="form-group mb-2" style="margin-left:22%;">
              <input type="text" readonly class="form-control-plaintext"  id="codigo" value="C&oacute;digo de reservaci&oacute;n">
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <input type="input" class="form-control" id="no_codigo" maxLength="8"placeholder="C&oacute;digo">
            </div>
            <button type="button" class="btn btn-primary mb-2" id="buscar_reservacion">Buscar</button>
          </form>
          <div class="form-group" style="margin-left:22%;">
          <form>
            <div class="form-group">
              <label for="servicio">Servicio</label>
              <input type="input" class="form-control col-md-4" id="nombre_servicio" disabled>
            </div>
            <div class="form-group">
                    <label for="descripcion">Descripci&oacute;n</label>
                    <textarea class="form-control col-md-10" id="descripcion" rows="6" disabled></textarea>
            </div>
            <div class="form-group">
              <label for="estatus">Estatus reservaci&oacute;n</label>
              <input type="input" class="form-control col-md-4" id="estatus" disabled>
            </div>
            <div class="form-group">
              <label for="estatus">Estatus del pago</label>
              <input type="input" class="form-control col-md-4" id="estatus_pago" disabled>
            </div>
            <div class="form-group">
              <label for="fecha_pago">Fecha de pago</label>
              <input type="input" class="form-control col-md-4" id="fecha_pago" disabled>
            </div>
                </form>     
              </div>
        <?php include("footer.php"); ?>
    <script src="../assets/bootstrap/js/bootstrap-table.js"></script>
    <script src="../symplebook/jsonRpc.js"></script>
    <script src="../symplebook/sympleBook.js"></script>
    </body>
  </html>