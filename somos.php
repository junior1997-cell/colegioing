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
                <h1 style="font-size: 60px !important;">¿QUIENES SOMOS?</h1>
            </div>
        </div>

        <!-- Popular -->

        <!-- PASAJES TERRESTRES -->
        <div class="popular page_section" style="margin: 10px;padding: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title text-center">
                            <h1 id="nombre">J&A EXPEDITIONS</h1>
                            <h3 id="lema">"Somos los mejores"</h3>
                        </div>
                    </div>
                </div>

                <div class="row course_boxes" style="margin: 10px;padding: 10px;">
                  <!-- Accordions -->

      						<div class="col-md-12">
                    <div class="elements_accordions">

        							<div class="accordion_container">
        								<div class="accordion d-flex flex-row align-items-center"> DESCRIPCIÓN</div>
        								<div class="accordion_panel" id="descripcion_data">
        									<p> </p>
        								</div>
        							</div>

        							<div class="accordion_container">
        								<div class="accordion d-flex flex-row align-items-center"> MISIÓN</div>
        								<div class="accordion_panel" id="mision">
        									<p> </p>
        								</div>
        							</div>

        							<div class="accordion_container">
        								<div class="accordion d-flex flex-row align-items-center"> VISIÓN</div>
        								<div class="accordion_panel" id="vision">
        									<p> </p>
        								</div>
        							</div>
                      <div class="accordion_container">
        								<div class="accordion d-flex flex-row align-items-center"> VALORES</div>
        								<div class="accordion_panel" id="valores">
        									<p> </p>
        								</div>
        							</div>
                      <div class="accordion_container">
        								<div class="accordion d-flex flex-row align-items-center"> PÓLITICA</div>
        								<div class="accordion_panel" id="politica">
        									<p> </p>
        								</div>
        							</div>
                      <div class="accordion_container">
        								<div class="accordion d-flex flex-row align-items-center"> SERVICIOS</div>
        								<div class="accordion_panel" id="servicios">
        									<p> </p>
        								</div>
        							</div>

        						</div>

                  </div>

                </div>
            </div>
        </div>


        <!-- Footer -->

        <?php require 'web/includes/footersec.php'?>

    </div>

  <?php require 'web/includes/scripts.php'?>

  <script type="text/javascript" src="web/scripts/somos.js"></script>


</body>
</html>
