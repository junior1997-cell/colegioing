<?php
require 'header.php';
include '../../config/conexion.php';

$sql = "SELECT * FROM montoscertif m, certifhabilidad c WHERE m.estado =0 AND m.idCertifhabilidad = c.idcertifhabilidad AND m.idCertifhabilidad =1";
$tipoa = ejecutarConsulta($sql);


$sql = "SELECT * FROM certifhabilidad  WHERE estado= 0  AND idcertifhabilidad=2";
$tipotb = ejecutarConsulta($sql);
$sql = "SELECT * FROM certifhabilidad  WHERE estado= 0  AND idcertifhabilidad=2";
$tipodb = ejecutarConsulta($sql);
$sql = "SELECT * FROM certifhabilidad  WHERE estado= 0  AND idcertifhabilidad=2";
$tipoib = ejecutarConsulta($sql);
$sql = "SELECT * FROM montoscertif WHERE idCertifhabilidad =2 AND estado=0";
$tipomb = ejecutarConsulta($sql);


$sql = "SELECT * FROM montoscertif m, certifhabilidad c WHERE m.estado =0 AND m.idCertifhabilidad = c.idcertifhabilidad AND m.idCertifhabilidad =3";
$tipoc = ejecutarConsulta($sql);
?>
<link rel="stylesheet" href="../css/directiva.css">
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-primary" role="alert" style="border-radius: 5px; background-color:rgba(0,0,0,0.15); color: white; font-weight: bold;">
                <CENter>

                    <h2 style="color: black;">CERTIFICADO DE HABILIDAD</h2>
                </CENter>
            </div>
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
            <div class=" col-lg-12 tabcontent " style="box-shadow: 0px 0px 20px #3173A4;" id="Home">
                <?php $id = 1;
                while ($row = $tipoa->fetch_assoc()) { ?>
                    <div class="title-all text-center">
                        <p style="color:#E31E24; font-weight: bold;"> <?php echo $row['titulo']; ?></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="border-top: 2px solid #17609e;border-bottom: 2px solid #17609e;">
                            <br>
                            <div class="col-lg-6">
                                <p class="capt" style="text-align: justify;">
                                    <?php echo $row['descripcion']; ?>
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbod>
                                            <tr>
                                                <td><?php echo $id++; ?></td>
                                                <td><?php echo $row['cost_por_obra']; ?></td>
                                                <td><?php echo $row['monto']; ?></td>
                                            </tr>
                                        </tbod>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12  ecfectou ">
                            <br>
                            <center>
                                <img class="img-fluid " id="imagen" src="../../multimedia/certificadoH/<?php echo $row['foto']; ?>" alt="" style="width: 80%;height: 60%;">
                            </center>
                        </div>
                    </div>
                <?php } ?>
                <br>
            </div>
            <!--++++++++++++***2****+++++++-->
            <div class=" col-lg-12 tabcontent " style="box-shadow: 0px 0px 20px #3173A4;" id="News">
                <?php $id = 1;
                while ($row = $tipotb->fetch_assoc()) { ?>
                    <div class="title-all text-center">
                        <p style="color:#E31E24; font-weight: bold;"> <?php echo $row['titulo']; ?></p>
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="col-lg-12" style="border-top: 2px solid #17609e;border-bottom: 2px solid #17609e;">
                        <br>
                        <?php $id = 1;
                        while ($row1 = $tipodb->fetch_assoc()) { ?>
                            <div class="col-lg-6">
                                <br>
                                <br>
                                <p class="capt" style="text-align: justify;">
                                    <?php echo $row1['descripcion']; ?>
                                </p>
                            </div>
                        <?php } ?>

                        <div class="col-lg-6">
                            <p>Los costos, están especificados según el monto de la obra:</p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <?php
                                    while ($row = $tipomb->fetch_assoc()) { ?>
                                        <tbod>
                                            <tr>
                                                <td><?php echo $id++; ?></td>
                                                <td><?php echo $row['cost_por_obra']; ?></td>
                                                <td><?php echo $row['monto']; ?></td>
                                            </tr>
                                        </tbod>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12  ecfectou ">

                        <br>
                        <?php
                        while ($row3 = $tipoib->fetch_assoc()) { ?>
                            <center>
                                <img class="img-fluid " id="imagen" src="../../multimedia/certificadoH/<?php echo $row3['foto']; ?>" alt="" style="width: 80%;height: 60%;">
                            </center>
                        <?php } ?>
                    </div>
                </div>

                <br>
            </div>
            <!--++++++++++++***3****+++++++-->
            <div class=" col-lg-12 tabcontent " style="box-shadow: 0px 0px 20px #3173A4;" id="Contact">
                <?php $id = 1;
                while ($row = $tipoc->fetch_assoc()) { ?>
                    <div class="title-all text-center">
                        <p style="color:#E31E24; font-weight: bold;"> <?php echo $row['titulo']; ?></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="border-top: 2px solid #17609e;border-bottom: 2px solid #17609e;">
                            <br>
                            <div class="col-lg-6">
                                <p class="capt" style="text-align: justify;">
                                    <?php echo $row['descripcion']; ?>
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbod>
                                            <tr>
                                                <td><?php echo $id++; ?></td>
                                                <td><?php echo $row['cost_por_obra']; ?></td>
                                                <td><?php echo $row['monto']; ?></td>
                                            </tr>
                                        </tbod>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12  ecfectou ">
                            <br>
                            <center>
                                <img class="img-fluid " id="imagen" src="../../multimedia/certificadoH/<?php echo $row['foto']; ?>" alt="" style="width: 80%;height: 60%;">
                            </center>
                        </div>
                    </div>
                <?php } ?>
                <br>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-3 dos " style="margin-bottom: 10px;">

            <div class="alert alert-primary" role="alert" style="border-radius: 5px; background-color:#3173A4; color: #3173A4; font-weight: bold;">
                <CENter>
                    .
                </CENter>
            </div>
            <div class="col-sm-12 col-12" style="margin-bottom: 50px;">
                <button class="tablink capitulo" onclick="openPage('Home', this, '#ffc107')" id="defaultOpen">TIPO "A"</button>
            </div>
            <div class="col-12 col-sm-12" style="margin-bottom: 50px;">
                <button class="tablink capitulo" onclick="openPage('News', this, '#ffc107')">TIPO "B"</button>
            </div>
            <div class="col-12 col-sm-12" style="margin-bottom: 50px;">
                <button class="tablink capitulo" onclick="openPage('Contact', this, '#ffc107')">TIPO "C"</button>
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

<br>
<?php
require 'footer1.php';
?>