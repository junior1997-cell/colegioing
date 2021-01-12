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
          <div class="col-md-6">

            <!-- ===================== ..:: BOX ::.. ===================== -->
            <div class="box box-primary">

              <!-- ===================== ..:: BOX HEADER ::.. ===================== -->
              <div class="box-header">
                <center>
                  <h3 class="box-title fa fa-book"> DATOS DE CONTACTANOS</h3>
                </center>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                          </button>
                </div>
              </div>

              <!-- ===================== ..:: CUERPO DEL BOX ::.. ===================== -->
              <div class="box-body">
                <!-- ===================== ..:: FOMULARIO ::.. ===================== -->
                <form class="form" id="formulario_contactanos">
                  <div class="box-body">

                    <!-- ===================== ..:: INPUT DIRECCION ::.. ===================== -->
                    <div class="form-group col-md-12">
                      <label for="direccion" class="control-label">
                        <i class="fa fa-address-card" style="font-size: 20px; "></i>
                        Dirección
                      </label>
                      <input id="direccion" name="direccion" type="text" class="form-control" placeholder="Ingrese la dirección de J&A Expeditions...">
                    </div>

                    <!-- ===================== ..:: INPUT COOR. MAPA ::.. ===================== -->
                    <div class="form-group col-md-12">
                      <label for="coordenadas" class="control-label">
                        <i class="fa fa-map-marker" style="font-size: 20px; "></i>
                        Coordenadas del mapa
                      </label>
                      <input id="coordenadas" name="coordenadas" type="text" class="form-control" placeholder="Ingrese las coordenadas del mapa...">
                    </div>

                    <!-- ===================== ..:: INPUT TELEFONO ::.. ===================== -->
                    <div class="form-group col-md-12">
                      <label for="telefono" class="control-label">
                        <i class="fa fa-telegram" style="font-size: 20px; "></i>
                        Telefono
                      </label>
                      <input id="telefono" name="telefono" type="text" class="form-control" placeholder="Ingrese telefono(s) de J&A Expeditions...">
                    </div>

                    <!-- ===================== ..:: INPUT EMAIL ::.. ===================== -->
                    <div class="form-group  col-md-12">
                      <label for="email" class="control-label">
                        <i class="fa fa-telegram" style="font-size: 20px; "></i>
                        E-Mail
                      </label>
                      <input id="email" name="email" type="text" class="form-control" placeholder="Ingrese la e-mail de J&A Expeditions...">
                    </div>
                  </div>
                </form>
              </div>

              <!-- ===================== ..:: BOX FOOTER ::.. ===================== -->
              <div class="box-footer">
                <center>
                  <button id="btn_editar_m" type="button" class="btn btn-warning"><i class="fa fa-pencil"></i> Editar</button>
                  <button id="btn_actualizar_m" type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i> Actualizar datos contactanos</button>
                </center>
              </div>
            </div>
            <!-- ===================== ..:: FIN-BOX ::.. ===================== -->
          </div>

          <div class="col-md-6">
            <!-- ===================== ..:: BOX::.. ===================== -->
            <div class="box box-primary">
              <!-- ===================== ..:: BOX HEADER ::.. ===================== -->
              <div class="box-header">
                <center>
                  <h3 class="box-title fa fa-university"> DATOS DEL COLEGIO</h3>
                </center>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                          </button>
                </div>
              </div>

              <!-- ===================== ..:: BOX CUERPO ::.. ===================== -->
              <div class="box-body">
                <!-- ===================== ..:: FORMULARIO ::.. ===================== -->
                <form class="form" id="formulario_empresa">
                  <div class="box-body">
                    <!-- ===================== ..:: INPUT NOMBRE ::.. ===================== -->
                    <div class="form-group col-md-12">
                      <label for="nombre" class="control-label">
                        <i class="fa fa-telegram" style="font-size: 20px; "></i>
                        Nombre
                      </label>
                      <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ingrese la dirección de J&A Expeditions...">
                    </div>

                    <!-- ===================== ..:: INPUT PRESENTACION ::.. ===================== -->
                    <div class="form-group col-md-12">
                      <label for="descripcion" class="control-label">
                        <i class="fa fa-calendar" style="font-size: 20px; "></i>
                        Presentacion
                      </label>
                      <textarea class="form-control" name="descripcion" id="descripcion" rows="5"></textarea>
                    </div>

                    <!-- ===================== ..:: INPUT MISION ::.. ===================== -->
                    <div class="form-group col-md-12">
                      <label for="mision" class="control-label">
                        <i class="fa fa-telegram" style="font-size: 20px; "></i>
                        Misión
                      </label>
                      <textarea class="form-control" name="mision" id="mision" rows="4"></textarea>
                    </div>

                    <!-- ===================== ..:: INPUT VISION ::.. ===================== -->
                    <div class="form-group col-md-12">
                      <label for="vision" class="control-label">
                        <i class="fa fa-telegram" style="font-size: 20px; "></i>
                        Visión
                      </label>
                      <textarea class="form-control" name="vision" id="vision" rows="4"></textarea>
                    </div>

                    <!-- ===================== ..:: INPUT OBJETIVOS ::.. ===================== -->
                    <div class="form-group col-md-12">
                      <label for="valores" class="control-label">
                        <i class="fa fa-telegram" style="font-size: 20px; "></i>
                        Objetivos
                      </label>
                      <textarea class="form-control" name="valores" id="valores" rows="10"></textarea>
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
              <!-- ===================== ..:: BOX FOOTER ::.. ===================== -->
              <div class="box-footer">
                <center>
                  <button id="btn_editar_e" type="button" class="btn btn-warning">
                    <i class="fa fa-pencil"></i> Editar
                  </button>
                  <button id="btn_actualizar_e" type="submit" class="btn btn-primary">
                    <i class="fa fa-refresh"></i> Actualizar datos empresa
                  </button>
                </center>
              </div>
            </div>
            <!-- FIN-BOX ::.. ===================== -->
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
  <script src="scripts/contactanos.js"></script>
</body>

</html>
<?php
}
ob_end_flush();
?>
