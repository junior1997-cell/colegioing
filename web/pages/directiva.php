<?php
require 'header.php';
include '../../config/conexion.php';

$sql = "SELECT * FROM directiva WHERE id_tipo_directiva =1 AND estado_directiva =0";
$departamental = ejecutarConsulta($sql);

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
                <h2>Directiva</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="title-all text-center">
                <h3>MIEMBROS DE LA DIRECTIVA 2019 - 2021</h3>
                <hr style="background-color: red;">
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
            <div class=" col-lg-12 tabcontent " id="Home">
                <div class="title-all text-center">
                    <p style="color:#E31E24; font-weight: bold;">CONSEJO DEPARTAMENTAL DE SAN MARTÍN - MOYOBAMBA</p>
                </div>
                <div class="row">
                    <div class="table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <tr style="background-color: orange;">
                                    <th>#</th>
                                    <th>CIP</th>
                                    <th>CARGO</th>
                                    <th>MIEMBRO</th>
                                    <th>CORREO</th>
                                </tr>
                            </thead>
                            <?php $id = 1;
                            while ($row = $departamental->fetch_assoc()) { ?>
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
                                <tr style="background-color: orange;">
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
            <!-- <div class="alert alert-primary" role="alert" style="border-radius: 5px;">
                <CENter>
                CONSEJO DEPARTAMENTAL
                </CENter>
            </div>-->
            <div class="col-sm-12 col-12">
                <button class="tablink" onclick="openPage('Home', this, '#245C85')" id="defaultOpen">CONSEJO DEPARTAMENTAL</button>
            </div>
            <div class="col-sm-12 col-12 imagen">
                <center>
                    <img src="../images/logonave.png" alt="" style="width: 60%;height: 60%;">
                </center>
            </div>
        </div>
    </div>

</div>
</div>
</div>


<!---->
<style>
    @media screen and (max-width: 578px) {
    .imagen img {
        display: none;
    }
    }
</style>



<script src="../js/tabs.js"></script>


<?php
require 'footer1.php';
?>