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
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-user"></i>  Reporte de usuarios de sistema
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Usuario</li>
          </ol>
        </section>

        <!-- CONTENIDO  -->
        <section class="content">
          <!-- BOTÓN AGREGAR -->
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="box box-solid">
                <div class="box-body">
                  <button type="button" class="btn btn-success" onclick="limpiar()" data-toggle="modal" data-target="#agregar_usuario">
                    <i class="fa fa-user-plus"></i> Agregar Usuario
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN AGREGAR -->
          <!-- TABLA REPORTE-->
          <div class="row">
            <div class="col-md-8 col-md-offset-2">

              <div class="box">
                <div class="box-header">

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table id="ListaUsuario" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>
                            <center>Usuario</center>
                          </th>
                          <th>
                            <center>Estado</center>
                          </th>
                          <th>
                            <center>Acción</center>
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
                <form id="formulario_usuario">

                  <input type="hidden" id="idusuario" name="idusuario">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">
                      <i class="fa fa-user-plus"></i> Agregar usuario
                    </h4>
                  </div>

                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="box box-default box-solid">
                          <div class="box-body">
                            <div class="row">
                              <div class="col-md-12">

                                <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="nombre" class="control-label">Usuario</label>
                                        <input type="text" class="form-control" id="usuario" name="usuario">
                                      </div>
                                    </div>

                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="nombre" class="control-label">Clave</label>
                                      <input type="text" class="form-control" id="clave" name="clave">
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
      </section>
      <!-- FIN CONTENIDO -->
    </div>
    <!-- /.content-wrapper -->

    <?php require 'includes/footer.php'?>

    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <?php require 'includes/scripts.php'?>
    <script src="scripts/usuario.js"></script>
  </body>
</html>
