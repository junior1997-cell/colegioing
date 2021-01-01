<!DOCTYPE html>
<html lang="en">
<?php
include 'config/conexion.php';

$sql       = "SELECT*FROM comunicados where estado=1 ORDER by idcomunicado DESC LIMIT 2";
$resultado = ejecutarConsulta($sql);

?>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>CIP Consejo departamental de San Martin-Moyobamba</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <link rel="shortcut icon" href="web/images/logoOficial.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="web/styles/bootstrap4/bootstrap.min.css">
    <link href="web/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="web/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="web/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="web/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="web/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="web/styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="web/styles/production.css">
    <link rel="stylesheet" type="text/css" href="web/styles/loaders.css">
    <link rel="stylesheet" type="text/css" href="web/styles/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="web/styles/aos.css">
    <link rel="stylesheet" type="text/css" href="web/styles/swiper.css">
    <link rel="stylesheet" type="text/css" href="web/styles/responsi.css">
    <link rel="stylesheet" type="text/css" href="web/styles/estilo.css">
    <link rel="stylesheet" type="text/css" href="web/styles/lightgallery.min.css">
    <link rel="stylesheet" type="text/css" href="web/styles/modal.css">
</style>
</head>
<body>
    <div class="super_container">

        <!-- Header -->

        <header class="header d-flex flex-row">
            <div class="header_content d-flex flex-row align-items-center">
                <!-- Logo -->
                <div class="logo_container" style="padding-left: 10px;">
                    <div class="logo">
                        <img src="web/images/cip.png" alt="" width="200px;">
                        <span> &nbsp;</span>
                    </div>
                </div>

                <!-- Main Navigation -->
                <nav class="main_nav_container">
                    <div class="main_nav">
                        <ul class="main_nav_list">
                            <li class="main_nav_item"><a href="index.php">INICIO </a></li>
                            <li class="main_nav_item"><a href="paquetes.php">INSTITUCIÓN</a></li>
                            <li class="main_nav_item"><a href="pasajes.php">TRÁMITES</a></li>
                            <li class="main_nav_item"><a href="turismo.php">CAPÍTULOS</a></li>
                            <li class="main_nav_item"><a href="somos.php">SERVICIOS</a></li>
                            <li class="main_nav_item"><a href="contactanos.php">PUBLICACIONES</a></li>

                        </ul>
                    </div>
                </nav>
            </div>
            <div class="header_side d-flex flex-row justify-content-center align-items-center">
                <img src="web/images/phone-call.svg" alt="">
                <span id="telefono-h"></span>
            </div>

            <!-- Hamburger -->
            <div class="hamburger_container">
                <i class="fas fa-bars trans_200"></i>
            </div>

        </header>





<!-- Modal -->
<div class="modal fade" id="vervoleto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="nombre_voleto">Modal title</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
      <center>
        <p id="descripcion_voleto"></p>
        <img src="multimedia/voletos/noimg.png" class="img-thumbnail" id="foto_voleto">
    </center>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

</div>
</div>
</div>
</div>

</div>



<script src="web/js/jquery-3.2.1.min.js"></script>
<script src="web/styles/bootstrap4/popper.js"></script>
<script src="web/styles/bootstrap4/bootstrap.min.js"></script>
<script src="web/plugins/greensock/TweenMax.min.js"></script>
<script src="web/plugins/greensock/TimelineMax.min.js"></script>
<script src="web/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="web/plugins/greensock/animation.gsap.min.js"></script>
<script src="web/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="web/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="web/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="web/plugins/easing/easing.js"></script>
<script src="web/js/custom.js"></script>
<script src="web/js/elements_custom.js"></script>

<script src="web/js/main.js"></script>
<script src="web/js/owl.carousel.min.js"></script>
<script src="web/js/popper.min.js"></script>
<script src="web/js/loaders.css.js"></script>
<script src="web/js/aos.js"></script>
<script src="web/js/lightgallery-all.min.js"></script>
<script src="web/js/menu.js"></script>
<script src="web/js/swiper.min.js"></script>
<script src="web/js/modal.js"></script>

<!--  script for google maps   -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDadqvTI0dXKYyq2xoH6AhtJUTAkAthX-M"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/noisy/1.2/jquery.noisy.min.js'></script>
<script src="web/js/maps.js"></script>

</body>
</html>


