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
                <h2>DE ESPECIALIZACIÓN DE INGENIERÍA</h2>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Wishlist  -->
<div class="wishlist-box-main divdecoration" style="padding: 30px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <hr style="background-color: red;" />
                </center>

            </div>
        </div>

        <div class="row">

            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

                <div class="card text-dark bg-light mb-3" style="max-width: auto;">
                    <div class="bg-secondary" style="text-align: center; font-size: 18px;">
                        <h5 style="font-size: 20px; color: white; font-weight: bold;">CENTROS DE PERITAJE</h5>
                    </div>
                    <div class="card-body">

                        <p class="card-text" style="text-align: justify;">
                            Es el órgano de apoyo del Consejo Departamental, en las que estén constituidos,
                            encargado de organizar y administrar las solicitudes de peritajes, efectuadas
                            por personas naturales o jurídicas no estatales y derivarlas a los especialistas
                            en cada materia para emitir los informes periciales de parte respectivos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="card text-dark bg-light mb-3" style="max-width: auto;">
                    <div class="bg-secondary" style="text-align: center; font-size: 18px;">
                        <h5 style="font-size: 20px; color: white; font-weight: bold;">CENTROS DE ARBITRAJE</h5>
                    </div>
                    <div class="card-body">

                        <p class="card-text"  style="text-align: justify;">
                            Es el encargado de organizar y administrar los arbitrajes relacionados con la ingeniería,
                            y no resuelve por sí mismo las disputas o controversias derivadas entre las partes, pues
                            actúa prestando asesoramiento y asistencia en su desarrollo conforme a la Ley General de
                            Arbitraje.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="card text-dark bg-light mb-3" style="max-width: auto;">
                    <div class="bg-secondary" style="text-align: center;">
                        <h5 style="font-size: 20px; color: white; font-weight: bold;">CENTROS DE CERTIFICACIÓN DE CALIDAD</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"  style="text-align: cejustifynter;">
                            Es el órgano de apoyo del Consejo Departamental para completar la formación
                            profesional y capacitar a ingenieros técnicamente competentes en los procesos de
                            calidad en el manejo de los sistemas de gestión de calidad, en las especialidades
                            y versiones reconocidas basados en estándares mundialmente aceptados.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="card text-dark bg-light mb-3" style="max-width: auto;">
                    <div class="bg-secondary" style="text-align: center;">
                        <h5 style="font-size: 20px; color: white; font-weight: bold;">COMISIÓN DE ASUNTOS MUNICIPALES</h5>
                    </div>
                    <div class="card-body"  style="text-align:justify;">
                        <p class="card-text">Es el Órgano especializado cuyo objeto es velar el cumplimiento de las
                            normas técnicas de edificaciones a nivel nacional. Los Consejos Departamentales acreditan
                            a sus Delegados ante las Municipalidades, según sus especialidades, mediante Concursos
                            Públicos cada año, a fin de cubrir las necesidades de las comunas de su jurisdicción,
                            en cumplimiento a las leyes, normas y reglamentos vigentes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>


.divdecoration {
  background-image: url("../images/fondo.png");
  background-attachment: fixed;
  background-size:50%;
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
</style>



<?php
require 'footer1.php';
?>

<script>
    function innit() {
        mostrar_empresa();
    }

    function mostrar_empresa() {
        $.post("../../ajax/Cbeneficio_cole.php?op=serv_sociales", {}, function(data, status) {
            data = JSON.parse(data);

            $('#Mserv_act').html("<br>" + (data.serv_act).replace(/\n/ig, '<br>') + "<br>");
            $('#importante').html("<br>" + (data.importantes).replace(/\n/ig, '<br>') + "<br>");
            $('#derecho').html("<br>" + (data.derechos_iss_cip).replace(/\n/ig, '<br>') + "<br>");
            $('#integran').html("<br>" + (data.integran_iss_cip).replace(/\n/ig, '<br>') + "<br>");
            $('#serv_social').html("<br>" + (data.servicios_sociales).replace(/\n/ig, '<br>') + "<br>");

        })
    }

    innit();
</script>