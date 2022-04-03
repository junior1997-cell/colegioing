<?php
require 'header.php';
include '../../config/conexion.php';

$sql = "SELECT * FROM comunicados WHERE estado=0 ORDER BY idcomunicado DESC";
$comunicados = ejecutarConsulta($sql);
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
                <h2>Comunicados</h2>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Wishlist  -->
<div class="wishlist-box-main" style="padding: 30px 0px;">
    <div class="container">

        <div class="row ">
        <?php while ($row = $comunicados->fetch_assoc()) { ?>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-3" style="margin-top: 10px;">
                <div class="card h-100 divdecoration">

                    <?php  if ( !empty( $row['foto'])) {?>
                        <img src="../../multimedia/comunicados/<?php echo $row['foto'];?>" class="card-img-top" alt="comunicado" onerror="this.src='../images/comunicados_defaull.png'">
                    <?php } else { ?>
                        <img src="../images/comunicados_defaull.png" class="card-img-top" alt="Logo">                        
                    <?php } ?>
                 
                  
                
                    <div class="card-body">
                        <h5 class="card-title titulo"><?php echo $row['titulo']; ?></h5>
                        <p class="card-text contenido"><?php $descripcion= $row['descripcion'];
                        if  ( strlen($descripcion)>=130 ) {
                            echo substr($descripcion,0,130)."..." ;
                        } else {
                            echo $descripcion;
                        }
                        ?> 
                       </p>
                        <span class="badge bg-success" style="border-radius: 3px!important; ">Actualizado al: <?php echo $row['fecha']; ?></span>

                    </div>
                    <a class="btnvermas" data-toggle="modal"  data-target="#descrip_comu" onclick="mostrar_descripcion(<?php echo $row['idcomunicado']; ?>)" >
                        Ver más
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</div>

<!-- MODAL AGREGAR USUARIO-->
<div class="modal fade" id="descrip_comu">
    <div class="modal-dialog ">
        <div class="modal-content">
            <!-- ============ FORMULARIO DIRECTIVA ==================== -->
            <form id="formulario_directiva">
                <input type="hidden" id="id_directiva" name="id_directiva" />
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                            <div class="box box-default box-solid">
                                <div class="box-body">
                                    <center>
                                        <p id="titulo" class="tituloh"></p>
                                    </center>
                                    <p id="descripcion" style="text-align: justify;">
                                        
                                    </p>
                                    <br>
                                    <p id="fecha"></p>

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
    .divdecoration {
        padding: 10px;
        box-shadow: 4px 1px 8px 1px #88888869;
    }

    .tituloh {
        font-style: italic;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
    }

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

    .btnvermas {
        border-radius: 1px !important;
        padding: 10px;
        font-size: 15px;
        background-color: #17a2b87d !important;
        color: black;
        text-align: center;
        text-decoration: none !important;
    }

    .btnvermas {
        transition: background-color .5s;
    }

    .btnvermas:hover {
        background-color: gold !important;
    }

    @media screen and (min-width: 1100px) {
        .modal-dialog {
            right: auto;
            left: 0% !important;
            width: 600px;
            padding-top: 30px;
            padding-bottom: 30px;
        }
    }
</style>



<?php
require 'footer1.php';
?>

<script>


    function mostrar_descripcion(idcomunicado) {
        console.log(idcomunicado);
        $.post("../../ajax/Ccomunicados.php?op=mostrar", {idcomunicado: idcomunicado}, function(data, status) {
            data = JSON.parse(data);
            console.log(data);
            $('#titulo').html("<br>" + (data.titulo).replace(/\n/ig, '<br>') + "<br>");
            $('#descripcion').html("<br>" + (data.descripcion).replace(/\n/ig, '<br>') + "<br>");
            $('#fecha').html("Actualizado al : " + data.fecha);

        })
    }
</script>