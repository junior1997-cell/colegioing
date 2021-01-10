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
                      <label for="reseña_historia" class="control-label">
                        <i class="fa fa-telegram" style="font-size: 20px; "></i>
                        RESEÑA HISTORICA
                      </label>
                      <textarea class="form-control" name="reseña_historia" id="reseña_historia" rows="8"></textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="himno" class="control-label">
                        <i class="fa fa-telegram" style="font-size: 20px; "></i>
                        HIMNO
                      </label>
                      <textarea class="form-control" name="himno" id="himno" rows="8"></textarea>
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
              <!-- TABLA REPORTE-->
              <div class="row">
                <div class="col-md-12  ">

                  <div class="box" style="border-top: 4px solid #540118 !important;">
                    <div class="box-header">

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <!-- BOTÓN AGREGAR -->
                      <button type="button" class="btn btn-success" onclick="limpiar()" data-toggle="modal" data-target="#agregar_usuario">
                        <i class="fa fa-user-plus"></i> Agregar Decano
                      </button> <br><br>

                      <div class="table-responsive">
                        <table id="ListarDecano" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>#</th>

                              <th>
                                <center>Periodo</center>
                              </th>

                              <th>
                                <center>Nombre y Apellidos</center>
                              </th>

                              <th>
                                <center>Profesion</center>
                              </th>

                              <th>
                                <center>REG.CIP</center>
                              </th>

                              <th>
                                <center>Estado</center>
                              </th>

                              <th>
                                <center>Opciones</center>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>

                </div>
              </div>
              <!-- FIN TABLA REPORTE-->

              <!-- MODAL AGREGAR USUARIO-->
              <div class="modal fade" id="agregar_usuario">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form id="formulario_historia">

                      <input type="hidden" id="id_decano" name="id_decano">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <center>
                          <h4 class="modal-title">
                            <i class="fa fa-user-plus"></i> Agregar Decano
                          </h4>
                        </center>
                      </div>

                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="box box-default box-solid">
                              <div class="box-body">
                                <div class="row">
                                  <div class="col-md-12">

                                    <div class="row">
                                      <!-- ====================== INPUT PERIODO ====================== -->
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="periodo" class="control-label">Periodo</label>
                                          <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-calendar"
                                                style="font-size: 20px; "></i>
                                            </span>
                                            <input type="text" class="form-control" id="decano_periodo" name="decano_periodo" minlength="4" maxlength="11" required>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- ====================== INPUT NOMBRE APELLIDOS ====================== -->
                                      <div class="col-md-8">
                                        <div class="form-group">
                                          <label for="nomape" class="control-label">Nombre y Apellidos</label>
                                          <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user"
                                                style="font-size: 20px; "></i>
                                            </span>
                                            <input type="text" class="form-control" id="decano_nom_ape" name="decano_nom_ape" pattern="[Aa-Zz]{9,1000}" minlength="9" required="">
                                          </div>
                                        </div>
                                      </div>
                                      <!-- ====================== INPUT REG CIP ====================== -->
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="cip" class="control-label">REG. CIP</label>
                                          <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-barcode"
                                                style="font-size: 20px; "></i>
                                            </span>
                                            <input type="text" class="form-control" id="decano_cip" name="decano_cip" pattern="[0-9]{1,6}" min="4" required="">
                                          </div>
                                        </div>
                                      </div>
                                      <!-- ====================== INPUT PROFESION ====================== -->
                                      <div class="col-md-8">
                                        <div class="form-group">
                                          <label for="profesion" class="control-label">Profesion</label>
                                          <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-graduation-cap"
                                                style="font-size: 20px; "></i>
                                            </span>
                                            <input type="text" class="form-control" id="decano_profesion" name="decano_profesion" required="" minlength="7" maxlength="50">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- FOOTER -->
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                          <i class="fa fa-check"></i> Guardar
                        </button>
                        <button type="button" onclick="limpiar();" class="btn btn-default " data-dismiss="modal">
                          <i class="fa fa-close"></i> Cancelar
                        </button>
                      </div>
                    </form>
                  </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
              <!-- FIN MODAL AGREGAR USUARIO-->
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
  <script src="scripts/historia.js"></script>
</body>

</html>
<?php
}
ob_end_flush();
?>
