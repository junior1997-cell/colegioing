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
                        DIRECTIVA
                        <small>Gestionar información general</small>
                    </h1>
                </section>

                <!-- CONTENIDO  -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <!-- =======================TABLA CONSEJO DEPARTAMENTAL======================= -->
                                <div class="col-md-12">
                                    <div class="box" style="border-top: 4px solid #540118 !important;">
                                        <div class="box-header"></div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <!-- BOTÓN AGREGAR -->
                                            <button type="button" class="btn btn-success" onclick="limpiar()" data-toggle="modal" data-target="#agregar_usuario"><i class="fa fa-user-plus"></i> Agregar Miembro</button> <br />
                                            <br />

                                            <div class="table-responsive">
                                                <table id="ListarDirectiva" class="table table-bordered table-striped">
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
                                                                <center>Tipo de Miembro</center>
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
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form id="formulario_historia">
                                            <input type="text" id="id_decano" name="id_decano" />

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title"><i class="fa fa-user-plus"></i> Agregar Miembro</h4>
                                            </div>

                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="box box-default box-solid">
                                                            <div class="box-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <!-- CIP -->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="periodo" class="control-label">CIP</label>
                                                                                    <input type="text" class="form-control" id="decano_periodo" name="decano_periodo" minlength="4" maxlength="11" required />
                                                                                </div>
                                                                            </div>
                                                                            <!-- CARGO -->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="nomape" class="control-label">Cargo</label>
                                                                                    <input type="text" class="form-control" id="decano_nom_ape" name="decano_nom_ape" pattern="[Aa-Zz]{9,1000}" minlength="9" required="" />
                                                                                </div>
                                                                            </div>
                                                                            <!-- MIEMBRO -->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="profesion" class="control-label">Miembro</label>
                                                                                    <input type="text" class="form-control" id="decano_profesion" name="decano_profesion" required="" minlength="7" maxlength="50" />
                                                                                </div>
                                                                            </div>
                                                                            <!-- CORREO -->
                                                                            <div class="col-md-6">
                                                                            	<label for="profesion" class="control-label">Correo</label>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon" id="basic-addon1">@</span>
                                                                                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" />
                                                                                </div>
                                                                                <!-- <div class="form-group">
                                                                                    <div class="input-group-prepend">
																			          <div class="input-group-text">@</div>
																			        </div>
                                                                                    <input type="text" class="form-control" id="decano_cip" name="decano_cip" pattern="[0-9]{1,6}" min="4" required="" />
                                                                                </div> -->
                                                                            </div>

                                                                            <!-- TIPO -->
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label for="cip" class="control-label">Tipo Miembro</label>
                                                                                    <div class="input-group">
	                                                                                    <span class="input-group-addon" id="basic-addon1">@
	                                                                                    </span>
	                                                                                    <select class="form-control">
	                                                                                    	<option>Selecione</option>
	                                                                                    	<option>Miembro del Consejo Departamental</option>
	                                                                                    	<option>Miembro del CAP. Agrónomos y Fines</option>
	                                                                                    	<option>Miembro del CAP. Ambiental y Fines</option>
	                                                                                    	<option>Miembro del CAP. Industrial y Fines</option>
	                                                                                    	<option>Miembro del CAP. Civiles</option>
	                                                                                    </select>
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
                            <!-- FIN MODAL AGREGAR USUARIO-->
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
