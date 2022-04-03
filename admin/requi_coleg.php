<?php
ob_start();
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: index.html");
} else {
    ?>
<!DOCTYPE html>
<html>
<?php require 'includes/head.php'?>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <?php require 'includes/header.php'?>
    <?php require 'includes/aside.php'?>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          REQUISITOS DE COLEGIATURA
          <small>Gestionar información general</small>
        </h1>

      </section>

      <!-- CONTENIDO  -->
      <section class="content">

        <div class="row">

          <div class="col-md-12">

            <div class="box box-primary">
              <div class="box-header">
                <center>
                  <h3 class="box-title fa fa-university">COLEGIACIÓN VIRTUAL EN CIP MOYOBAMBA</h3>
                </center>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                      <i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>

              <div class="box-body">

                <form class="form" id="formulario_requisitos">
                  <div class="box-body">

                    <div class="form-group col-md-12">
                      <label for="reseña_historia" class="control-label">
                        <i class="fa fa-telegram" style="font-size: 20px; "></i>
                        REQUISITOS 
                      </label>
                      <label for="" id="fecha"></label>
                      <textarea class="form-control" name="nombre_requisito" id="nombre_requisito" rows="4"></textarea>
                    </div>

                  </div>
                </form>
              </div>

              <div class="box-footer">
                <center>
                  <button id="btn_editar_e" type="button" class="btn btn-warning">
                    <i class="fa fa-pencil"></i> Editar
                  </button>
                  <button id="btn_actualizar_e" type="submit" class="btn btn-primary">
                    <i class="fa fa-refresh"></i> Actualizar datos
                  </button>
                </center>
              </div>


              <!-- FIN AGREGAR -->
              
            </div>
          </div>
        </div>
      </section>
      <!-- FIN CONTENIDO -->
    </div>
    <!-- /.content-wrapper -->

    <?php require 'includes/footer.php'?>

    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <?php require 'includes/scripts.php'?>
  <script src="scripts/requi_coleg.js"></script>
</body>

</html>
<?php
}
ob_end_flush();
?>
