<?php
ob_start();
session_start();
if (!isset($_SESSION["usuario"])){
  header("Location: index.html");
}else{
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
          TRÁMITES
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
                  <h3 class="box-title"> <i class="fa fa-file-text-o" aria-hidden="true"></i> TRÁMITES</h3>
                </center>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                					</button>
                </div>
              </div>

              <div class="box-body">

                <form class="form" id="formulario_contactanos">
                  <div class="box-body">


                    <div class="form-group col-md-12">
                      <label for="direccion" class="control-label">MIEMBRO ORDINARIO</label>
                      <textarea class="form-control" name="mordinario" id="mordinario" rows="3"></textarea>
                      
                    </div>
                    <div class="form-group col-md-12">
                      <label for="coordenadas" class="control-label">MIEMBRO TEMPORAL</label>
                      <textarea class="form-control" name="mtemporal" id="mtemporal" rows="3"></textarea>
                      
                    </div>

                    <div class="form-group col-md-12">
                      <label for="telefono" class="control-label">MIEMBRO VITALICIO</label>
                      <textarea class="form-control" name="mvitalico" id="mvitalico" rows="3"></textarea>
                      
                    </div>

                    <div class="form-group  col-md-12">
                      <label for="email" class="control-label">SEGUNDA ESPECIALIZACIÓN</label>
                      <textarea class="form-control" name="sespecializacion" id="sespecializacion" rows="3"></textarea>
                    </div>
                    <div class="form-group  col-md-12">
                      <label for="email" class="control-label">PRÓRROGA DE COLEGIATURA TEMPORAL</label>
                      <textarea class="form-control" name="ctemporal" id="ctemporal" rows="3"></textarea>
                    </div>
                    <div class="form-group  col-md-12">
                      <label for="email" class="control-label">TRASLADO DE CONSEJO DEPARTAMENTAL</label>
                      <textarea class="form-control" name="cdepartamental" id="cdepartamental" rows="3"></textarea>
                    </div>

                  </div>
                </form>

              </div>
              <div class="box-footer">
                <center>
                  <button id="btn_editar_m" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar</button>
                  <button id="btn_actualizar_m" type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i> Actualizar datos contactanos</button>
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
  <script src="scripts/colegiatura.js"></script>
</body>

</html>
<?php
}
ob_end_flush();
?>
