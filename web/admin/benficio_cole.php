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
                  <h3 class="box-title fa fa-university"> INSTITUTO DE SERVICIOS SOCIALES</h3>
                </center>
                <div class="box-tools pull-right">
                  	<button type="button" class="btn btn-box-tool" data-widget="collapse">
                  		<i class="fa fa-minus"></i>
                	</button>
                </div>
              </div>

              <div class="box-body">

                <form class="form" id="formulario_contactanos">
                  <div class="box-body">

                    <div class="form-group col-md-12">
                      <label for="servicios_sociales" class="control-label">¿QUÉ ES EL INSTITUTO DE SERVICIOS SOCIALES?</label>
                      <textarea class="form-control" name="servicios_sociales" id="servicios_sociales" rows="3"></textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="iss_cip" class="control-label">QUIENES INTEGRAN EL ISS-CIP</label>
                      <textarea class="form-control" name="iss_cip" id="iss_cip" rows="3"></textarea>   
                    </div>

					          <div class="form-group col-md-12">
                      <label for="derechobenef" class="control-label">QUIENES TIENEN DERECHO A LOS BENEFICIOS DEL ISS-CIP</label>
                      <textarea class="form-control" name="derechobenef" id="derechobenef" rows="3"></textarea>
                    </div>
					          <div class="form-group col-md-12">
                      <label for="himno" class="control-label">CUALES SON LOS SERVICIOS QUE BRINDA ACTUALMENTE EL ISS-CIP:</label>
                      <textarea class="form-control" name="actualidad" id="actualidad" rows="3"></textarea>     
                    </div>
				 	          <div class="form-group col-md-12">
                      <label for="himno" class="control-label">IMPORTANTE</label>
                      <textarea class="form-control" name="important" id="important" rows="3"></textarea>
                    </div>
                  </div>
                </form>
              </div>

              <div class="box-footer">
                <center>
                  <button id="btn_editar_m" type="button" class="btn btn-warning">
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
                      <button type="button" class="btn btn-success" onclick="limpiar()" disabled data-toggle="modal" data-target="#agregar_usuario">
                        <i class="fa fa-file-text"></i>  Agregar Documento
                      </button> <br><br>
                     
                      <div class="table-responsive">
                        <table id="ListarDecano" class="table table-bordered table-striped">
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
              <div class="modal fade" id="agregar_documento">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form id="formulario_documentos">

                      <input type="text" id="idbeneficio" name="idbeneficio">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">
                          <i class="fa fa-file-text"></i> Agregar Documento
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
                                      <!-- PERIODO -->
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="periodo" class="control-label">Nombre</label>
										  <textarea class="form-control" name="titulo" id="titulo" rows="3"></textarea>
                                          
                                        </div>
                                      </div>

                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="nomape" class="control-label">Cargar Documento</label>
                                          <input type="file" class="form-control" id="documento" name="documento" accept="application/pdf">
                                          <input type="text" id="documento_actual" name="documento_actual">
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
  <script src="scripts/benficio_cole.js"></script>
</body>

</html>
<?php
}
ob_end_flush();
?>
