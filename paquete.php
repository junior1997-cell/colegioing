<!DOCTYPE html>
<html lang="en">

<?php require 'web/includes/headsec.php'?>
<?php
$idpaquetes= $_POST["idpaquetes"];
if($idpaquetes==""||$idpaquetes==null){
  header("Location: index.php");
}

?>
<body>

    <div class="super_container">

        <!-- Header -->
        <?php require 'web/includes/header.php'?>

        <!-- Menu -->
        <?php require 'web/includes/menumm.php'?>

        <!-- Home -->

        <div class="home">
            <div class="home_background_container prlx_parent">
                <div id="foto1_header" class="home_background prlx" ></div>
            </div>
            <div class="home_content">
                <h1 style="font-size: 25px !important;" id="nombre_paquete"></h1>
            </div>
        </div>

        <!-- Popular -->

        <!-- PASAJES TERRESTRES -->
        <div class="popular page_section" >
            <div class="container-fluid">

                <div class="row course_boxes" style="margin: 10px;padding: 10px;">
                  <!-- Accordions -->

      						<div class="col-md-6">
                    <h2><i class="fas fa-star"></i><span id="dp"> 2 Días 1 Personas</span> <span style="color:#C88E00;">&#8594;</span> S/. <span id="precio">100.00</span></h2>

                    <div class="elements_accordions">

        							<div class="accordion_container">
        								<div class="accordion d-flex flex-row align-items-center"> INTINERARIO</div>
        								<div class="accordion_panel">
        									<p id="intinerario"></p>
        								</div>
        							</div>

        							<div class="accordion_container">
        								<div class="accordion d-flex flex-row align-items-center"> INCLUYE</div>
        								<div class="accordion_panel">
        									<p id="incluye"></p>
        								</div>
        							</div>

        							<div class="accordion_container">
        								<div class="accordion d-flex flex-row align-items-center"> NO INCLUYE</div>
        								<div class="accordion_panel">
        									<p id="noincluye"></p>
        								</div>
        							</div>
                      <div class="accordion_container">
        								<div class="accordion d-flex flex-row align-items-center"> RECOMENDACIONES</div>
        								<div class="accordion_panel">
        									<p id="aclaraciones"></p>
        								</div>
        							</div>

                      <div class="accordion_container">
        								<div class="accordion d-flex flex-row align-items-center"> INFORMACIÓN GENERAL</div>
        								<div class="accordion_panel">
        									<p id="informacion_general"></p>
        								</div>
        							</div>

        						</div>

                  </div>
                  <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                      </ol>
                      <div class="carousel-inner">

                        <div class="carousel-item active">
                          <img id="foto2_carousel" class="d-block w-100"  alt="Second slide" style="height: 400px;">
                        </div>
                        <div class="carousel-item">
                          <img id="foto3_carousel" class="d-block w-100"  alt="Third slide" style="height: 400px;">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                      </a>
                    </div>
                  </div>

                </div>
            </div>
        </div>


        <!-- Footer -->

        <?php require 'web/includes/footersec.php'?>

    </div>

  <?php require 'web/includes/scripts.php'?>

  <script type="text/javascript" src="web/scripts/footerdata.js"></script>
  <script type="text/javascript" src="web/scripts/paquete.js"></script>
  <script type="text/javascript">
    mostrar(<?php echo $idpaquetes ?>);
  </script>


</body>
</html>
