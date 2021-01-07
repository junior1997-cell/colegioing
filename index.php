<!DOCTYPE html>
<html lang="en">
    <?php
      include 'config/conexion.php';
      
      $sql       = "SELECT*FROM comunicados where estado=1 ORDER by idcomunicado DESC LIMIT 2";
      $resultado = ejecutarConsulta($sql);
      
      $eventosql = "SELECT*FROM eventos where estado=0 ORDER by idevento DESC LIMIT 2";
      $eventos = ejecutarConsulta($eventosql);
      // SUPERIOR IZQUIERDA--------------------------------------------------------------
      $eventosql_si = "SELECT*FROM eventos where estado=0 ORDER by idevento DESC LIMIT 4";
      $eventos_si = ejecutarConsulta($eventosql_si);
      $menor_si = 1000000000000000;
      while ($row_si = $eventos_si->fetch_assoc()) {
         
          $id_si = $row_si['idevento'];
      
          if($menor_si<$id_si){
              $menor_si= $menor_si;
          }else{
              $menor_si= $id_si;
          }   
      }
      // var_dump($menor); die;
      $eventosql_sii = "SELECT*FROM eventos where idevento='$menor_si'";
      $eventos_sii = ejecutarConsulta($eventosql_sii);
      // $imgsii = $eventos_sii->fetch_assoc();
      // $img1= $imgsii['foto'];
      // var_dump($img1);die;

      // SUPERIOR DERECHA--------------------------------------------------------------------
      $eventosql_sd = "SELECT*FROM eventos where estado=0 ORDER by idevento DESC LIMIT 3";
      $eventos_sd = ejecutarConsulta($eventosql_sd);
      $menor_sd = 1000000000000000;
      while ($row_sd = $eventos_sd->fetch_assoc()) {
         
          $id_sd = $row_sd['idevento'];
      
          if($menor_sd<$id_sd){
              $menor_sd= $menor_sd;
          }else{
              $menor_sd= $id_sd;
          }   
      }
      // var_dump($menor); die;
      $eventosql_sdd = "SELECT*FROM eventos where idevento='$menor_sd'";
      $eventos_sdd = ejecutarConsulta($eventosql_sdd);


      // INFERIOR IZQUIERDA-------------------------------------------------------------------
      $eventosql_ii = "SELECT*FROM eventos where estado=0 ORDER by idevento DESC LIMIT 2";
      $eventos_ii = ejecutarConsulta($eventosql_ii);
      $menor_ii = 1000000000000000;
      while ($row_ii = $eventos_ii->fetch_assoc()) {
         
          $id_ii = $row_ii['idevento'];
      
          if($menor_ii<$id_ii){
              $menor_ii= $menor_ii;
          }else{
              $menor_ii= $id_ii;
          }   
      }
      // var_dump($menor); die;
      $eventosql_iii = "SELECT*FROM eventos where idevento='$menor_ii'";
      $eventos_iii = ejecutarConsulta($eventosql_iii);

      // INFERIOR DERECHA-----------------------------------------------------------------------
      $eventosql_id = "SELECT*FROM eventos where estado=0 ORDER by idevento DESC LIMIT 1";
      $eventos_id = ejecutarConsulta($eventosql_id);
      $menor_id = 1000000000000000;
      while ($row_id = $eventos_id->fetch_assoc()) {
         
          $id_id = $row_id['idevento'];
      
          if($menor_id<$id_id){
              $menor_id= $menor_id;
          }else{
              $menor_id= $id_id;
          }   
      }
      // var_dump($menor); die;
      $eventosql_idd = "SELECT*FROM eventos where idevento='$menor_id'";
      $eventos_idd = ejecutarConsulta($eventosql_idd);

      $tevento = "SELECT COUNT(idevento) FROM eventos";
      $totalE = ejecutarConsulta($tevento);
    ?>

    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

      <link rel="stylesheet" type="text/css" href="web/styles/nav/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="web/styles/nav/css/framework.css">
      <link rel="stylesheet" type="text/css" href="web/styles/nav/css/layout.css">


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
   <body>
      <div class="super_container">
         <!-- Header -->
         <header class="header d-flex flex-row">
            <div class="header_content d-flex flex-row align-items-center">
               <!-- Logo -->
               <div class="logo_container" >
                  <div class="logo">
                     <img src="web/images/cip.png" alt="" width="200px;">
                     <span> &nbsp;</span>
                  </div>
               </div>
               <!-- Main Navigation -->
               <nav id="mainav" class="hoc clear main_nav_container"> 
    <ul>
      <li class="active"><a href="index.html">Inicio</a></li>
      <li><a class="drop" href="#">Institución</a>
        <ul>
          <li><a class="drop" href="#">Nosotros</a>
            <ul>
              <li><a href="#">Presentación</a></li>
              <li><a href="#">Misión</a></li>
              <li><a href="#">Visión</a></li>
              <li><a href="#">Objetivos</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Historia</a>
            <ul>
              <li><a href="#">Reseña Historica</a></li>
              <li><a href="#">Decanos y Periodos de Gestión</a></li>
              <li><a href="#">Himno</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Directiva</a>
            <ul>
              <li><a href="#">Miembros Del Consejo Departamental</a></li>
              <li><a href="#">Miembros Del CAP. Agronomos y Afines</a></li>
              <li><a href="#">Miembros Del CAP. Ambientales y Afines</a></li>
              <li><a href="#">Miembros Del CAP. Industriales y Afines</a></li>
              <li><a href="#">Miembros Del CAP. Civiles</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Documentos Normativos</a>
            <ul>
              <li><a href="#">Reglamentos</a></li>
              <li><a href="#">Leyes</a></li>
              <li><a href="#">Estatutos</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a class="drop" href="#">Trámites</a>
        <ul>
          <li><a class="drop" href="#">Colegiatura</a>
            <ul>
              <li><a href="#">Miembro Ordinario</a></li>
              <li><a href="#">Miembro Temporal</a></li>
              <li><a href="#">Miembro Vitalicio</a></li>
              <li><a href="#">Segunda Especialización</a></li>
              <li><a href="#">Prórroga De Colegiatura Temporal</a></li>
              <li><a href="#">Traslado De Consejo Departamental</a></li>
            </ul>
          </li>
           <li><a class="drop" href="#">Certificados De Habilidad</a>
            <ul>
              <li><a href="#">Certificado De Habilidad (A)</a></li>
              <li><a href="#">Certificado De Habilidad Para Obras Publicas (B)</a></li>
              <li><a href="#">Certificado De Habilidad Por Proyecto (C)</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Requisitos Para Colegiatura</a>
            <ul>
              <li><a href="#">Requisitos Para Colegiatura</a></li>
              <li><a href="#">Requisitos Para Cambio de Sede</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Tarifario</a>
            <ul>
              <li><a href="#">Tarifario CIP</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Otros</a>
            <ul>
              <li><a href="#">Duplicado De Carnet</a></li>
              <li><a href="#">Constancia De No Adeudo</a></li>
              <li><a href="#">Exoneración De Cuotas</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a class="drop" href="#">Capítulos</a>
        <ul>
            <li><a href="#">Agrónomos y Afines</a></li>  
            <li><a href="#">Ambientales y Afines</a></li> 
            <li><a href="#">Industriales y Afines</a></li> 
            <li><a href="#">Civiles</a></li>              
        </ul>
      </li>
      <li><a class="drop" href="#">Servicios</a>
        <ul>
          <li><a class="drop" href="#">Beneficio Al Colegiado</a>
            <ul>
              <li><a href="#">Instituto De Servicios Adicionales</a></li>
            </ul>
          </li>
           <li><a class="drop" href="#">Especialización De Ingeniería</a>
            <ul>
              <li><a href="#">Centros De Peritaje</a></li>
              <li><a href="#">Centros De Arbitraje</a></li>
              <li><a href="#">Centros De Certificación De Calidad</a></li>
               <li><a href="#">Comisión De Asuntos Municipales</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Capacitaciones</a>
            <ul>
              <li><a href="#">Diplomados, Cursos y Otros</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Alquiler</a>
            <ul>
              <li><a href="#">Ambientes y Mobiliarios</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a class="drop" href="#">Publicacion</a>
        <ul>
            <li><a href="#">Comunicados</a></li>  
            <li><a href="#">Eventos</a></li> 
            <li><a href="#">Noticias</a></li> 
            <li><a href="#">Ceremonias De Colegiatura</a></li>
            <li><a href="#">Actividades</a></li> 
            <li><a href="#">Convenios</a></li> 
            <li><a href="#">Galeria</a></li>               
        </ul>
      </li>
    </ul>
    <!-- ################################################################################################ -->
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
         <br>
         <br>
         <section>
            <div class="container recent" id="activity">
               <div class="row">
                  <div class="owl-carousel owl-carousel2 owl-theme">
                     <div>
                        <a href="https://cipvirtual.cip.org.pe/cas/login?service=https%3A%2F%2Fcipvirtual.cip.org.pe%2Fsiceseguridadweb%2Fj_spring_cas_security_check%3Bjsessionid%3DFauPLfqdCDu0n_gha9KS1Rs-UhObm5nm-xrLPzUA.serverweb%3Fspring-security-redirect%3D%2Finicio%2F" target="_blank">
                           <div class="card" src="">
                              <img class="card-img" src="web/images/tecnologia.png" alt="">
                              <div class="card-img-overlay">
                                 <img src="web/images/inalambrico.png" class="heart" alt="heart icon">
                                 <div class="bottom-text">
                                    <h5 class="card-title">CIP Virtual</h5>
                                    <p class="card-text">Ingresar</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div>
                        <a href="http://colegiados.cipmoyobamba.org/" target="_blank">
                           <div class="card">
                              <img class="card-img" src="web/images/graduacion.png" alt="">
                              <div class="card-img-overlay">
                                 <img src="web/images/sombrero.png" class="heart" alt="heart icon">
                                 <div class="bottom-text">
                                    <h5 class="card-title">Acceso Colegiados</h5>
                                    <p class="card-text">Ingresar</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div>
                        <a href="http://colegiados.cipmoyobamba.org/" target="_blank">
                           <div class="card">
                              <img class="card-img" src="web/images/grupal.png" alt="">
                              <div class="card-img-overlay">
                                 <img src="web/images/coordinar.png" class="heart" alt="heart icon">
                                 <div class="bottom-text">
                                    <h5 class="card-title">Oportunidad Laboral</h5>
                                    <p class="card-text">Revisar</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div>
                        <div class="card">
                           <img class="card-img" src="web/images/tramite.png" alt="">
                           <div class="card-img-overlay">
                              <a href="#"><img src="web/images/segtramite.png" class="heart" alt="heart icon"></a>
                              <div class="bottom-text">
                                 <h5 class="card-title">Seguimiento Trámite</h5>
                                 <p class="card-text">Buscar</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- COMUNICADOS -->
         <div class="popular page_section" style="padding: 30px">
            <div class="container">
               <div class="row">
                  <div class="col">
                     <div class="section_title text-center">
                        <section class="commdiv">
                           <div class="popular page_section " style="padding: 30px">
                              <div class="container">
                                 <div class="row">
                                    <div class="col">
                                       <div class="section_title text-center">
                                          <h1>COMUNICADOS</h1>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row my-5">
                                    <?php while ($row = $resultado->fetch_assoc()) {?>
                                    <div class="col-sm-6 col-lg-6">
                                       <div class="service-block-inner">
                                          <h3><?php echo $row['titulo']; ?></h3>
                                          <p><?php echo $row['descripcion']; ?></p>
                                          <span><b>Publicado el </b><?php echo $row['fecha']; ?></span>
                                       </div>
                                    </div>
                                    <?php }?>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                       <button type="button" class="btn btn-danger btn-sm " ><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> ver todos</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <section class="recent-posts page-section portfolio" id="portfolio">
            <div class="row">
               <div class="col">
                  <div class="section_title text-center">
                     <h1>EVENTOS</h1>
                  </div>
               </div>
            </div>
            <div class="row">
                <!-- =====================SUPERIOR IZQUIERDA========================== -->
                <?php while ($row1 = $eventos_sii->fetch_assoc()){?> 
                <div class="col-lg-6">
                  <div class="single-rpost d-sm-flex align-items-center" style="padding: 35px 35px 35px 35px !important" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                    <div class="row">
                        <div class="col-lg-6" style="padding: 40px 0px 0px 0px !important" >
                            <div class="post-content text-sm-right">
                                 
                                <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                                <h3>
                                    <span>
                                        <?php $img1 =$row1['foto'];  echo $row1['titulo']; ?>                                    
                                    </span>
                                </h3>

                                <p>
                                    <?php echo $row1['descripcion']; ?>                                
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6" style="padding: 0px 0px !important">
                            <div class="post-thumb  portfolio-item" data-toggle="modal" data-target="#portfolioModal1">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                   <div class="portfolio-item-caption-content text-center text-black"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="web/images/<?php echo $row1['foto']; ?>" style="height: 320px; width: 500px;" alt="Post 1">
                            </div>
                        </div>
                        </div>
                  </div>
               </div>
               <?php }?>

               <!-- ===========================SUPERIOR DERECHA================== -->
               <?php while ($row2 = $eventos_sdd->fetch_assoc()){ ?>
               <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" style="padding: 35px 35px 35px 35px !important" data-aos="fade-left" data-aos-duration="800">

                        <div class="post-thumb portfolio-item" data-toggle="modal" data-target="#portfolioModal2">

                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-black">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>

                            <img class="img-fluid" src="web/images/<?php echo $row2['foto']; ?>" style="height: 320px; width: 500px;" alt="Post 2">
                        </div>

                        <div class="post-content">

                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>

                            <h3>
                                <span>
                                    <?php $img2 =$row2['foto']; echo $row2['titulo']; ?>                                    
                                </span>
                            </h3>

                            <p>
                                <?php echo $row2['descripcion']; ?>                                
                            </p>
                        </div>
                  </div>
                </div>
                <?php }?>

                <!-- ===========================INFERIORR IZQUIERDA===================== -->
                <?php while ($row3 = $eventos_iii->fetch_assoc()){ ?>
                <div class="col-lg-6">
                  <div class="single-rpost d-sm-flex align-items-center" style="padding: 35px 35px 35px 35px !important" data-aos="fade-left" data-aos-delay="200"
                     data-aos-duration="800">
                     <div class="row">
                        <div class="col-lg-6" style="padding: 40px 0px 0px 0px !important" >
                        <div class="post-content text-sm-right">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3>
                                <span>
                                    <?php $img3 =$row3['foto']; echo $row3['titulo']; ?>                                    
                                </span>
                            </h3>
                            <p>
                                <?php echo $row3['descripcion']; ?>                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6" style="padding: 0px 0px !important">
                        <div class="post-thumb  portfolio-item" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                               <div class="portfolio-item-caption-content text-center text-black"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="web/images/<?php echo $row3['foto']; ?>" style="height: 320px; width: 500px;" alt="Post 1">
                        </div>    
                        </div>
                        </div>                    
                  </div>
                </div>
                <?php }?>

                <!-- ===========================INFERIORR DERECHA===================== -->
                <?php while ($row4 = $eventos_idd->fetch_assoc()){ ?>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" style="padding: 35px 35px 35px 35px !important" data-aos="fade-right" data-aos-delay="200"
                     data-aos-duration="800">
                        <div class="post-thumb  portfolio-item" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                               <div class="portfolio-item-caption-content text-center text-black"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="web/images/<?php echo $row4['foto']; ?>" style="height: 320px; width: 500px;" alt="Post 1">
                        </div>
                        <div class="post-content">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3>

                                <span>
                                    <?php $img4 =$row4['foto']; echo $row4['titulo']; ?>                                    
                                </span>
                            </h3>
                            <p>
                                <?php echo $row4['descripcion']; ?>                                
                            </p>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <!-- ==============================VER MAS EVENTOS============================ -->
            <div class="text-center">
               <a href="#" class="btn btn-primary">Ver masuyhrtfur Eventos</a>
            </div>
         </section>
            <!-- ==================IMAGEN SUPERIOR IZQUIERDA======================== -->
             
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                   <div class="modal-content">
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><i class="fas fa-times"></i></span>
                      </button>
                      <div class="modal-body text-center">
                         <div class="container">
                            <div class="row justify-content-center">
                               <div class="col-lg-8" >
                                <p>sasas</p>
                                  <img class="img-fluid rounded mb-5" src="web/images/<?php echo $img1; ?>" alt=""/>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
             

            <!-- ==================IMAGEN SUPERIOR DERECHA======================== -->
             
            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                   <div class="modal-content">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="modal-body text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                   <div class="col-lg-8" >                                     
                                      <img class="img-fluid rounded mb-5" src="web/images/<?php echo $img2; ?>" alt="" />
                                   </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
             
            <!-- ==================IMAGEN INFERIOR IZQUIERDA======================== -->
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                   <div class="modal-content">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="modal-body text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                   <div class="col-lg-8" >
                                      <img class="img-fluid rounded mb-5" src="web/images/<?php echo $img3; ?>" alt="" />
                                   </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>

            <!-- ==================IMAGEN INFERIOR DERECHA======================== -->
            <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                   <div class="modal-content">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="modal-body text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                   <div class="col-lg-8" >
                                      <img class="img-fluid rounded mb-5" src="web/images/<?php echo $img4; ?>" alt="" />
                                   </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>

             <section>
        <div class="container">
          <div class="clients" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                <div class="swiper-container clients-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="web/images/vuelo4.png" alt="Client 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="web/images/vuelo6.png" alt="Client 2">
                        </div>
                        <div class="swiper-slide">
                            <img src="web/images/vuelo4.png" alt="Client 3">
                        </div>
                        <div class="swiper-slide">
                            <img src="web/images/vuelo5.png" alt="Client 4">
                        </div>
                        <div class="swiper-slide">
                            <img src="web/images/vuelo6.png" alt="Client 5">
                        </div>
                    </div>
                    <div class="test-pagination"></div>
                </div>
            </div>
        </div>
    </section>



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
                     <span>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados por <i class="fa fa-heart" aria-hidden="true"></i> <a href="http://www.issi.pe/" target="_blank">ISSI</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     </span>
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
      <script src="web/js/main.js"></script>
      <script src="web/js/owl.carousel.min.js"></script>
      <script src="web/js/popper.min.js"></script>
      <script src="web/js/loaders.css.js"></script>
      <script src="web/js/aos.js"></script>
      <script src="web/js/lightgallery-all.min.js"></script>
      <script src="web/js/menu.js"></script>
      <script src="web/js/swiper.min.js"></script>
      <script src="web/js/modal.js"></script>

      <script src="web/js/nav/js/jquery.backtotop.js"></script>
      <script src="web/js/nav/js/jquery.min.js"></script>
      <script src="web/js/nav/js/jquery.mobilemenu.js"></script>
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
    </body>
</html>