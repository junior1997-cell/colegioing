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
													<th>Descripción</th>
													<th>Imagen</th>
													<th>Estado</th>
													<th><center>Acción</center></th>
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

			<?php require 'includes/footer.php'?>
			<div class="control-sidebar-bg"></div>
		</div>

		<div class="modal fade" id="add_carousel" data-backdrop="static" data-keyboard="false">
			<div class="modal-dialog">


				<form id="formulario_carousel" class="form">


					<div class="modal-content">
						<form action="">
							<div class="modal-header">

								<h4 class="modal-title"><i class="fa fa-newspaper-o"></i> Agregar nuevo evento</h4>
							</div>
							<div class="modal-body">

								<input type="hidden" name="idcarousel" id="idcarousel">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="titulo" class="control-label">Descripción</label>
											<input name="titulo"  id="titulo" type="text" class="form-control" required>
										</div>

									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="titulo" class="control-label">Descripción</label>
											<input name="titulo"  id="titulo" type="text" class="form-control" required>
										</div>
									</div>
									<div class="col-md-6">
										<label for="foto">Imagen del evento</label>
										<img onerror="this.src='recursos/img/img_defecto.png';" src="recursos/img/img_defecto.png" class="img-thumbnail" id="foto_i" style="cursor: pointer;height: 230px">
										<input style="display:none" type="file" name="foto" id="foto">
										<input type="hidden" name="foto_actual" id="foto_actual">
									</div>
									<div class="col-md-12">
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Registrar</button>
											<button type="button" class="btn btn-danger" id="btn_close_carousel"><i class="fa fa-close"></i> Cancelar </button>
										</div>
									</div>

								</div>
							</form>
						</div>

					</div>

				</form>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->

		<?php require 'includes/scripts.php'?>

		<script src="scripts/carousel.js"></script>

	</body>
	</html>
	<?php
}
ob_end_flush();
?>
