<?php
require 'header.php';
include '../../config/conexion.php';

$sql = "SELECT * FROM colegiatura";
$ordinario = ejecutarConsulta($sql);
$sql = "SELECT * FROM directiva WHERE id_tipo_directiva =2 AND estado_directiva =0";
$agronomos = ejecutarConsulta($sql);
$sql = "SELECT * FROM directiva WHERE id_tipo_directiva =3 AND estado_directiva =0";
$ambientales = ejecutarConsulta($sql);
$sql = "SELECT * FROM directiva WHERE id_tipo_directiva =4 AND estado_directiva =0";
$insdustriales = ejecutarConsulta($sql);
$sql = "SELECT * FROM directiva WHERE id_tipo_directiva =5 AND estado_directiva =0";
$civiles = ejecutarConsulta($sql);


?>
<link rel="stylesheet" href="../css/directiva.css">


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
                <h2>Colegiatura</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="title-all text-center">
                <hr style="background-color: red;">
            </div>
        </div>
    </div>
</div>

<!-- End All Title Box -->
<div class="container">
    <div class="row">
        <div class="col-sm-9"></div>
        <div class="row">

        </div>
    </div>

    <div class="row orden">
        <div class="col-sm-8 col-md-8 col-lg-9 uno " style="padding-bottom: 10px;">
            <div class=" col-lg-12 tabcontent " id="Home" style="box-shadow: 0px 0px 20px #3173A4;">
                <div class="title-all text-center">
                    <p style="color:#E31E24; font-weight: bold;">MIEMBRO ORDINARIO</p>
                </div>
                <div class="row">
                    <p class="parrafo">Son aquellos incorporados al CIP, que cuentan con Título
                        Profesional expedido por Universidad Peruana, que acreditan
                        cinco años de estudios o diez (10) semestres académicos,
                        de acuerdo a la Ley Universitaria. Su registro es único y permanente.</p>
                    <p class="parrafo">Asimismo, son Ingenieros Ordinarios los peruanos que han concluido estudios de ingeniería
                        en universidades extranjeras, internacionalmente acreditadas, que cuenten con cinco años de estudios o diez (10)
                        semestres académicos o cuyo título ha sido revalidado por universidad peruana autorizada por Ley.</p>
                    <p class="parrafo">También podrán incorporarse como Ingenieros Ordinarios los profesionales en
                        ingeniería registrados en Colegios Profesionales del
                        extranjero con los cuales el CIP tiene convenios específicos de mutuo reconocimiento.</p>
                </div>
            </div>
            <div class=" col-lg-12 tabcontent" id="News" style="box-shadow: 0px 0px 20px #3173A4;">
                <div class="title-all text-center">
                    <p style="color:#E31E24; font-weight: bold;">Miembro Temporal</p>
                </div>
                <div class="row">
                    <p class="parrafo">Son los ingenieros extranjeros a quienes la Superintendencia
                        Nacional de Educación Superior Universitaria o la entidad que cumpla dicha función
                        reconoce su título profesional en ingeniería.</p>
                    <p class="parrafo">El CIP, previa evaluación de los requisitos del reglamento, otorga el registro para
                        el ejercicio temporal de la profesión. Su registro es único y temporal.</p>
                    <p class="parrafo">Los Ingenieros Temporales podrán obtener la categoría de Ordinario siempre que cuenten
                        con la calidad migratoria de Residente Permanente de acuerdo a Ley y que hayan
                        ejercido la profesión con registro temporal por más de tres (03) años consecutivos y
                        cumplan con lo establecido en las normas respectivas.</p>

                </div>
            </div>
            <div class=" col-lg-12 tabcontent" id="Contact" style="box-shadow: 0px 0px 20px #3173A4;">
                <div class="title-all text-center">
                    <p style="color:#E31E24; font-weight: bold;">Miembro Vitalicio</p>
                </div>
                <div class="row">
                    <p class="parrafo">Son aquellos ingenieros ordinarios que han aportado sus cuotas institucionales
                        por 30 años. Al adquirir la condición de ingeniero vitalicio, su habilitación
                        para el ejercicio de la profesión es permanente, salvo sanción institucional o
                        judicial. Mantendrán el número de registro de su incorporación.</p>

                </div>
            </div>
            <div class=" col-lg-12 tabcontent" id="About" style="box-shadow: 0px 0px 20px #3173A4;">
                <div class="title-all text-center">
                    <p style="color:#E31E24; font-weight: bold;">Segunda Especialización</p>
                </div>
                <div class="row">
                    <p class="parrafo">
                        Se puede solicitar el reconocimiento para obtener colegiatura en más de una segunda
                        especialidad cuando se ha seguido una carrera de ingeniería diferente dela que dio
                        origen a la colegiatura en el CIP.
                    </p>

                </div>
            </div>
            <div class=" col-lg-12 tabcontent" id="civiles" style="box-shadow: 0px 0px 20px #3173A4;">
                <div class="title-all text-center">
                    <p style="color:#E31E24; font-weight: bold;">Prórroga de Colegiatura Temporal</p>
                </div>
                <div class="row">
                    <p class="parrafo">..............</p>
                </div>
            </div>
            <div class=" col-lg-12 tabcontent" id="ultimo" style="box-shadow: 0px 0px 20px #3173A4;">
                <div class="title-all text-center">
                    <p style="color:#E31E24; font-weight: bold;">Traslado de Consejo Departamental</p>
                </div>
                <div class="row">
                    <p class="parrafo">Se puede solicitar el cambio de circunscripción territorial por haber variado el
                        domicilio o el lugar de trabajo del colegiado.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-3 dos " style="padding-bottom: 15px;">
            <div class="col-sm-12 col-12">
                <button class="tablink" onclick="openPage('Home', this, 'orange')" id="defaultOpen">Miembro Ordinario</button>
            </div>
            <div class="col-12 col-sm-12">
                <button class="tablink" onclick="openPage('News', this, 'orange')">MIEMBRO TEMPORAL</button>
            </div>
            <div class="col-12 col-sm-12">
                <button class="tablink" onclick="openPage('Contact', this, 'orange')">MIEMBRO VITALICIO</button>
            </div>
            <div class="col-12 col-sm-12">
                <button class="tablink" onclick="openPage('About', this, 'orange')">SEGUNDA ESPECIALIZACIÓN</button>
            </div>
            <div class="col-12 col-sm-12">
                <button class="tablink" onclick="openPage('civiles', this, 'orange')">PRÓRROGA DE COLEGIATURA TEMPORAL</button>
            </div>
            <div class="col-12 col-sm-12">
                <button class="tablink" onclick="openPage('ultimo', this, 'orange')">TRASLADO DE CONSEJO DEPARTAMENTAL</button>
            </div>
        </div>
    </div>

</div>
</div>
</div>


<!---->
<style>
    .parrafo {
        text-align: justify;
        padding: 5px;
    }
    .parrafo:hover {
  color: #245C85;
}

    .tablink {
        background-color: #b3a9a9;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 9px 16px;
        font-size: 13px;
        width: 100%;
    }
</style>


<script src="../js/tabs.js"></script>


<?php
require 'footer1.php';
?>