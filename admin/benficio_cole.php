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
            INSTITUTO DE SERVICIOS SOCIALES
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
                    <h3 class="box-title fa fa-university">INSTITUTO DE SERVICIOS SOCIALES</h3>
                  </center>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                      <i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>

                <div class="box-body">
                  <form class="form" id="formulario_beneficio">
                    <div class="box-body">
                      <div class="form-group col-ms-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <label for="servicios_sociales" class="control-label">
                          ¿QUÉ ES EL INSTITUTO DE SERVICIOS SOCIALES?
                        </label>
                        <textarea class="form-control" name="servicios_sociales" id="servicios_sociales" rows="5"></textarea>
                      </div>

                      <div class="form-group col-ms-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <label for="iss_cip" class="control-label">
                          QUIENES INTEGRAN EL ISS-CIP
                        </label>
                        <textarea class="form-control" name="iss_cip" id="iss_cip" rows="5"></textarea>
                      </div>

                      <div class="form-group col-ms-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <label for="derechobenef" class="control-label">
                          QUIENES TIENEN DERECHO A LOS BENEFICIOS DEL ISS-CIP
                        </label>
                        <textarea class="form-control" name="derechobenef" id="derechobenef" rows="5"></textarea>
                      </div>
                      <div class="form-group col-ms-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <label for="himno" class="control-label">
                          CUALES SON LOS SERVICIOS QUE BRINDA ACTUALMENTE EL ISS-CIP:
                        </label>
                        <textarea class="form-control" name="actualidad" id="actualidad" rows="5"></textarea>
                      </div>
                      <div class="form-group col-ms-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <label for="himno" class="control-label">IMPORTANTE</label>
                        <textarea class="form-control" name="important" id="important" rows="3"></textarea>
                      </div>
                    </div>
                  </form>
                </div>

                <div class="box-footer">
                  <center>
                    <button id="btn_editar_m" type="button" class="btn btn-warning">
                      <i class="fa fa-pencil"></i>
                      Editar
                    </button>
                    <button id="btn_actualizar_e" type="submit" class="btn btn-primary">
                      <i class="fa fa-refresh"></i>
                      Actualizar datos
                    </button>
                  </center>
                </div>

                <!-- FIN AGREGAR -->
                <!-- TABLA REPORTE-->
                <div class="row">
                  <div class="col-md-12">
                    <div class="box" style="border-top: 4px solid #540118 !important;">
                      <div class="box-header"></div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <!-- BOTÓN AGREGAR -->
                        <button type="button" class="btn btn-success" onclick="limpiar()" disabled data-toggle="modal" data-target="#agregar_usuario">
                          <i class="fa fa-file-text"></i> Agregar Documento
                        </button> <br />
                        <br />

                        <div class="table-responsive">
                          <table id="ListarDecano" class="table table-bordered table-striped tablas">
                            <thead>
                              <tr>
                                <th>#</th>

                                <th>
                                  <center>Nombre doc</center>
                                </th>

                                <th>
                                  <center>Documento</center>
                                </th>
                                <th>
                                  <center>Estado</center>
                                </th>

                                <th>
                                  <center>Opciones</center>
                                </th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                      </div>
                      <!-- /.box-body -->
                    </div>
                  </div>
                </div>
                <!-- FIN TABLA REPORTE-->

                <!-- MODAL AGREGAR USUARIO-->
                <div class="modal fade" id="agregar_documento">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form id="formulario_documentos">


                        <div class="modal-header">
                          <button type="button" onclick="limpiar();" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <h4 class="modal-title">
                            <i class="fa fa-file-pdf-o"></i> Agregar Documento
                          </h4>
                        </div>

                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="box box-default box-solid">
                                <input type="hidden" id="idbeneficio" name="idbeneficio" />
                                <div class="box-body">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="row">
                                        <!-- PERIODO -->
                                        <div class="col-md-12">

                                          <div class="form-group">
                                            <label for="periodo" class="control-label">Nombre</label>
                                            <input class="form-control" name="nombre_doc" id="nombre_doc"  >
                                          </div>
                                        </div>

                                        <div class="col-md-8">
                                          <div class="form-group">
                                            <label for="doc" class="control-label">Cargar Documento</label>
                                            <input type="file" class="form-control" id="documento" name="documento" accept="application/pdf" />
                                            <input type="hidden" id="documento_actual" name="documento_actual" />
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <label style="color: white;" for="ver_doc" class="control-label">Ver Doc
                                          </label> <br>
                                          <button type="button" class="btn btn-warning" onclick="PreviewImage();">
                                              <i class="fa fa-eye"></i> Visualizar PDF.
                                          </button>
                                        </div>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div id="ver_pdf"></div>
                            </div>
                          </div>
                        </div>

                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Guardar</button>
                          <button type="button" onclick="limpiar();" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <!-- ============== MODAL VER DOCUMENTO -->
                <div id="mostrarModalplanClasePdf" class="modal fade" role="dialog">

                  <div class="modal-dialog" style="width: 50% !important;">

                    <div class="modal-content">

                        <!--=====================================
                        CUERPO DEL MODAL
                        ======================================-->

                        <div class="modal-body" style="padding: 5px !important;">

                          <div class="box-body" style="padding: 5px !important;">

                            <div class='embed-responsive' style='padding-bottom:80%'>

                             <div id="pdf"  >

                             </div>
                            </div>

                          </div>

                        </div>

                        <!--=====================================
                        PIE DEL MODAL
                        ======================================-->

                        <div class="modal-footer" style="padding: 5px !important;">
                            <button title="Descargar PDF" type="button"  class="btn btn-success  " ><div id="dow"  > </div></button>


                            <button  type="button"  class="btn btn-danger  " data-dismiss="modal">Cerrar</button>

                        </div>

                    </div>

                  </div>

                </div>
                <!-- FIN MODAL AGREGAR USUARIO-->
              </div>
            </div>
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
    <script src="scripts/benficio_cole.js"></script>

    <script type="text/javascript">
      function PreviewImage() {
        pdffile = document.getElementById("documento").files[0];
        antiguopdf = $("#documento_actual").val();
        // console.log(pdffile);
        // pdffile_url=URL.createObjectURL(pdffile);

        // console.log(pdffile_url);
        if (pdffile === undefined) {
          var dr = antiguopdf;
          // console.log('sas: '+dr);
          $("iframe").attr("src", dr);
        } else {
          pdffile_url = URL.createObjectURL(pdffile);
          // var dr = "recursos/pdf/basi.pdf";
          $("iframe").attr("src", pdffile_url);
        }
        // var dr = "recursos/pdf/basi.pdf";
        // $('#viewer').attr('src',dr);
      }
    </script>

  </body>
</html>
<?php
}
ob_end_flush();
?>
