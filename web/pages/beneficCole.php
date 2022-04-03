<?php
require 'header.php';
include '../../config/conexion.php';

$sql = "SELECT * FROM doc_benficio_cole WHERE idbeneficio=1";
$doc1 = ejecutarConsulta($sql);
$sql = "SELECT * FROM doc_benficio_cole WHERE idbeneficio=2";
$doc2 = ejecutarConsulta($sql);
$sql = "SELECT * FROM doc_benficio_cole WHERE idbeneficio=3";
$doc3 = ejecutarConsulta($sql);
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
                <h2>INSTITUTO DE SERVICIOS SOCIALES</h2>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Wishlist  -->
<div class="wishlist-box-main" style="padding: 30px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <hr style="background-color: red;" />
                </center>

            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12 col-xs-12">
                <div>
                    <p class="titulo">¿QUÉ ES EL INSTITUTO DE SERVICIOS SOCIALES?</p>
                    <!--ser_sociales-->
                    <p class="contenido" id="serv_social"></p>
                    <div class="row">
                        <div class="col-lg-6" style="padding-top: 20px;">
                            <table class="table table-bordered">
                                <tbody>
                                    <?php while ($row = $doc1->fetch_assoc()) { ?>
                                        <tr>
                                            <td> <a target="_blank" href="../../admin/<?php echo $row['documento']; ?>">Ver <?php echo $row['nombre_doc']; ?>
                                                    <i class="fa fa-download" aria-hidden="true" style="color: red;"></i> </a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="titulo">QUIENES INTEGRAN EL ISS-CIP</p>
                    <!--integran-->
                    <p class="contenido" id="integran"></p>
                </div>
                <div>
                    <p class="titulo">QUIENES TIENEN DERECHO A LOS BENEFICIOS DEL ISS-CIP</p>
                    <!--derechos-->
                    <P class="contenido" id="derecho"> </P>
                </div>
                <div>
                    <p class="titulo"> CUALES SON LOS SERVICIOS QUE BRINDA ACTUALMENTE EL ISS-CIP:</p>
                    <!--servicios activos-->
                    <p class="contenido" id="Mserv_act"></p>
                    <div class="row">
                        <div class="col-lg-6" style="padding-top: 20px;">
                            <table class="table table-bordered">
                                <tbody>
                                    <?php while ($row = $doc2->fetch_assoc()) { ?>
                                        <tr>
                                            <td> <a target="_blank" href="../../admin/<?php echo $row['documento']; ?>">
                                                    Hacer clic aquí, para imprimir los <?php echo $row['nombre_doc']; ?>
                                                    <i class="fa fa-download" aria-hidden="true" style="color: red;"></i> </a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--importante-->
                    <p class="contenido" id="importante"></p>
                    <div class="row">
                        <div class="col-lg-6" style="padding-top: 20px;">
                            <table class="table table-bordered">
                                <tbody>
                                <?php while ($row = $doc3->fetch_assoc()) { ?>
                                        <tr>
                                            <td> <a target="_blank" href="../../admin/<?php echo $row['documento']; ?>">
                                                    Ver <?php echo $row['nombre_doc']; ?>
                                                    <i class="fa fa-download" aria-hidden="true" style="color: red;"></i> </a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .titulo {
        font-style: italic;
        font-size: 18px;
        font-weight: bold;
        text-align: justify;
    }

    .contenido {
        /*font-style: italic;*/
        font-size: 16px;
        /* font-weight: bold;*/
        text-align: justify;
        color: #808385;
    }
</style>



<?php
require 'footer1.php';
?>

<script>
    function innit() {
        mostrar_empresa();
    }

    function mostrar_empresa() {
        $.post("../../ajax/Cbeneficio_cole.php?op=serv_sociales", {}, function(data, status) {
            data = JSON.parse(data);

            $('#Mserv_act').html("<br>" + (data.serv_act).replace(/\n/ig, '<br>') + "<br>");
            $('#importante').html("<br>" + (data.importantes).replace(/\n/ig, '<br>') + "<br>");
            $('#derecho').html("<br>" + (data.derechos_iss_cip).replace(/\n/ig, '<br>') + "<br>");
            $('#integran').html("<br>" + (data.integran_iss_cip).replace(/\n/ig, '<br>') + "<br>");
            $('#serv_social').html("<br>" + (data.servicios_sociales).replace(/\n/ig, '<br>') + "<br>");

        })
    }

    innit();
</script>