<?php
require 'header.php';
include '../../config/conexion.php';
$sql         = "SELECT*FROM comunicados where estado=0 ORDER by idcomunicado DESC LIMIT 2";
$comunicados = ejecutarConsulta($sql);

$sql      = "SELECT * FROM carousel WHERE estado = '0' ORDER BY idcarousel";
$carousel = ejecutarConsulta($sql);

$sql      = "SELECT * FROM empresa";
$nosotros = ejecutarConsulta($sql);

?>

<!-- Start Top Search -->
<div class="top-search">
  <div class="container">
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-search"></i></span>
      <input type="text" class="form-control" placeholder="Search">
      <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
    </div>
  </div>
</div>
<!-- End Top Search -->

<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
  <ul class="slides-container">
    <?php while ($row = $carousel->fetch_assoc()) { ?>
      <li class="text-center">
        <img src="../../multimedia/carousel/<?php echo $row['foto']; ?>" alt="">
        <div class="container">
          <div class="row">
            <div class="col-md-12 banner-cell">
              <h1 style="font-family:CLAN PRO THIN" class="m-b-20"><strong>BIENVENIDOS Al CONSEJO<br> Departamental de </strong></h1>
              <h1 style="font-family:Brush Script MT">San Martín <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Moyobamba:Moyobamba:Moyobamba" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
            </div>

          </div>
        </div>
      </li>
    <?php } ?>
  </ul>
  <div class="slides-navigation">
    <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
    <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
  </div>
</div>

<div class="categories-shop">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
        <div class="shop-cat-box">
          <img class="img-fluid" src="../images/tecnologiam.jpg" alt="" />
          <a class="btn hvr-hover" href="https://cipvirtual.cip.org.pe/">Virtual CIP</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
        <div class="shop-cat-box">
          <img class="img-fluid" src="../images/graduacionm.jpg" alt="" />
          <a class="btn hvr-hover" href="http://colegiados.cipmoyobamba.org/">Acceso Colegiados</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
        <div class="shop-cat-box">
          <img class="img-fluid" src="../images/grupalm.jpg" alt="" />
          <a class="btn hvr-hover" href="oplaborales.php">Oportunidad Laboral</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
        <div class="shop-cat-box">
          <img class="img-fluid" src="../images/tramitem.jpg" alt="" />
          <a class="btn hvr-hover" href="#">Seguimiento trámite</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Categories -->

<div class="latest-blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title-all text-center" style="margin-bottom: 1px;">
          <h1>Comunicados</h1>
          <p>A NUESTRA COMUNIDAD DE COLEGIADOS</p>
        </div>
      </div>
    </div>
    <div class="row">
      <?php while ($row = $comunicados->fetch_assoc()) { ?>

        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="margin-top: 10px;">
          <div class="card h-100 divdecoration">
            <?php if (!empty($row['foto'])) { ?>
              <img src="../../multimedia/comunicados/<?php echo $row['foto']; ?>" class="card-img-top" style="  max-height: 325px; max-width: 100%;" alt="comunicado" onerror="this.src='../images/comunicados_defaull.png'">
            <?php } else { ?>
              <img src="../images/comunicados_defaull.png" class="card-img-top" style="  max-height: 325px; max-width: 100%;" alt="Logo">
            <?php } ?>

            <div class="card-body">
              <h3><?php echo $row['titulo']; ?></h3>
              <textarea style="border: #D7B56D 5px solid; padding: 4px; margin-bottom: 10px;" class="form-control" rows="4"> <?php echo $row['descripcion']; ?></textarea>
              <span style="color: red; font-weight: bold;">Actualizado al <?php echo $row['fecha']; ?></span>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <center style="margin: 5px;">
      <a href="comunicados.php">
        <button type="button" class="btn btn-warning">Ver más
          <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></i> </button>
      </a>
    </center>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="title-all text-center">
        <h1>Eventos</h1>
        <p>Consejo Departamental de San Martín - Moyobamba</p>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">

    <div class="col-md-9">
      <div id="carousel-main " class="carousel slide " data-ride="carousel" data-interval="5000">
        <!-- Carousel items -->
        <div class="carousel-inner enventosg">
          <div class="active item">
            <img src="../images/evento1.png">
          </div>
          <div class="item">
            <img src="../images/evento2.png">
          </div>
          <div class="item">
            <img src="../images/evento6.jpg">
          </div>
          <div class="item">
            <img src="../images/evento3.png">
          </div>
        </div>


        <!-- Controls -->
        <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="col-md-3">
      <div id="carousel-pager" class="carousel slide " data-ride="carousel" data-interval="1000">
        <!-- Carousel items -->
        <div class="carousel-inner vertical enventosp">
          <div class="active item">
            <img src="../images/evento1.png" class="img-responsive" data-target="#carousel-main" data-slide-to="0">
          </div>
          <div class="item">
            <img src="../images/evento2.png" class="img-responsive" data-target="#carousel-main" data-slide-to="1">
          </div>
          <div class="item">
            <img src="../images/evento6.jpg" class="img-responsive" data-target="#carousel-main" data-slide-to="1">
          </div>
          <div class="item">
            <img src="../images/evento3.png" class="img-responsive" data-target="#carousel-main" data-slide-to="1">
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-pager" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-pager" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInicio">
  Launch demo modal
</button>
 MODAL SE ABRE AL ESTAR EN EL INICIO
<div class="modal fade" id="modalInicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>-->

<div class="about-box-main">
  <div class="container">
    <div class="col-lg-12">
      <div class="title-all text-center">
        <h1>Nosotros</h1>
        <p>Consejo Departamental de San Martín - Moyobamba</p>
      </div>
    </div>
    <?php while ($row = $nosotros->fetch_assoc()) { ?>
      <div class="row">
        <div class="col-lg-6">
          <div class="banner-frame ecfecto ">
            <img class="img-fluid " src="../images/colegio.jpg" alt="" style="border-radius: 8px !important;" />
          </div>
        </div>
        <div class="col-lg-6">
          <h4 class="noo-sh-title-top" style="text-align: justify;"><span> PRESENTACIÓN</span></h4>
          <p style="text-align: justify; font-size: 17px;"><?php echo $row['descripcion']; ?></p>
          <h4 class="noo-sh-title-top" style="text-align: justify;"><span> OBJETIVOS</span></h4>
          <p style="text-align: justify; font-size: 17px;"><?php echo $row['valores']; ?></p>

        </div>
      </div>
    <?php } ?>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $("#modalInicio").modal("show");
  });
</script>

<!-- End Blog  -->
<?php
require 'footer.php';
?>