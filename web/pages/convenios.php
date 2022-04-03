<?php
require 'header.php';
include '../../config/conexion.php';
$sql = "SELECT * FROM convenios WHERE estado =0";
$convenios = ejecutarConsulta($sql);
?>
<div class="all-title-boxx">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Directiva</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="title-all text-center">
                <h3>MIEMBROS DE LA DIRECTIVA 2019 - 2021</h3>
                <hr style="background-color: red;" />
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php while ($row = $convenios->fetch_assoc()) { ?>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card mb-3" style="width: 100%;">
                <center>
                    <img src="../../multimedia/convenios/<?php echo $row['foto']; ?>" class="card-img-top" alt="..." style="max-width: 90%; padding: 5px; max-height: 110px;" />
                </center>
                <div class="card-body">
                    <p>Nombre:</p>
                    <h5 class="card-title" style="font-weight: bold;"><?php echo $row['nombre']; ?></h5>
                    <button class="btn btn-success pull-right" onclick="convenios_web('<?php echo $row['idconvenio']; ?>')" data-toggle="modal" data-target="#agregar_usuario">
                        ver 
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!-- MODAL AGREGAR USUARIO-->
<div class="modal fade" id="agregar_usuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- ============ FORMULARIO DIRECTIVA ==================== -->
            <form id="formulario_directiva">
                <input type="hidden" id="id_directiva" name="id_directiva" />

                <div class="modal-header" style="background-color: #e31e24;">
                    <!-- <p style="margin: auto;"><i class="fa fa-handshake-o"> </i> Convenios</p> -->
                    <h3 style="margin: heigth; margin: 0px !important;"> <strong>CONVENIOS</strong> </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-default box-solid">
                                <div class="box-body">
                                    <div id="convenio_modal_mostrar">
                                    </div>
                                    <!-- <center>
                                        <p id="titulo">convenio con la SUNAT</p>
                                    </center>
                                    <img id="imagen" src="../../multimedia/convenios/11160981419223.png" alt="" style="max-width: 100%; padding: 5px; height: 100px; display: block; margin-left: auto; margin-right: auto;" />
                                    <br />
                                    <p id="descripcion" style="text-align: justify;">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, ratione dolor minima porro nihil eum tenetur recusandae quae quia iste velit et voluptatum repudiandae aliquam vero omnis iusto veniam
                                        sint.
                                    </p>
                                    <br />
                                    <p id="fecha">Actualizado al 21/01/2020</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ==========BOTONES DE accion DEL FORMULARIO -->
                <div class="modal-footer" style="background-color: #d7b56d;">
                    <button type="button" onclick="limpiarDirectiva();" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                </div>
            </form>
            <!-- END FORMULARIO -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<style>
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

<script>
    function init() {
        $("#agregar_usuario").modal("hide");
    }

    function mostrarconvenio(idconvenio) {
        console.log(idconvenio);
        $.post(
            "../../ajax/Cconvenios.php?op=listar_web",
            {
                idconvenio: idconvenio,
            },
            function (data) {
                data = JSON.parse(data);
                console.log(data);
                $("#agregar_usuario").modal("show");
                $("#titulo").val(data.nombre);
                $("#imagen").attr("src", "../multimedia/convenios/" + data.foto);
                $("#descripcion").val(data.descripcion);
                $("#fecha").val(data.fecha);
            }
        );
    }

    function limpiarDirectiva() {
        $("#agregar_usuario").val("");
        $("#titulo").val("");
        $("#imagen").val("");
        $("#descripcion").val("");
        $("#fecha").val("");
    }

    
</script>
<script src="../js/conex/convenios.js"></script>
<?php
require 'footer.php';
?>
