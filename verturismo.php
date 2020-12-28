<!DOCTYPE html>
<html lang="en">

<?php require 'web/includes/headsec.php'?>
<?php
$idturisticos= $_POST["idturisticos"];
if($idturisticos==""||$idturisticos==null){
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
                <h1 id="titulo_turismo"></h1>
            </div>
        </div>

        <!-- Popular -->

        <!-- PASAJES TERRESTRES -->
        <div class="popular page_section" style="padding:10px;">
            <div class="container-fluid">

                <div class="row course_boxes" style="margin: 10px;">
                  <!-- Accordions -->

      						<div class="col-md-6">



                    <div class="jumbotron" style="padding-top:10px;">

                    <p class="lead" style="margin-bottom: 5px;">DESCRIPCIÓN</p>
                    <hr class="my-4">
                    <p id="descripcion_turismo"> </p>

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
  <script type="text/javascript" src="web/scripts/verturismo.js"></script>
  <script type="text/javascript">
    mostrar(<?php echo $idturisticos ?>);
  </script>


</body>
</html>
