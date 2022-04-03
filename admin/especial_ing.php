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
          ESPECIALIZACIÓN DE INGENIERÍA
          <small>Gestionar información de manera eficiente</small>
        </h1>

      </section>

      <!-- CONTENIDO  -->
      <section class="content">


        <div class="row">
          <div class="col-md-12">

            <div class="box box-primary">
              <div class="box-header">
                <center>
                  <h3 class="box-title fa fa-book"> ESPECIALIZACIÓN DE INGENIERÍA</h3>
                </center>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                          </button>
                </div>
              </div>

              <div class="box-body">

                <form class="form" id="formulario_especial">
                  <div class="box-body">


                    <div class="form-group col-md-12">
                      <label for="direccion" class="control-label">CENTROS DE PERITAJE</label>
                      <textarea class="form-control" name="peritaje" id="peritaje" rows="3"></textarea>

                    </div>
                    <div class="form-group col-md-12">
                      <label for="coordenadas" class="control-label">CENTROS DE ARBITRAJE</label>
                      <textarea class="form-control" name="arbitraje" id="arbitraje" rows="3"></textarea>

                    </div>

                    <div class="form-group col-md-12">
                      <label for="telefono" class="control-label">CENTROS DE CERTIFICACIÓN DE CALIDAD</label>
                      <textarea class="form-control" name="certificacion_calidad" id="certificacion_calidad" rows="3"></textarea>

                    </div>

                    <div class="form-group  col-md-12">
                      <label for="email" class="control-label">COMISIÓN DE ASUNTOS MUNICIPALES</label>
                      <textarea class="form-control" name="asuntos_municipales" id="asuntos_municipales" rows="3"></textarea>
                    </div>

                  </div>
                </form>

              </div>
              <div class="box-footer">
                <center>
                  <button id="btn_editar_m" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar</button>
                  <button id="btn_actualizar_m" type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i> Actualizar datos especial</button>
                </center>
              </div>
            </div>

          </div>
        </div>

        <div class="row">

        </div>

        <div class="modal fade" id="cargando_modal" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog">

            <div class="row">
              <div class="col-ms-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div style="width: 100px; height: 100px; background: rgb(0 0 0 / 0%);">

                </div>
              </div>

              <div class="col-ms-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div id="cargando_cuerpo">

                </div>
              </div>
            </div>

            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
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
  <script src="scripts/especial_ing.js"></script>
</body>

</html>
<?php
}
ob_end_flush();
?>
