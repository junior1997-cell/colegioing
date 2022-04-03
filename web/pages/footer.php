    <?php
    include '../../config/conexion.php';

    $sql = "SELECT*FROM empresa";
    $objetivo = ejecutarConsulta($sql);

    $contact = "SELECT * FROM contactanos";
    $contactanos = ejecutarConsulta($contact);
    $sql = "SELECT * FROM galeria WHERE estado = '0' ORDER BY idgaleria";
    $galeria = ejecutarConsulta($sql);

    ?>
    <!--<link rel="stylesheet" href="css/footer.css">



   Start Footer  -->


    <!-- Start Instagram Feed  -->
    
    <div class="instagram-box" style="padding: 30px 0px!important;">
    
        <div class="main-instagram owl-carousel owl-theme">
        <?php while ($row = $galeria->fetch_assoc()) { ?>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../../multimedia/galeria/<?php echo $row['foto']; ?>"/>
                    <div class="hov-in">
                        <a href="#"><i class="fa fa-camera-retro"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?> 
        </div>
        
    </div>
    
    <!-- End Instagram Feed style="background:#5f5e5c8c!important;" -->
    <footer>
        <div class="footer-main"  style="padding: 0px 0px!important;">
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">

                        <a class="navbar-brand" href="index.php"><img src="../images/logo-default.png" width="250" class="logo" alt=""></a>
			<br><br><br><br>
                        <div class="footer-widget">
                            <?php while ($row = $objetivo->fetch_assoc()) { ?>
                                <p><?php echo $row['valores']; ?></p>
                            <?php } ?>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>CONTÁCTENOS</h4>
                            <?php while ($row = $contactanos->fetch_assoc()) { ?>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Dirección: <?php echo $row['direccion']; ?> </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Teléfono: <?php echo $row['telefono']; ?></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>E-mail: <?php echo $row['email']; ?> </p>
                                </li>
                            </ul>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                                                <div class="row">
                            <div class="col-lg-6 col-md-16 col-sm-12">
                                <div class="footer-widget">
                                    <h4> <i fas fa-calendar-week text-color-light></i>  ATENCIÓN</h4>
                                    <ul class="list list-icons list-icons-lg text-left">
                                        <li class="mb-1 pl-0">
                                            <p class="text-color-light" style="font-size: 18px; color:white; padding-bottom: 1px;">Lunes a Viernes </p>
                                        </li>
                                        <li class="mb-1 ">
                                            <p class="m-0 text-color-light" style="padding-bottom: 1px;"><i class="fas fa-clock text-color-light"> </i> 8:00am a 1:00pm</p>
                                        </li>
                                        <li class="mb-1 ">
                                            <p class="m-0 text-color-light" style="padding-bottom: 1px;"><i class="fas fa-clock text-color-light"> </i> 3:00pm a 6:00pm</p>
                                        </li>
                                    </ul>

                                    <ul class="list list-icons list-icons-lg text-left">
                                        <li class="mb-1 pl-0">
                                            <p class="text-color-light" style="font-size: 18px; color:white; padding-bottom: 1px;">Sábados </p>
                                        </li>
                                        <li class="mb-1 ">
                                            <p class="m-0 text-color-light"><i class="fas fa-clock text-color-light"> </i> 9:00am a 12:00pm</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-16 col-sm-12">
                                <div class="footer-widget" style="margin-bottom: 0px!important;">
                                    <h4> <i fas fa-calendar-week text-color-light></i> INTRANET</h4>
                                    <ul class="list list-icons list-icons-lg text-left">
                                        <li class="mb-1 pl-0">
                                            <a href="../../admin/index.html" style="color:aliceblue;" target="_blank">
                                            <i class="fa fa-user" aria-hidden="true"></i> Web Master</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <img src="../images/issi-logo4.fw.png">
        <p class="footer-company">Todos los derechos son reservados. &copy; 2021 <a href="http://issi.pe/">Ingeniería en Servicios y Soluciones Informáticas</a> ISSI S.A.C
        </p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/jquery.superslides.min.js"></script>
    <script src="../js/bootstrap-select.js"></script>
    <script src="../js/inewsticker.js"></script>
    <script src="../js/bootsnav.js."></script>
    <script src="../js/images-loded.min.js"></script>
    <script src="../js/isotope.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/baguetteBox.min.js"></script>
    <script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/all.js"></script>
    <script src="../js/eventos.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </body>
    <!--#6b202e
negro
 #282828-->

    </html>