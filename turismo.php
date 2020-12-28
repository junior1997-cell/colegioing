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
                <h1 >LUGARES TURISTICOS</h1>
            </div>
        </div>

        <!-- Popular -->

        <div class="popular page_section" style="padding-top: 10px;">
            <div class="container">

                <div class="row course_boxes" id="turismo_data">

                </div>
            </div>
        </div>

        <!-- Footer -->

        <?php require 'web/includes/footersec.php'?>

    </div>

  <?php require 'web/includes/scripts.php'?>
  <script type="text/javascript" src="web/scripts/footerdata.js"></script>
  <script type="text/javascript" src="web/scripts/turismo.js"></script>

  </script>

</body>
</html>
