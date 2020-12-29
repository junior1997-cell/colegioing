<!DOCTYPE html>
<html lang="en">

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
    <style media="screen">
    .img-org{
      -webkit-filter: brightness(0.9) !important;
      filter: brightness(0.5) !important;
    }

    </style>
    <style>
      .map-responsive {
        overflow: hidden;
        padding-bottom: 300px;
        position: relative;
        height: 0;
      }
      #map {

        height: 300px;
        width: 100%;
      }
    </style>
</head>
<div class="top-bar">
<i class="fa fa-university" aria-hidden="true"></i>
    <!--<div class="padre">
        <div class="hijo">COLEGIO DE INGENIEROS DEL PERÚ</div>
    <div>-->
</div>

<body>

    <audio id="audio_inicio" src="web/aves.mpeg" autoplay="false" loop="true"></audio>
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


          <!-- Menu -->
        <div class="menu_container menu_mm">

            <!-- Menu Close Button -->
            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>

            <!-- Menu Items -->
            <div class="menu_inner menu_mm">
                <div class="menu menu_mm">
                    <ul class="menu_list menu_mm">
                        <li class="menu_item menu_mm"><a href="index.php">INICIO</a></li>
                        <li class="menu_item menu_mm"><a href="paquetes.php">COMUNICADOS</a></li>
                        <li class="menu_item menu_mm"><a href="pasajes.php">PASAJES</a></li>
                        <li class="menu_item menu_mm"><a href="turismo.php">TURISMO</a></li>
                        <li class="menu_item menu_mm"><a href="somos.php">EMPRESA</a></li>
                        <li class="menu_item menu_mm"><a href="contactanos.php">CONTACTANOS</a></li>
                    </ul>

                    <!-- Menu Social -->

                    <div class="menu_social_container menu_mm">
                        <ul class="menu_social menu_mm">

                            <li class="menu_social_item menu_mm"><a href="https://www.instagram.com/jaexpeditions/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="https://www.facebook.com/planeaviajar/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="https://twitter.com/expeditions_a" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>

                    <div class="menu_copyright menu_mm">ISSI Todos derechos reservados</div>
                </div>

            </div>

        </div>


        <!-- Home -->

        <div class="home">

            <!-- Hero Slider -->
            <div class="hero_slider_container">
                <div class="hero_slider owl-carousel" id="slider_data">

                </div>

                <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200"><i class="fa fa-chevron-left" aria-hidden="true"></i></span></div>
                <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></div>
            </div>

        </div>



        <!-- COMUNICADOS -->
        
        <div class="popular page_section" style="padding: 30px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title text-center">
                            <h1>COMUNICADOS</h1>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                <div class="col-sm-4 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Somos de confianza</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Nosotros somos expertos</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Nosotros somos expertos</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
            </div>

                <div class="row course_boxes" id="paquetes_data">


                </div>

                <div class="col-md-12">
                  <br>
                  <center>
                    <a href="paquetes.php" class="btn btn-info">Ver más tours</a>
                  </center>

                </div>

            </div>
        </div>
        <!-- PASAJES TERRESTRES -->
        <div class="popular page_section" style="padding: 30px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title text-center">
                            <h1>PASAJES TERRESTRES</h1>
                        </div>
                    </div>
                </div>

                <div class="row course_boxes" style="margin-top : 10px;" id="pasajes_t_data">


                </div>


            </div>
        </div>
        <!-- PASAJES AEREOS -->
        <div class="popular page_section" style="padding: 30px">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title text-center">
                            <h1>PASAJES AEREOS</h1>
                        </div>
                    </div>
                </div>

                <div class="row course_boxes" style="margin-top : 10px;" id="pasajes_a_data">


                </div>

                <div class="row">

                  <div class="col-md-12">
                      <br>
                    <center>
                      <a href="pasajes.php" class="btn btn-info">Ver más pasajes</a>
                    </center>

                  </div>
                </div>
            </div>
        </div>


        <div class="popular page_section" style="padding: 30px">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                      <center>
                        <iframe width="100%" height="450" src="https://www.youtube.com/embed/3xvVqo9teXA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                      </center>
                    </div>
                </div>

            </div>
        </div>


        <!-- Footer -->

        <footer class="footer" style="padding: 15px !important;">
          <div class="row">
              <div class="col">
                  <div class="section_title text-center">
                      <h1>NUESTROS CONVENIOS</h1>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <center>
                <img draggable="false" class="img-org" src="web/images/org2.png" width="150px;">
              </center>
            </div>
            <div class="col-md-4">
              <center>
                <img draggable="false" class="img-org" src="web/images/org1.png" width="150px;">
              </center>

            </div>
            <div class="col-md-4">
              <center>
                <img draggable="false" class="img-org" src="web/images/org3.png" width="150px;">
              </center>

            </div>
          </div>
            <div class="container">

                <!-- Newsletter -->

                <div class="newsletter" style="padding-bottom: 15px !important;">
                    <div class="row">
                        <div class="col">
                            <div class="section_title text-center">
                                <h1>UBIQUENOS Y CONTACTENOS</h1>
                            </div>
                        </div>
                    </div>

                    <div class="map-responsive">
                        <div id="map"></div>
                    </div>

                </div>

                <!-- Footer Content -->

                <div class="footer_content" style="padding: 15px !important;">
                    <div class="row">

                        <!-- Footer Column - About -->
                        <div class="col-lg-6 footer_col">

                            <!-- Logo -->
                            <div class="logo_container">
                                <div class="logo">
                                    <img src="web/images/logo-ex.png" width="240px;" alt="">
                                </div>
                            </div>

                            <p class="footer_about_text" id="descripcion"></p>

                        </div>

                        <!-- Footer Column - Menu -->

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">MENÚ</div>
                            <div class="footer_column_content">
                                <ul>
                                  <li class="footer_list_item"><a href="http://planeaviajar.com/">INICIO</a></li>
                                  <li class="footer_list_item"><a href="paquetes.php">COMUNICADOS</a></li>
                                  <li class="footer_list_item"><a href="pasajes.php">PASAJES</a></li>
                                  <li class="footer_list_item"><a href="turismo.php">TURISMO</a></li>
                                  <li class="footer_list_item"><a href="somos.php">EMPRESA</a></li>
                                  <li class="footer_list_item"><a href="contactanos.php">CONTACTANOS</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column - Usefull Links -->



                        <!-- Footer Column - Contact -->

                        <div class="col-lg-3 footer_col">
                            <div class="footer_column_title">CONTACTANOS</div>
                            <div class="footer_column_content">
                                <ul>
                                    <li class="footer_contact_item">
                                        <div class="footer_contact_icon">
                                            <img src="web/images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                        </div>
                                        <span id="direccion"></span>
                                    </li>
                                    <li class="footer_contact_item">
                                        <div class="footer_contact_icon">
                                            <img src="web/images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                        </div>
                                        <span id="telefono-f"></span>
                                    </li>
                                    <li class="footer_contact_item">
                                        <div class="footer_contact_icon">
                                            <img src="web/images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                        </div>
                                        <span id="email"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Copyright -->

                <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                    <div class="footer_copyright">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados por <i class="fa fa-heart" aria-hidden="true"></i> <a href="http://www.issi.pe/" target="_blank">ISSI</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                    <div class="footer_social ml-sm-auto">
                        <ul class="menu_social">

                            <li class="menu_social_item"><a href="https://www.instagram.com/jaexpeditions/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li class="menu_social_item"><a href="https://www.facebook.com/planeaviajar/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="menu_social_item"><a href="https://twitter.com/expeditions_a" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </footer>



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

    <!--  script for google maps   -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDadqvTI0dXKYyq2xoH6AhtJUTAkAthX-M"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/noisy/1.2/jquery.noisy.min.js'></script>
    <script src="web/js/maps.js"></script>


    <script type="text/javascript" src="web/scripts/inicio.js"></script>
    <script>
        function innit() {
          $.post("ajax/CCarousel.php?op=listar_web", {
          }, function(data, status) {
            $("#slider_data").html(data);
            $('#slider_data').trigger('destroy.owl.carousel');
            $("#slider_data").owlCarousel({
              items:1,
              loop:true,
              smartSpeed:800,
              autoplay:true,
              nav:false,
              dots:false
            });

          });

        };

        innit();
    </script>





    </script>

</body>
</html>