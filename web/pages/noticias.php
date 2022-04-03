<?php
require 'header.php';

include '../../config/conexion.php';

$sql = "SELECT * FROM eventos WHERE estado=0 ORDER BY idevento DESC";
$notieventos = ejecutarConsulta($sql);

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

<!-- Start All Title Box -->
<div class="all-title-boxx">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Noticias y Eventos</h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <center>
                <hr style="background-color: red;" />
            </center>
        </div>
    </div>

    <ul id="myList">
        <?php while ($row = $notieventos->fetch_assoc()) { ?>
            <li>
                <div class="container" style="box-shadow: 2px 2px 2px 1px rgb(0 0 0 / 20%);">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ">
                            <div class="ecfecto" style="padding: 20px;">

                                <?php if (!empty($row['foto'])) { ?>
                                    <img src="../../multimedia/eventos/<?php echo $row['foto']; ?>" onerror="this.src='../images/comunicados_defaull.png'" >
                                <?php } else { ?>
                                    <img src="../images/comunicados_defaull.png">
                                <?php } ?>

                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="    box-shadow: -0.4em 0 #dfc73c;">
                            <br>
                            <span class="badge bg-success"><?php echo $row['tipopublicacion']; ?> >></span>
                            <br>
                            <strong style="font-size: 25px; font-family: fangsong;"><?php echo $row['titulo']; ?></strong>
                            <p class="conten">

                            </p>
                            <p class="conten">
                            <?php echo $row['descripcion']; ?>
                            </p>
                            <strong class="conten" style="color:#D55E5E ;">Inicio 25 de enero de 2021 <?php echo $row['fecha']; ?></strong>
                            <hr style="background-color: red; height: 2px;" />
                        </div>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>

    <div class="continaer">
        <div class="row" style="margin: 10px;">
            <div class="col-6">
                <div id="loadMore" style="text-align: end;">
                    <button class="btn btn-primary btn-sm">
                        <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                        Mostrar más</button>
                </div>
            </div>
            <div class="col-6">

                <div id="showLess">
                    <button class="btn btn-danger btn-sm">
                        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                        Mostrar menos</button>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #myList li {
        display: none;
    }

    #loadMore {
        color: green;
        cursor: pointer;
    }

    #loadMore:hover {
        color: black;
    }

    #showLess {
        color: red;
        cursor: pointer;
    }

    #showLess:hover {
        color: black;
    }

    .imagen {
        width: 100%;
        height: 100%;
        padding: 10px;
        border-radius: 17px;

    }

    .conten {
        text-align: justify;
        color: #666;
        font-size: 17px;
    }
</style>

<?php
require 'footer1.php';
?>

<script>
    $(document).ready(function() {
        size_li = $("#myList li").size();
        x = 1;
        $('#myList li:lt(' + x + ')').show();
        $('#loadMore').click(function() {
            x = (x + 1 <= size_li) ? x + 1 : size_li;
            $('#myList li:lt(' + x + ')').show();
        });
        $('#showLess').click(function() {
            x = (x - 1 < 1) ? 1 : x - 1;
            $('#myList li').not(':lt(' + x + ')').hide();
        });
    });
</script>