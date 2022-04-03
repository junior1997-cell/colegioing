<?php
require 'header.php';
include '../../config/conexion.php';
$sql       = "SELECT * FROM tarifario WHERE estado_tarifario = 0 ORDER BY id_tarifario DESC";
$tarifario = ejecutarConsulta($sql);
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
<div class="all-title-box">
    <div class="container">
        <img src="../images/tarifario.png" alt="" style="width: 50%;">
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <?php while ($row = $tarifario->fetch_assoc()) {?>
                <div class="col-sm-12 col-lg-12 mb-3">
                    <div class="title-left">
                        <center>
                            <h3>TARIFARIO: <?php echo $row['nombre_tarifario']; ?></h3>
                        </center>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="rounded  bg-light" style="padding: 10px;">
                                    <embed src="../../admin/<?php echo $row['doc_tarifario']; ?>" type="application/pdf" width="100%" height="430px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<!-- End Cart -->

<?php
require 'footer.php';
?>