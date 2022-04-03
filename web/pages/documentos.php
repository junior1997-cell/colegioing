<?php
require 'header.php';
include '../../config/conexion.php';

$sql = "SELECT * FROM docnorma WHERE idtipodoc=1 AND estado_doc=0";
$reglamento = ejecutarConsulta($sql);
$sql = "SELECT * FROM docnorma WHERE idtipodoc=2 AND estado_doc=0";
$leyes = ejecutarConsulta($sql);
$sql = "SELECT * FROM docnorma WHERE idtipodoc=3 AND estado_doc=0";
$estatutos = ejecutarConsulta($sql);



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
                <h2>DOCUMENTOS NORMATIVOS</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="title-all text-center">
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
            <div class=" col-lg-12 tabcontent " id="Home" style="padding: 1px 2px!important;">
                <div class="title-all text-center">
                    <p style="color:#E31E24; font-weight: bold;">REGLAMENTOS</p>
                </div>
                <div class="row">
                    <div class="table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <tr style="background-color: orange;">
                                    <th>#</th>
                                    <th>Nombre Reglamento</th>
                                    <th>Documentos <i class="fa fa-download" aria-hidden="true"></i></th>
                                </tr>
                            </thead>
                            <?php $id = 1;
                            while ($row = $reglamento->fetch_assoc()) { ?>
                                <tbod>
                                   <tr>
                                        <td><?php echo $id++; ?></td>
                                        <td><?php echo $row['nombre_doc']; ?></td>
                                        <td> <center><a href="../../admin/<?php echo $row['doc_doc'];?>" target="_blank"> <button class="btn btn-danger"> ver <i class="fa fa-eye" aria-hidden="true"></i> </button> </a>  </center> </td>
                                    </tr> 
                                </tbod>
                            <?php } ?>
                            <tfoot>
                                <tr style="background-color: orange;">
                                    <th></th>
                                    <th></th>
                                    <th></th>                                  
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
            <div class=" col-lg-12 tabcontent" id="News">
                <div class="title-all text-center">
                    <p style="color:#E31E24; font-weight: bold;">LEYES</p>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr style="background-color: orange;">
                                    <th>#</th>
                                    <th>Nombre Reglamento</th>
                                    <th>Documentos <i class="fa fa-download" aria-hidden="true"></i></th>
                                </tr>
                            </thead>
                            <?php $id = 1;
                            while ($row = $leyes->fetch_assoc()) { ?>
                                <tbod>
                                     <tr>
                                        <td><?php echo $id++; ?></td>
                                        <td><?php echo $row['nombre_doc']; ?></td>
                                        <td> <center><a href="../../admin/<?php echo $row['doc_doc'];?>" target="_blank"> <button class="btn btn-danger"> ver <i class="fa fa-eye" aria-hidden="true"></i> </button> </a>  </center> </td>
                                    </tr>
                                </tbod>
                            <?php } ?>
                            <tfoot>
                                <tr style="background-color: orange;">
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class=" col-lg-12 tabcontent" id="Contact">
                <div class="title-all text-center">
                    <p style="color:#E31E24; font-weight: bold;">ESTATUTOS</p>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr style="background-color: orange;">
                                <th>#</th>
                                    <th>Nombre Reglamento</th>
                                    <th>Documentos <i class="fa fa-download" aria-hidden="true"></i></th>
                                </tr>
                            </thead>
                            <?php $id = 1;
                            while ($row = $estatutos->fetch_assoc()) { ?>
                                <tbod>
                                    <tr>
                                        <td><?php echo $id++; ?></td>
                                        <td><?php echo $row['nombre_doc']; ?></td>
                                        <td> <center><a href="../../admin/<?php echo $row['doc_doc'];?>" target="_blank"> <button class="btn btn-danger"> ver <i class="fa fa-eye" aria-hidden="true"></i> </button> </a>  </center> </td>
                                    </tr>
                                </tbod>
                            <?php } ?>
                            <tfoot>
                                <tr style="background-color: orange;">
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
            <div class="col-sm-12 col-12">
                <button class="tablink" onclick="openPage('Home', this, 'orange')" id="defaultOpen">REGLAMENTOS</button>
            </div>
            <div class="col-12 col-sm-12">
                <button class="tablink" onclick="openPage('News', this, 'orange')">LEYES</button>
            </div>
            <div class="col-12 col-sm-12">
                <button class="tablink" onclick="openPage('Contact', this, 'orange')">ESTATUTOS</button>
            </div>
        </div>
    </div>

</div>
</div>
</div>


<!---->

<style>
        .all-title-boxx {
        background: url("../images/docn.jpg")!important;
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

<script src="../js/tabs.js"></script>


<?php
require 'footer1.php';
?>