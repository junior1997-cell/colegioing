<?php
ob_start();
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: index.html");
} else {
    ?>
<!DOCTYPE html>
<html>
    <?php require 'includes/head.php'?>
    <body class="hold-transition skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <?php require 'includes/header.php'?>
            <?php require 'includes/aside.php'?>
            <!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Vista General
                        <small>Reportes</small>
                    </h1>
                </section>

                <!-- CONTENIDO  -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-6 col-xxl-6">
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3 id="count_alquiler"><i class="fa fa-spinner fa-pulse fa-spin fa-fw"></i></h3>
                                    <p>Ambientes de alquiler activos.</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-building-o" aria-hidden="true"></i>
                                </div>

                                <a href="alquiler.php" class="small-box-footer">
                                    Más info
                                    <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-6 col-xxl-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3 id="count_miembros"><i class="fa fa-spinner fa-pulse fa-spin fa-fw"></i></h3>
                                    <p>Miembros del consejo activos.</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>

                                <a href="directivaDepartamental.php" class="small-box-footer"> Más info <i class="fa fa-arrow-circle-right"></i> </a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-6 col-xxl-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3 id="count_doc_normativos"><i class="fa fa-spinner fa-pulse fa-spin fa-fw"></i></h3>
                                    <p>Reglamentos Normativos activos.</p>
                                </div>

                                <div class="icon">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                </div>

                                <a href="docnorma.php" class="small-box-footer"> Más info <i class="fa fa-arrow-circle-right"></i> </a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-xl-6 col-xxl-6">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3 id="count_convenios"><i class="fa fa-spinner fa-pulse fa-spin fa-fw"></i></h3>
                                    <p>Convenios activos.</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                </div>

                                <a href="convenios.php" class="small-box-footer"> Más info <i class="fa fa-arrow-circle-right"></i> </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- ===================== ..:: BOX ::.. ===================== -->
                            <div class="box box-primary">
                                <!-- ===================== ..:: BOX HEADER ::.. ===================== -->
                                <div class="box-header">
                                    <center>
                                        <h3 class="box-title">MIEMBROS DEL CONSEJO DEPARTAMENTAL</h3>
                                    </center>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>

                                <!-- ===================== ..:: CUERPO DEL BOX ::.. ===================== -->
                                <div class="box-body no-padding">
                                    <center>
                                    <ul class="users-list clearfix" id="directiva_actual">
                                         
                                    </ul>
                                    </center>
                                    <!-- /.users-list -->
                                </div>
                                
                            </div>
                            <!-- ===================== ..:: FIN-BOX ::.. ===================== -->
                        </div>                         
                    </div>

                    <div class="row"></div>
                </section>
                <!-- FIN CONTENIDO -->
            </div>
            <!-- /.content-wrapper -->

            <?php require 'includes/footer.php'?>

            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <?php require 'includes/scripts.php'?>
        <script src="scripts/inicio.js"></script>
    </body>
</html>
<?php
}
ob_end_flush();
?>
