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
                <h1 style="font-size: 60px !important;">PASAJES</h1>
            </div>
        </div>

        <!-- Popular -->

        <!-- PASAJES TERRESTRES -->
        <div class="popular page_section" style="margin: 10px;padding: 10px;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title text-center">
                            <h1>TERRESTRES</h1>
                        </div>
                    </div>
                </div>

                <div class="row course_boxes" style="margin: 10px;padding: 10px;" id="pasajes_t_data">


                </div>
            </div>
        </div>
        <!-- PASAJES AEREOS -->
        <div class="popular page_section" style="padding-top: 10px;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title text-center">
                            <h1> AEREOS</h1>
                        </div>
                    </div>
                </div>

                <div class="row course_boxes" style="margin: 10px;padding: 10px;" id="pasajes_a_data">


                </div>
            </div>
        </div>

        <!-- Footer -->

        <?php require 'web/includes/footersec.php'?>
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

  <?php require 'web/includes/scripts.php'?>
  <script src="web/scripts/pasajes.js"></script>

</body>
</html>
