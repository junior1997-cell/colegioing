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
					NOSOTROS
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
                  <h3 class="box-title fa fa-university"> DATOS DEL COLEGIO</h3>
                </center>
                <div class="box-tools pull-right">
                  	<button type="button" class="btn btn-box-tool" data-widget="collapse">
                  		<i class="fa fa-minus"></i>
                	</button>
                </div>
              </div>

              <div class="box-body">

                <form class="form" id="formulario_empresa">
                  <div class="box-body">

                    <div class="form-group col-md-12">
                      <label for="reseña_historia" class="control-label">RESEÑA HISTORICA</label>
                      <textarea class="form-control" name="reseña_historia" id="reseña_historia" rows="3"></textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="decano_periodo_gestion" class="control-label">DECANOS</label>
                      <textarea class="form-control" name="decano_periodo_gestion" id="decano_periodo_gestion" rows="3"></textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="himno" class="control-label">HIMNO</label>
                      <textarea class="form-control" name="himno" id="himno" rows="3"></textarea>
                    </div>

                   <!--  <div class="form-group col-md-12">
                      <label for="politica" class="control-label">Pólitica</label>
                      <textarea class="form-control" name="politica" id="politica" rows="3"></textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="servicios" class="control-label">Servicios</label>
                      <textarea class="form-control" name="servicios" id="servicios" rows="3"></textarea>
                    </div> -->

                  </div>
                </form>

              </div>
              <div class="box-footer">
                <center>
                  <button id="btn_editar_e" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar</button>
                  <button id="btn_actualizar_e" type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i> Actualizar datos empresa</button>
                </center>
              </div>
            </div>

          </div>
        </div>

        <div class="row">

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
  <script src="scripts/historia.js"></script>
</body>

</html>
<?php
}
ob_end_flush();
?>
