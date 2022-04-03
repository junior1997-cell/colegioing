<?php
require 'header.php';
include '../../config/conexion.php';

$sql = "SELECT * FROM oplaboral WHERE estado = 0";
$oplaboral = ejecutarConsulta($sql);
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
                <h2>Oportunidad laboral</h2>
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
            <div class="col-lg-8">
                <div class="">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: orange;">
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Descripcion </th>
                                <th>Entidad </th>
                                <th>Vigencia </th>
                            </tr>
                        </thead>
                        <?php $id = 1;
                        while ($row = $oplaboral->fetch_assoc()) { ?>
                            <tbod>
                                <tr>
                                    <td><?php echo $id++; ?></td>
                                    <td style="text-align: justify;"><?php echo $row['titulo']; ?></td>
                                    <td style="text-align: justify;"><?php echo $row['descripcion']; ?></td>
                                    <td style="text-align: justify;"><?php echo $row['entidad']; ?></td>
                                    <td> <span class="badge bg-success"><?php echo $row['vigencia']; ?></span></td>

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
            <div class="col-lg-4" style="border-left: 1px solid #C00;">
                <div class="alert alert-dark" role="alert" style="text-align: center;font-size: 20px;font-weight: bold;">
                    Oportunidad laboral
                </div>
                <br> <br>
                <div class="banner-frame ecfecto ">
                    <img class="img-fluid " src="../images/OPlaboral.jpg" alt="" style="border-radius: 8px !important;" />
                </div>
            </div>

        </div>

    </div>
</div>
</div>


<style>
    .all-title-boxx {
        background: url("../images/Oplaboral1.jpg") !important;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -ms-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        text-align: center;
        background-attachment: fixed;
        padding: 70px 0px;
        position: relative;
    }
</style>

<?php
require 'footer1.php';
?>