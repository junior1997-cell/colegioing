<?php
require 'header.php';
include '../../config/conexion.php';

$sql = "SELECT * FROM capacitaciones WHERE estado=0 ORDER BY idcapacitacion DESC";
$capacitacion = ejecutarConsulta($sql);

?>

<div class="container">
    <div class="row">
        <?php while ($row = $capacitacion->fetch_assoc()) { ?>
            <div class="col-12">
                <div class="card mb-3 mt-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="" data-toggle="modal" data-target="#agregar_usuario" onclick="mcapacitacion('<?php echo $row['idcapacitacion']; ?>')">
                                <center>
                                    <img src="../../multimedia/capacitaciones/<?php echo $row['foto']; ?>" class="card-img" style="width: 96%; height:100%; padding: 1.5rem!important;">
                                </center>
                            </a>
                        </div>
                        <div class="col-md-8    ">
                            <div class="card-body" style="padding:2rem !important;">
                                <h5 class="card-title titulo"><?php echo $row['titulo']; ?></h5>
                                <p class="card-text contenido"><?php echo $row['descripcion']; ?></p>
                                <br>
                                <p class="card-text">
                                    <small class="text-muted sty" style="font-size: 18px; color:#E31E24!important;">
                                        Costo: <?php echo $row['costo']; ?></small>
                                </p>

                                <p class="card-text">
                                    <small class="text-muted sty" style="font-size: 18px; color:#E31E24!important;">
                                        Fecha: <?php echo $row['fecha']; ?></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<!-- MODAL AGREGAR USUARIO-->
<div class="modal fade" id="agregar_usuario">
    <div class="modal-dialog ">
        <div class="modal-content" style="box-shadow: none !important; background-color: #fff0 !important; border: none;">
            <!-- ============ FORMULARIO DIRECTIVA ==================== -->
            <form id="formulario_directiva">
                <input type="hidden" id="id_directiva" name="id_directiva" />
                <div class="modal-body" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-default box-solid">
                                <div class="box-body " id="foto">
                                   <!--Imagen-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form> <!-- END FORMULARIO -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<style>
    @media (min-width: 1366px) and (max-width: 1920px) {
        .modal-dialog {
            right: auto;
            left: -10% !important;
            width: 900px !important;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .modal-content {
            width: 900px !important;
            height: 500px!important;
        }

    }

    @media (min-width: 960px) and (max-width: 1366px) {
        .modal-dialog {
            right: auto;
            left: -8% !important;
            width: 600px !important;
            padding-top: 30px;
            padding-bottom: 30px;

        }

        .modal-content {
            width: 700px !important;
            height: 500px !important;
        }

    }

    @media (min-width: 720px) and (max-width: 960px) {
        .modal-dialog {
            right: auto;
            left: -10% !important;
            width: 600px !important;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .modal-content {
            width: 600px !important;
            height: 500px !important;

        }

    }

    .titulo {
        text-decoration: underline;
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

    .sty {
        text-shadow: 1px 1px 1px #E31E24;
    }
</style>

<script>
    function mcapacitacion(idcapacitacion) {
        $.post("../../ajax/Ccapacitaciones.php?op=mostrar", {
            idcapacitacion: idcapacitacion
        }, function(data, status) {
            data = JSON.parse(data);

            $("#foto").html('<img id="imagen" src="../../multimedia/capacitaciones/'+data.foto+'" alt=""'+ 
            'style="max-width: 100%;">');

        })
    }
</script>

<?php
require 'footer1.php';
?>