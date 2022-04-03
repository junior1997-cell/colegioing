<?php
require 'header.php';
include '../../config/conexion.php';

$sql = "SELECT * FROM capitulos where estado = 0 and idcapitulos=2";
$descr_agronomos = ejecutarConsulta($sql);
$sql = "SELECT * FROM capitulos where estado = 0 and idcapitulos=1";
$descr_ambt = ejecutarConsulta($sql);
$sql = "SELECT * FROM capitulos where estado = 0 and idcapitulos=3";
$descr_indust = ejecutarConsulta($sql);
$sql = "SELECT * FROM capitulos where estado = 0 and idcapitulos=4";
$descr_civiles = ejecutarConsulta($sql);
//----------------------------
$sql = "SELECT * FROM directiva WHERE id_tipo_directiva =2 AND estado_directiva =0";
$agronomos = ejecutarConsulta($sql);
$sql = "SELECT * FROM directiva WHERE id_tipo_directiva =3 AND estado_directiva =0";
$ambientales = ejecutarConsulta($sql);
$sql = "SELECT * FROM directiva WHERE id_tipo_directiva =4 AND estado_directiva =0";
$insdustriales = ejecutarConsulta($sql);
$sql = "SELECT * FROM directiva WHERE id_tipo_directiva =5 AND estado_directiva =0";
$civiles = ejecutarConsulta($sql);


?>
<link rel="stylesheet" href="../css/directiva.css">


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
                <h2>CAPÍTULOS</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="title-all text-center">
                <hr style="background-color: red!important; font-weight: bold;">
            </div>
        </div>
    </div>
</div>

<!-- End All Title Box -->
<div class="container">
    <div class="row">
        <div class="col-sm-9"></div>
        <div class="row">

        </div>
    </div>

    <div class="row orden">
        <div class="col-sm-8 col-md-8 col-lg-9 uno ">
            <!--++++++++++++***1****+++++++-->
            <div class=" col-lg-12 tabcontent " id="Home">
                <?php while ($row = $descr_agronomos->fetch_assoc()) { ?>
                    <div class="title-all text-center">
                        <p style="color:#E31E24; font-weight: bold;">CAPÍTULO <?php echo $row['titulo']; ?></p>
                    </div>
                    <div class="row">

                        <div class="col-lg-5">
                            <br>
                            <p class="capt" style="text-align: justify;">
                                <?php echo $row['descripcion']; ?>
                            </p>
                        </div>
                        <div class="col-lg-7">
                            <img id="imagen" src="../../multimedia/capitulos/<?php echo $row['foto']; ?>" alt="" style="width: 100%;height: 98%;">
                        </div>

                    </div>
                <?php } ?>
                <br>
                <div class="row">
                    <p style="color:#E31E24; font-weight: bold;">DIRECTIVA</p>
                    <div class="table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <tr style="background-color: #126d2d; color:white;">
                                    <th>#</th>
                                    <th>CIP</th>
                                    <th>CARGO</th>
                                    <th>MIEMBRO</th>
                                    <th>CORREO</th>
                                </tr>
                            </thead>
                            <?php $id = 1;
                            while ($row = $agronomos->fetch_assoc()) { ?>
                                <tbod>
                                    <tr>
                                        <td><?php echo $id++; ?></td>
                                        <td><?php echo $row['cip_directiva']; ?></td>
                                        <td><?php echo $row['cargo_directiva']; ?></td>
                                        <td><?php echo $row['miembro_directiva']; ?></td>
                                        <td><?php echo $row['correo_directiva']; ?></td>
                                    </tr>
                                </tbod>
                            <?php } ?>
                            <tfoot>
                                <tr style="background-color:#126d2d;">
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
            <!--++++++++++++***2****+++++++-->
            <div class=" col-lg-12 tabcontent" id="News">
                <?php while ($row = $descr_ambt->fetch_assoc()) { ?>
                    <div class="title-all text-center">
                        <p style="color:#E31E24; font-weight: bold;">CAPÍTULO <?php echo $row['titulo']; ?></p>
                    </div>
                    <div class="row">

                        <div class="col-lg-5">
                            <p class="capt" style="text-align: justify;">
                                <?php echo $row['descripcion']; ?>
                            </p>
                        </div>
                        <div class="col-lg-7">
                            <img id="imagen" src="../../multimedia/capitulos/<?php echo $row['foto']; ?>" alt="" style="width: 100%;height: 85%;">
                        </div>

                    </div>
                <?php } ?>
                <br>
                <div class="row">
                    <p style="color:#E31E24; font-weight: bold;">DIRECTIVA</p>
                    <div class="table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <tr style="background-color: #0da187; color:white;">
                                    <th>#</th>
                                    <th>CIP</th>
                                    <th>CARGO</th>
                                    <th>MIEMBRO</th>
                                    <th>CORREO</th>
                                </tr>
                            </thead>
                            <?php $id = 1;
                            while ($row = $ambientales->fetch_assoc()) { ?>
                                <tbod>
                                    <tr>
                                        <td><?php echo $id++; ?></td>
                                        <td><?php echo $row['cip_directiva']; ?></td>
                                        <td><?php echo $row['cargo_directiva']; ?></td>
                                        <td><?php echo $row['miembro_directiva']; ?></td>
                                        <td><?php echo $row['correo_directiva']; ?></td>
                                    </tr>
                                </tbod>
                            <?php } ?>
                            <tfoot>
                                <tr style="background-color:#0da187;">
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
            <!--++++++++++++***3****+++++++-->
            <div class=" col-lg-12 tabcontent" id="Contact">
                <?php while ($row = $descr_indust->fetch_assoc()) { ?>
                    <div class="title-all text-center">
                        <p style="color:#E31E24; font-weight: bold;">CAPÍTULO <?php echo $row['titulo']; ?></p>
                    </div>
                    <div class="row">

                        <div class="col-lg-5">
                            <br>
                            <p class="capt" style="text-align: justify;">
                                <?php echo $row['descripcion']; ?>
                            </p>
                        </div>
                        <div class="col-lg-7">
                            <img id="imagen" src="../../multimedia/capitulos/<?php echo $row['foto']; ?>" alt="" style="width: 100%;height: 98%;">
                        </div>

                    </div>
                <?php } ?>
                <br>
                <div class="row">
                    <p style="color:#E31E24; font-weight: bold;">DIRECTIVA</p>
                    <div class="table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <tr style="background-color: #e02b20; color:white;">
                                    <th>#</th>
                                    <th>CIP</th>
                                    <th>CARGO</th>
                                    <th>MIEMBRO</th>
                                    <th>CORREO</th>
                                </tr>
                            </thead>
                            <?php $id = 1;
                            while ($row = $insdustriales->fetch_assoc()) { ?>
                                <tbod>
                                    <tr>
                                        <td><?php echo $id++; ?></td>
                                        <td><?php echo $row['cip_directiva']; ?></td>
                                        <td><?php echo $row['cargo_directiva']; ?></td>
                                        <td><?php echo $row['miembro_directiva']; ?></td>
                                        <td><?php echo $row['correo_directiva']; ?></td>
                                    </tr>
                                </tbod>
                            <?php } ?>
                            <tfoot>
                                <tr style="background-color:#e02b20;">
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
            <!--++++++++++++***4****+++++++-->
            <div class=" col-lg-12 tabcontent" id="About">
                <?php while ($row = $descr_civiles->fetch_assoc()) { ?>
                    <div class="title-all text-center">
                        <p style="color:#E31E24; font-weight: bold;">CAPÍTULO <?php echo $row['titulo']; ?></p>
                    </div>
                    <div class="row">

                        <div class="col-lg-5">
                            <br>
                            <p class="capt" style="text-align: justify;">
                                <?php echo $row['descripcion']; ?>
                            </p>
                        </div>
                        <div class="col-lg-7">
                            <img id="imagen" src="../../multimedia/capitulos/<?php echo $row['foto']; ?>" alt="" style="width: 100%;height: 98%;">
                        </div>

                    </div>
                <?php } ?>
                <br>
                <div class="row">
                    <p style="color:#E31E24; font-weight: bold;">DIRECTIVA</p>
                    <div class="table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <tr style="background-color:#a80101; color:white;">
                                    <th>#</th>
                                    <th>CIP</th>
                                    <th>CARGO</th>
                                    <th>MIEMBRO</th>
                                    <th>CORREO</th>
                                </tr>
                            </thead>
                            <?php $id = 1;
                            while ($row = $civiles->fetch_assoc()) { ?>
                                <tbod>
                                    <tr>
                                        <td><?php echo $id++; ?></td>
                                        <td><?php echo $row['cip_directiva']; ?></td>
                                        <td><?php echo $row['cargo_directiva']; ?></td>
                                        <td><?php echo $row['miembro_directiva']; ?></td>
                                        <td><?php echo $row['correo_directiva']; ?></td>
                                    </tr>
                                </tbod>
                            <?php } ?>
                            <tfoot>
                                <tr style="background-color:#a80101;">
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-3 dos ">

            <div class="alert alert-primary" role="alert" style="border-radius: 5px;">
                <CENter>
                    CAPÍTULOS
                </CENter>
            </div>
            <div class="col-sm-12 col-12" style="margin-bottom: 50px;">
                <button class="tablink capitulo" onclick="openPage('Home', this, '#126d2d')" id="defaultOpen">AGRÓNOMOS Y AFINES</button>
            </div>
            <div class="col-12 col-sm-12" style="margin-bottom: 50px;">
                <button class="tablink capitulo" onclick="openPage('News', this, '#0da187')">AMBIENTALES Y AFINES</button>
            </div>
            <div class="col-12 col-sm-12" style="margin-bottom: 50px;">
                <button class="tablink capitulo" onclick="openPage('Contact', this, '#e02b20')">INDUSTRIALES Y AFINES</button>
            </div>
            <div class="col-12 col-sm-12" style="margin-bottom: 50px;">
                <button class="tablink capitulo" onclick="openPage('About', this, '#a80101')">CIVILES</button>
            </div>
        </div>
    </div>

</div>
</div>
</div>


<!---->
<style>
    .capitulo {
        border-radius: 9px;
    }

    .capt:hover {
        color: #245C85;
    }
</style>



<script src="../js/tabs.js"></script>


<?php
require 'footer1.php';
?>