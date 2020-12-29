<!DOCTYPE html>
<html lang="en">

<?php require 'web/includes/headsec.php'?>

<body>

<div class="super_container">

	<!-- Header -->
	<?php require 'web/includes/header.php'?>

	<!-- Menu -->
	<?php require 'web/includes/menumm.php'?>

	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(web/images/rioabiseo.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>CONTACTANOS</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="map-responsive">
							<div id="map"></div>
					</div>
				</div>
				<div class="col-lg-3">
					<ul>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="web/images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									<span style="font-weight: bold;color:#000000;">DIRECCION</span><br>
									<span style="padding-left:38px;" id="direccion_datalef"></span>
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="web/images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									<span style="font-weight: bold;color:#000000;">CELULAR/TELEFÓNO</span><br>
									<span style="padding-left:38px;" id="telefono_datalef"></span>
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="web/images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									<span style="font-weight: bold;color:#000000;">CORREO ELECTRÓNICO</span><br>
									<span style="padding-left:38px;" id="correo_datalef"></span>
								</li>
							</ul>
				</div>
			</div>
			<br>



					<div class="contact_form_container" style="margin: 0px;">
						<form action="post">

							<div class="row">
								<div class="col-md-6">
									<input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Nombres completos" required="required" data-error="Su nombre es requerido.">
								</div>
								<div class="col-md-3">
									<input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Su email es requerido.">
								</div>
								<div class="col-md-3">
									<input id="contact_form_telefono" class="input_field contact_form_email" type="text" placeholder="Número telefónico" required="required" data-error="Su número de telefono es requerido.">
								</div>
							</div>

								<div class="row">
									<div class="col-md-12">
										<textarea style="height: 90px;" class="text_field contact_form_message" name="message" placeholder="Mensaje" required="required" data-error="Porfavor, escribe un mensaje."></textarea>
									</div>
								</div>


								<button id="contact_send_btn" type="button" class="contact_send_btn trans_100" value="Submit" >Enviar</button>


						</form>
					</div>


		</div>
	</div>

	<!-- Footer -->

	<?php require 'web/includes/footersec.php'?>

</div>

	<?php require 'web/includes/scripts.php'?>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDadqvTI0dXKYyq2xoH6AhtJUTAkAthX-M"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/noisy/1.2/jquery.noisy.min.js'></script>
	<script src="web/js/maps2.js"></script>

	<script type="text/javascript" src="web/scripts/contactanos.js"></script>

</body>
</html>
