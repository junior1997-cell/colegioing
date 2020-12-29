<?php
ob_start();
session_start();
if (!isset($_SESSION["usuario"])){
  header("Location: index.html");
}else{
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
					Módulo de lugares turisticos
					<small>Gestiona los lugares turisticos de la página principal</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>

					<li class="active">Módulo de lugares turisticos</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="box box-success" style="border:2px solid white;">
							<div class="box-header with-border">
								<button type="button" class="btn btn-success" id="btn_add_turisticos">
								<i class="fa fa-plus"></i> Agregar lugar turistico
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
									<h5 class="box-title">Lista de lugares turisticos</h5>
								</center>
							</div>
							<div class="box-body">

								<div class="table-responsive">
									<table id="tbllistado_turisticos" class="table table-responsive display" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th width="15px">N°</th>
												<th>Titulo</th>
												<th>Descripcion</th>
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



	<div class="modal fade" id="add_turisticos" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog"  style="width: 80% !important">


<form id="formulario_turisticos" class="form">


			<div class="modal-content">
					<div class="modal-header">

						<h4 class="modal-title"><i class="fa fa-newspaper-o"></i> Agregar lugar turistico</h4>
					</div>
					<div class="modal-body">

							<input type="hidden" name="idturisticos" id="idturisticos">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="titulo" class="control-label">Titulo</label>
                    <input name="titulo"  id="titulo" type="text" class="form-control" required="required">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="descripcion" class="control-label">Descripcion</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" rows="9" placeholder="Enter ..." required="required"></textarea>
                  </div>
                </div>
                <div class="col-md-3">
                    <label for="foto1">Imagen principal</label>
                      <img onerror="this.src='recursos/img/img_defecto.png';"  style="height: 200px;cursor: pointer;"  src="recursos/img/img_defecto.png" class="img-thumbnail" id="foto1_i" style="cursor: pointer;height: 230px" width="300px">
                      <input style="display:none" type="file" name="foto1" id="foto1">
                      <input type="hidden" name="foto1_actual" id="foto1_actual">
                </div>
                <div class="col-md-3">
                    <label for="foto1">Imagen principal</label>
                      <img onerror="this.src='recursos/img/img_defecto.png';"  style="height: 200px;cursor: pointer;"  src="recursos/img/img_defecto.png" class="img-thumbnail" id="foto2_i" style="cursor: pointer;height: 230px" width="300px">
                      <input style="display:none" type="file" name="foto2" id="foto2">
                      <input type="hidden" name="foto2_actual" id="foto2_actual">
                </div>
              </div>
              <div class="row">
<br>
                <div class="col-md-12">
                  <div class="progress" id="div_barra_progress">
                    <div id="barra_progress" class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 0%;">
                      0%
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Registrar </button>
                <button type="button" class="btn btn-default" id="btn_close_turisticos"><i class="fa fa-close"></i> Cancelar </button>

              </div>
					</div>



			</div>

	</form>




			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<?php require 'includes/scripts.php'?>

	<script src="scripts/turisticos.js"></script>


</body>
</html>
<?php
}
ob_end_flush();
?>
