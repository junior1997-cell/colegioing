<?php
require 'header.php';
include '../../config/conexion.php';

$sql = "SELECT * FROM galeria WHERE estado = '0' ORDER BY idgaleria";
$galeria = ejecutarConsulta($sql);
?>

<link id="changeable-colors" rel="stylesheet" href="web/css/colors/vivid-yellow.css" />

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
                <h2>Galeria</h2>
                <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                        <li class="breadcrumb-item active">GALERÍA</li>
                    </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Wishlist  -->
<div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Nuestra Galería</h1>
                        
                    </div>
                </div>
            </div>

            <div class="row special-list">
                
                <?php while ($row = $galeria->fetch_assoc()) { ?>
                <div class="col-lg-3 col-md-6 special-grid bulbs">
                    
                    <div class="products-single fix">

                         <div class="shop-cat-box">
                             
                         <div class="special-box">
                           
                        <div id="owl-demo">
                        
                        <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            <strong class="strong"><?php echo $row['titulo'];?></strong>
                                            <div class="line"></div>
                                            <div class="dit-line"><?php echo $row['descripcion'];?></div>
                                        </div>
                                    </div>
                                </a>
                        <div class="box-img-hover">
                            <img src="../../multimedia/galeria/<?php echo $row['foto']; ?>" class="img-fluid" alt="Image" style="width: 400px; height: 250px;">                            
                        </div>    
                        </div>
                        
                        </div>
                        
                        </div> 

                        </div>  
                                    
                    </div>

                </div>
                <?php } ?>  
                </div>

                  
                
            </div>
        </div>
</div>

<?php
require 'footer.php';
?>
<style>
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
    .item-type-zoom .item-info .headline {
    font-size: 18px;
    width: 75%;
    margin: 0 auto;
    border: 4px solid #ffffff;
    padding: 10px;
    border-radius: 15px;
    }

.item-type-zoom .item-info {
    z-index: 10;
    color: #ffffff;
    display: table-cell;
    vertical-align: middle;
    position: absolute;
    z-index: 5;
    -webkit-transform: scale(0,0);
    -moz-transform: scale(0,0);
    -ms-transform: scale(0,0);
    transform: scale(0,0);
    -webkit-transition: all 300ms ease-out;
    -moz-transition: all 300ms ease-out;
    -o-transition: all 300ms ease-out;
    transition: all 300ms ease-out;
    bottom:0px;
}
.item-type-zoom .item-info .headline {
    font-size: 18px;
    width: 75%;
    margin: 0 auto;
    border: 4px solid #ffffff;
    padding: 10px;
    border-radius: 15px;
}

.item-type-zoom .item-info .line {
    height: 1px;
    width: 20%;
    margin: 15px auto 10px auto;
    background-color: #ffffff;
}

.item-type-zoom .item-info .dit-line {
    font-size: 14px;
    font-style: italic;
    color: red;
}
.item-type-zoom .item-hover:hover .item-info {
    -webkit-transform: scale(1,1);
    -moz-transform: scale(1,1);
    -ms-transform: scale(1,1);
    transform: scale(1,1);
}
.item-type-zoom .item-hover {
    z-index: 5;
    -webkit-transition: all 300ms ease-out;
    -moz-transition: all 300ms ease-out;
    -o-transition: all 300ms ease-out;
    transition: all 300ms ease-out;
    opacity: 0;
    cursor: pointer;
    display: block;
    text-decoration: none;
    text-align: center;   
}
.item-hover, .item-hover {
    position: absolute;
    top: 0;
    left: 0;
    height:100%;
    width:100%;
}
.item-type-zoom .item-hover:hover {
    opacity: 7; 
}



.item-type-zoom .item-hover:hover .item-info {
    -webkit-transform: scale(1,1);
    -moz-transform: scale(1,1);
    -ms-transform: scale(1,1);
    transform: scale(1,1);
}
.strong{
    color: black;
}


    /**------------------------------------------- */
</style>