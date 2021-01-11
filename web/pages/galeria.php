<?php
require 'header.php';
include '../../config/conexion.php';

$sql = "SELECT * FROM galeria WHERE estado = '0' ORDER BY idgaleria";
$galeria = ejecutarConsulta($sql);
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
                <h2>Galeria Institucional</h2>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Wishlist  -->
<div class="wishlist-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <center>
                        <h1>Imágenes del Consejo Departamental de Cajamarca</h1>
                        <hr style="background-color: red;" />
                    </center>

                </div>
            </div>
        </div>
        <div class="row">
            <ul class="galeria">
            <?php while ($row = $galeria->fetch_assoc()) { ?>
                <li><a href="#aaa"><img src="../../multimedia/galeria/<?php echo $row['foto']; ?>"></a></li>
            <?php } ?> 
            </ul>
           
            <div class="modal" id="aaa">
            
                <h3>hola</h3>
                <?php while ($row = $galeria->fetch_assoc()) { ?>
                <div class="imagen">
                    <a href="#img4">&#60;</a>
                    <a href="#img2"><img src="../../multimedia/galeria/<?php echo $row['foto']; ?>"></a>
                    <a href="#img2">></a>
                    <?php } ?> 
                </div>

                <a class="cerrar" href="">X</a>
            </div>
            

        </div>
    </div>
</div>

<?php
require 'footer.php';
?>
<style>
    /*Estilos de la galeria*/

    .galeria {
        width: 100%;
        margin: auto;
        list-style: none;
        padding: 20px;
        box-sizing: border-box;

        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .galeria li {
        margin: 5px;
    }

    .galeria img {
        width: 250px;
        height: 200px;
    }

    /*Estilos del modal*/

    .modal {
        display: none;
    }

    .modal:target {

        display: block;
        position: fixed;
        background: rgba(0, 0, 0, 0.8);
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .modal h3 {
        color: #fff;
        font-size: 30px;
        text-align: center;
        margin: 15px 0;
    }

    .imagen {
        width: 100%;
        height: 50%;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .imagen a {
        color: #fff;
        font-size: 40px;
        text-decoration: none;
        margin: 0 10px;
    }

    .imagen a:nth-child(2) {
        margin: 0;
        height: 100%;
        flex-shrink: 2;
    }

    .imagen img {
        width: 500px;
        height: 100%;
        max-width: 100%;
        border: 7px solid #fff;
        box-sizing: border-box;
    }

    .cerrar {
        display: block;
        background: #fff;
        width: 25px;
        height: 25px;
        margin: 15px auto;
        text-align: center;
        text-decoration: none;
        font-size: 25px;
        color: #000;
        padding: 5px;
        border-radius: 50%;
        line-height: 25px;
    }

    /**------------------------- */
    .all-title-boxx {
        background: url("../images/historia.jpg") no-repeat center center;
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

    .all-title-boxx::before {
        background: rgba(0, 0, 0, 0.6);
        content: "";
        position: absolute;
        z-index: 0;
        width: 100%;
        height: 100%;
        left: 0px;
        top: 0px;
    }

    .all-title-boxx h2 {
        font-size: 28px;
        font-weight: 700;
        color: #ffffff;
        float: left;
        padding: 10px 0px;
    }

    .all-title-boxx .breadcrumb {
        background: #b0b435;
        margin: 0px;
        display: inline-block;
        border-radius: 0px;
        float: right;
    }

    .all-title-boxx .breadcrumb li {
        display: inline-block;
        color: #000000;
        font-size: 16px;
    }

    .all-title-boxx .breadcrumb li a {
        color: #ffffff;
        font-size: 16px;
    }

    .all-title-boxx .breadcrumb-item+.breadcrumb-item::before {
        color: #000000;
    }

    /**------------------------------------------- */
</style>