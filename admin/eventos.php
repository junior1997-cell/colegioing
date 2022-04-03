<?php
ob_start();
session_start();
if (!isset($_SESSION["usuario"])) {
	header("Location: index.html");
} else {
?>
	<!DOCTYPE html>
	<html>
	<?php require 'includes/head.php' ?>

	<body class="hold-transition skin-blue sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<?php require 'includes/header.php' ?>
			<?php require 'includes/aside.php' ?>

			<!-- =============================================== -->

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>
						Eventos
						<small>Gestiona correctamente el apartado de eventos</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

						<li class="active">Eventos</li>
					</ol>
				</section>

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-success" style="border:2px solid white;">
								<div class="box-header with-border">
									<button type="button" class="btn btn-success" id="btn_add_carousel">
										<i class="fa fa-plus"></i> Nuevo evento
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="box box-solid">
								<div class="box-header with-border">
									<center>
										<h5 class="box-title">Lista de eventos</h5>
									</center>
								</div>
								<div class="box-body">

									<div class="table-responsive">
										<table id="tbllistado_carousel" class="table table-responsive display" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th width="15px">N°</th>
													<th>Título</th>
													<th>Descripción</th>
													<th>Evento o noticia</th>
													<th>Actualización</th>
													<th>Imagen</th>
													<th>Estado</th>
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
							</div>
						</div>
					</div>
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<?php require 'includes/footer.php' ?>
			<div class="control-sidebar-bg"></div>
		</div>

		<div class="modal fade" id="add_carousel" data-backdrop="static" data-keyboard="false">
			<div class="modal-dialog" >
				<form id="formulario_evento" class="form">
					<div class="modal-content" style="border-radius: 10px !important;">						 
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="limpiar();">
								<span aria-hidden="true">
								<i style="color: red;" class="fa fa-times-circle-o" aria-hidden="true"></i>
								</span>
							</button>
							<center>
								<h4 class="modal-title">
									<i  class="fa fa-user-plus"> </i> Agregar nuevo evento
								</h4>
							</center>
						</div>
						<div class="modal-body">
							<input type="hidden" name="ideventos" id="ideventos">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="titulo" class="control-label">Titulo</label>
										<input style="border-radius: 7px !important;" name="titulo" id="titulo" type="text" class="form-control" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="fecha" class="control-label">Fecha</label>
										<input style="border-radius: 7px !important;" name="fechaActual" id="fechaActual" type="text" class="form-control" readonly>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="fecha" class="control-label">Evento o Noticia</label>
										<select style="border-radius: 7px !important;" name="tipopublicacion" id="tipopublicacion" class="form-control selectpicker" required>
											<option value="">Seleccionar</option>
											<option value="Noticia">Noticia</option>
											<option value="Evento">Evento</option>
											
										</select>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<label for="descripcion" class="control-label">Descripcion</label>
										<textarea style="border-radius: 7px !important;" name="descripcion" id="descripcion" type="text" class="form-control" maxlength="100" required></textarea>
									</div>
								</div>

								<div class="col-md-6">
									<label for="foto">Imagen</label>
									<img onerror="this.src='recursos/img/img_defecto.png';" src="recursos/img/img_defecto.png" class="img-thumbnail" id="foto_i" style="cursor: pointer;height: 230px">
									<input style="display:none" type="file" name="foto" id="foto" accept="image/*">
									<input type="hidden" name="foto_actual" id="foto_actual">
								</div>
								<div class="col-md-12">
									<div class="modal-footer" style="padding-bottom: 0px !important;">
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Registrar</button>
										<button type="button" onclick="limpiar();" class="btn btn-danger" id="btn_close_carousel"><i class="fa fa-close"></i> Cancelar </button>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- /.modal-content -->
				</form>
			</div>			
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->

		<?php require 'includes/scripts.php' ?>

		<script src="scripts/eventos.js"></script>

	</body>

	</html>
<?php
}
ob_end_flush();
?>