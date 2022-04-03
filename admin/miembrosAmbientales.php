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
                        MIEMBROS DEL CAP. AMBIENTALES Y AFINES
                        <small>Gestionar información general</small>
                    </h1>
                </section>

                <!-- CONTENIDO  -->
                <section class="content">

                    <div class="row">
                        <!-- =======================TABLA CONSEJO DEPARTAMENTAL======================= -->
                        <div class="col-md-12">
                            <div class="box" style="border-top: 4px solid #540118 !important;">
                                <div class="box-header"></div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!-- BOTÓN AGREGAR -->
                                    <button type="button" class="btn btn-success" onclick="limpiarDirectiva();" data-toggle="modal" data-target="#agregar_usuario">
                                        <i class="fa fa-user-plus"></i> Agregar Miembro
                                    </button> <br />
                                    <br />

                                    <div class="table-responsive">
                                        <table id="ListarDirectivaAmbiental" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>

                                                    <th>
                                                        <center>CIP</center>
                                                    </th>

                                                    <th>
                                                        <center>Cargo</center>
                                                    </th>

                                                    <th>
                                                        <center>Miembro</center>
                                                    </th>

                                                    <th>
                                                        <center>Correo</center>
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
                    <div class="modal fade" id="agregar_usuario">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <!-- ============ FORMULARIO DIRECTIVA ==================== -->
                                <form id="formulario_directiva">
                                    <input type="hidden" id="id_directiva" name="id_directiva" />

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <center>
                                            <h4 class="modal-title">
                                                <i class="fa fa-user-plus"> </i> Agregar Miembro
                                            </h4>
                                        </center>
                                    </div>

                                    <div class="modal-body">

                                        <div class="box box-default box-solid">
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <!-- =================== CIP ==================== -->
                                                            <div class="col-md-6" style="padding-bottom: 10px;">
                                                                <label for="profesion" class="control-label">CIP</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-barcode" style="font-size: 20px; "></i></span>
                                                                    <input required="" type="text" class="form-control" placeholder="Username" minlength="4" name="cip_directiva" id="cip_directiva" />
                                                                </div>
                                                            </div>
                                                            <!-- ================== CARGO ===================== -->
                                                            <div class="col-md-6" style="padding-bottom: 10px;">
                                                                <label for="profesion" class="control-label">Cargo</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon" id="basic-addon1">
                                                                        <i class="fa fa-address-card"
                                                                        style="font-size: 20px; "></i>
                                                                    </span>
                                                                    <input required="" type="text" class="form-control" placeholder="Username" minlength="4" name="cargo_directiva" id="cargo_directiva" />
                                                                </div>
                                                            </div>
                                                            <!-- ====================MIEMBRO====================== -->
                                                            <div class="col-md-6" style="padding-bottom: 10px;">
                                                                <label for="profesion" class="control-label">Miembro</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon" id="basic-addon1">
                                                                        <i class="fa fa-user-circle" style="font-size: 20px; "></i>
                                                                    </span>
                                                                    <input required="" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="miembro_directiva" id="miembro_directiva" />
                                                                </div>
                                                            </div>
                                                            <!-- ====================CORREO============================ -->
                                                            <div class="col-md-6" style="padding-bottom: 10px;">
                                                                <label for="profesion" class="control-label">Correo</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon" id="basic-addon1">
                                                                        <i class="fa fa-envelope" style="font-size: 20px; "></i>
                                                                    </span>
                                                                    <input required="" type="text" class="form-control" placeholder="Username" minlength="6" name="correo_directiva" id="correo_directiva" />
                                                                </div>

                                                            </div>

                                                            <!-- ===================== TIPO MIEMBRO ================= -->

                                                            <input type="hidden" value="3" name="id_tipo_directiva" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- ==========BOTONES DE accion DEL FORMULARIO -->
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-check"></i> Guardar
                                        </button>
                                        <button type="button" onclick="limpiarDirectiva();" class="btn btn-default" data-dismiss="modal">
                                            <i class="fa fa-close"></i> Cancelar
                                        </button>
                                    </div>
                                </form> <!-- END FORMULARIO -->
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- FIN MODAL AGREGAR USUARIO-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-danger "  >
                                <div class="box-header with-border">
                                    <h3 class="box-title">HISTORIAL DEl CAP. AMBIENTALES Y AFINES </h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>                                        
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                     

                                    <div class="table-responsive">
                                        <table id="historial_directiva_ambiental" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>

                                                    <th>
                                                        <center>CIP</center>
                                                    </th>

                                                    <th>
                                                        <center>Cargo</center>
                                                    </th>

                                                    <th>
                                                        <center>Miembro</center>
                                                    </th>

                                                    <th>
                                                        <center>Correo</center>
                                                    </th>

                                                    <th>
                                                        <center>Estado</center>
                                                    </th>

                                                    <th>
                                                        <center>Recuperar</center>
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
                </section>
                <!-- FIN CONTENIDO -->
            </div>
            <!-- /.content-wrapper -->

            <?php require 'includes/footer.php'?>

            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <?php require 'includes/scripts.php'?>
        <script src="scripts/directiva.js"></script>
    </body>
</html>
<?php
}
ob_end_flush();
?>
