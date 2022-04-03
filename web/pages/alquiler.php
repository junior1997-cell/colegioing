<?php
require 'header.php';
include '../../config/conexion.php';

$deca = "SELECT * FROM decano WHERE estado_decano=0";
$decano = ejecutarConsulta($deca);


?>


<link rel="stylesheet" href="../css/css-alquiler/style.css">

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
                <h2>Requisitos Para Colegiatura</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row" id="ver_info_alq">
        
    </div>
</div>
<style>
    .imagen {
        width: 100%;
        height: 100%;
        padding: 10px;
        border-radius: 17px;

    }

    .conten {
        text-align: justify;
        color: #666;
    }
</style>
<?php
require 'footer1.php';
?>

<script>
    function innit() {
        mostrar_alquiler();
    }

    function mostrar_alquiler() {
        $("#ver_info_alq").html('<div class="row aling-center justify-content-center my-5"> <center> <i class="fas fa-spinner fa-spin fa-6x" aria-hidden="true"></i> </center> </div>');
        $.post("../../ajax/Calquiler.php?op=listar_web_alq", {}, function(data, status) {
            data = JSON.parse(data);
            $("#ver_info_alq").html('');
           
            $.each(data, function (index, value) {
                console.log(value.nombre);
                var descripcion2 = '<br> '+ (value.descripcion).replace(/\n/ig, '<br>') + '<br>';
                var condiciones2 = '<br> '+ (value.condiciones).replace(/\n/ig, '<br>') + '<br>';
                var tr = ''+
                '<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">'+
                     '<br> <br> <br> <br> <br> <br>'+
                    '<div class="ecfecto" style="padding: 20px;">'+
                        '<img src="../../multimedia/alquiler/'+value.foto+'" alt="" class="imagen">'+
                    '</div>'+

                '</div>'+
                '<div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">'+
                    '<br>'+
                    '<strong style="font-size: 25px; font-family: fangsong;"> '+value.nombre+'</strong>'+
                    '<p class="conten">'+
                        descripcion2+
                    '</p>'+                   
                    '<p class="conten">Se ubica en el'+value.direccion+'</p>'+
                    '<p class="conten">Capacidad máxima:'+value.capacidad+' personas</p>'+

                    '<div class="card border-warning  mb-3" style="max-width: auto;">'+
                        '<div class="card-body text-primary">'+
                            '<strong>Condiciones de uso</strong>'+
                            '<p class="conten">'+                               
                                condiciones2+
                            '</p>'+                            
                        '</div>'+
                    '</div>'+
                '</div><hr>';
                
                $("#ver_info_alq").append(tr);
            });

        })
    }

    innit();
</script>

