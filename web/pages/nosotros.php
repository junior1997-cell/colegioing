<?php
require 'header.php';
include '../../config/conexion.php';

$sql = "SELECT * FROM empresa";
$nosotros = ejecutarConsulta($sql);
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
                <h2>Nosotros</h2>
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
        <?php while ($row = $nosotros->fetch_assoc()) { ?>
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="alert alert-light subtitle" role="alert">
                                PRESENTACIÓN
                            </div>
                            <p class="contenido"><?php echo $row['descripcion']; ?></p>
                        </div>

                        <div class="col-lg-8">
                            <br> <br>
                            <div class="banner-frame ecfecto ">
                                <img class="img-fluid " src="../images/colegio.jpg" alt="" style="border-radius: 8px !important;" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-light subtitle" role="alert">
                                VISIÓN
                            </div>
                            <p class="contenido"><?php echo $row['vision']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="padding-top: 20px;">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td> <a href="../ley_24648_y_ley_28858/Ley 24648.pdf" target="_blank">LEY Nº 24648 Ley del Colegio de Ingenieros del Perú.
                                                <i class="fa fa-download" aria-hidden="true" style="color: red;"></i> </a></td>
                                        <td><a href="../ley_24648_y_ley_28858/Ley 28858.pdf" target="_blank">Ley Nº 28858 Ley del Profesional de Ingeniería.
                                                <i class="fa fa-download" aria-hidden="true" style="color: red;"></i> </a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" style="border-left: 1px solid #C00;">
                    <div class="alert alert-dark" role="alert" style="text-align: center;font-size: 20px;font-weight: bold;">
                        INSTITUCIÓN
                    </div>
                    <div class="divcard">
                        <div class="card">
                            <ul class="list-group list-group-flush stylecard">
                                <li class="list-group-item activo"> <a href="">NOSOTROS</a> </li>
                                <li class="list-group-item"> <a href="historia.php">HISTORIA</a> </li>
                                <li class="list-group-item"> <a href="directiva.php">DIRECTIVA</a> </li>
                                <li class="list-group-item"> <a href="documentos.php">DOCUMENTOS</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-light subtitle" role="alert">
                            MISIÓN
                        </div>
                        <p class="contenido"><?php echo $row['mision']; ?></p>
                        <div class="alert alert-light subtitle" role="alert">
                            OBJETIVOS
                        </div>
                        <p class="contenido"><?php echo $row['valores']; ?></p>

                    </div>
                </div>

            </div>
        <?php } ?>
    </div>
</div>

<?php
require 'footer1.php';
?>