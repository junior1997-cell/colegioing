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
                        DOCUMENTOS NORMATIVOS
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
                                            <button type="button" class="btn btn-success" onclick="limpiarDocnorma();" data-toggle="modal" data-target="#agregar_usuario">
                                                <i class="fa fa-user-plus"></i> Agregar Documento
                                            </button>
                                            <br />
                                            <br />

                                            <div class="table-responsive">
                                                <table id="ListarDocnorma" class="table table-bordered table-striped tablas">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>

                                                            <th>
                                                                <center>Documento</center>
                                                            </th>

                                                            <th>
                                                                <center>Nombre del Documento</center>
                                                            </th>

                                                            <th>
                                                                <center>Tipo Documento</center>
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
                                <div class="modal-dialog modal-lg ">
                                    <div class="modal-content">
                                        <!-- ============ FORMULARIO DIRECTIVA ==================== -->
                                        <form id="formulario_docnorma">
                                            <input type="text" id="id_docnorma" name="id_docnorma" />

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <center>
                                                    <h4 class="modal-title">
                                                        <i class="fa fa-user-plus"> </i> Agregar Documento
                                                    </h4>
                                                </center>
                                            </div>

                                            <div class="modal-body">
                                                <div class="box box-default box-solid">
                                                    <div class="box-body">
                                                        <div class="row">
                                                            <!-- =================== NOMBRE DEL DOCUMENTO ==================== -->
                                                            <div class="col-md-8" style="padding-bottom: 8px">
                                                                <label for="profesion" class="control-label">Nombre del Documento</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon" id="basic-addon1">
                                                                    	<i class="fa fa-book" style="font-size: 20px; "></i>
                                                                    </span>
                                                                    <input required="" type="text" class="form-control" placeholder="Username" minlength="4" name="nombre_doc" id="nombre_doc" />
                                                                </div>
                                                            </div>
                                                            <!-- ================== Tipo de Documento ===================== -->

                                                            <div class="col-md-4" style="padding-bottom: 8px">
                                                                <div class="form-group">
                                                                    <label for="cip" class="control-label">
                                                                        Tipo de Documento
                                                                    </label>
                                                                    <input type="text" id="tipo_doc_actual" name="tipo_doc_actual" />
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon" id="basic-addon1">
                                                                            <i class="fa fa-bookmark-o" style="font-size: 20px; "></i>
                                                                        </span>
                                                                        <select required="" class="form-control" name="id_tipo_doc">
                                                                            <option id="nombre_tipo_doc">Seleccione</option>
                                                                            <option value="3"> REGLAMENTOS</option>
                                                                            <option value="4"> LEYES</option>
                                                                            <option value="5"> ESTATUTOS</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- ===================== SUBIR PDF ================= -->
                                                            <div class="col-md-12" >
                                                            	<div style="border: 0; border-top: 2px solid #999; height:0;">

                                                            	</div>

                                                            	<div class="row">
                                                            		<div class="col-md-12" style="padding-top: 15px; padding-bottom: 5px;">
                                                            			<label for="cip" class="control-label" >
                                                            				<i class="fa fa-file-pdf-o" style="font-size: 20px; "></i>
		                                                                    Documento
		                                                                </label>
                                                            		</div>
                                                            		<div class="col-md-5">
                                                            			<input type="text" id="doc2" name="doc2" />
                                                                		<input id="doc" type="file" name="doc" accept="application/pdf" required="" />&nbsp;
                                                            		</div>
                                                            		<div class="col-md-7">
                                                            			<button type="button" class="btn btn-warning" onclick="PreviewImage();">
						                                                    <i class="fa fa-eye"></i> Visualizar PDF.
						                                                </button>

                                                            		</div>
                                                            	</div>
															    <div style="clear:both">
															        <iframe id="viewer" frameborder="0" scrolling="no" width="100%" height="200"></iframe>
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
                                                <button type="button" onclick="limpiarDocnorma();" class="btn btn-default" data-dismiss="modal">
                                                    <i class="fa fa-close"></i> Cancelar
                                                </button>
                                            </div>
                                        </form> <!-- END FORMULARIO -->
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
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

		<!--=====================================
		  MODAL  MOSTRAR DOCUMENTO
		======================================-->


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

		          <button type="button"  class="btn btn-danger  " data-dismiss="modal">Cerrar</button>

		        </div>

		    </div>

		  </div>

		</div>
        <!-- ./wrapper -->
        <?php require 'includes/scripts.php'?>
        <script src="scripts/docnorma.js"></script>
        <script type="text/javascript">
               function PreviewImage() {
                   // pdffile=document.getElementById("doc").files[0];
                   // pdffile_url=URL.createObjectURL(pdffile);
                   // console.log(pdffile);
                   // console.log(pdffile_url);
                   var dr = "recursos/pdf/basi.pdf";
                   $('#viewer').attr('src',dr);

               }
           </script>
    </body>
</html>
<?php
}
ob_end_flush();
?>
