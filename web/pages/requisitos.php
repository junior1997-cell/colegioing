<?php
require 'header.php';
include '../../config/conexion.php';

$deca = "SELECT * FROM decano WHERE estado_decano=0";
$decano = ejecutarConsulta($deca);


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
                <h2>Requisitos Para Colegiatura</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="title-all text-center">
                <h1>Requisitos</h1>
                <hr>
            </div>
        </div>
    </div>
</div>

<!-- End All Title Box -->

<div class="container">

    <button class="tablink" onclick="openPage('Home', this, 'orange')" id="defaultOpen">COLEGIATURA</button>
    
    <button class="tablink" onclick="openPage('Contact', this, 'orange')">CAMBIO DE SEDE</button>

</div>



<div class="container">
    <div id="Home" class="tabcontent stilop">
        <center>
            <h3 style="color: #E31E24; font-weight: bold;">Colegiación Virtual En CIP Moyobamba</h3>
        </center>
        <p style="color: red;"><strong>Paso #01</strong></p>
        <p style="padding-left: 35px;">Hacer clic en el ícono COLÉGIATE para crear una cuenta de PRE COLEGIADO, hacer clic en: <a href="https://cipvirtual.cip.org.pe/sicecolegiacionweb/altas/">https://cipvirtual.cip.org.pe/sicecolegiacionweb/altas/</a> allí deberá completar los datos solicitados.Nota: Es imprescindible que usted cuente con un correo electrónico válido ya que en ella recibirá y su código de usuario y clave de acceso al módulo de colegiación. Finalmente validar su código para ingreso al CIPVIRTUAL V1.0 para continuar el proceso de colegiación.</p>

        <p style="color: red;"><strong>Paso #02</strong></p>
        <p style="padding-left: 35px;"><strong>Subir los siguientes archivos:</strong></p>
        <div class="table-responsive" style="padding-left: 35px;">
            <table class="table ">
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><strong>FOTO DIGITAL</strong></td>
                        <td>Color con fondo blanco y vestimenta formal</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><strong>FIRMA DIGITAL</strong></td>
                        <td>Con fondo blanco y lapicero de color negro - recuadro de 8cm X 8cm</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><strong>DNI</strong></td>
                        <td>(Anverso y Reverso), Carné de Extranjería o pasaporte (Anverso)</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td><strong>TITULO UNIVERSITARIO</strong></td>
                        <td>(Anverso y Reverso)</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p><strong>Nota: </strong> Todos estos documentos tienen que estar previamente escaneados en formatos JPG</p>

        <p style="color: red;"><strong>Paso #03</strong></p>
        <p style="padding-left: 35px;">Ingrese al sistema con su código de usuario y contraseña, haciendo clic en: <a href="https://cipvirtual.cip.org.pe/">https://cipvirtual.cip.org.pe/</a> para completar o actualizar su información personal:</p>

        <div class="table-responsive" style="padding-left: 35px;">
            <table class="table ">
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        
                        <td><strong>DATOS GENERALES</strong> (Estado civil, Medios de contacto, Dirección)</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        
                        <td><strong>Datos Academicos</strong></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        
                        <td><strong>Adjunte sus imagenes escaneadas con un tamaño individual de cada imagen de maximo 02 mb</strong></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        
                        <td><strong>Resolución o Constancia de Sunedu <a href="https://enlinea.sunedu.gob.pe/constanciadeinscripcion">https://enlinea.sunedu.gob.pe/constanciadeinscripcion</a></strong></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        
                        <td><strong>Datos Laborales</strong> (opcionales)</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        
                        <td><strong>Registrar Solicitud De Incorporación Al CIP</strong></td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        
                        <td><strong>Imprimir Solicitud de Incorporación: </strong> <strong>firmar</strong> (Lapicero color negro) <strong>colocar su huella digital</strong> (Indice Derecho) <strong>con huellero color negro, escanear y enviar al correo</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <p style="color: red;"><strong>Pago por derecho de colegiación: S./ 1,000.00</strong></p>
        <div class="table-responsive" style="padding-left: 35px;">
            <table class="table ">
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td>Depositar En La Cuenta Corriente -<strong>BBVA CONTINENTAL</strong></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td><strong>Cuenta N°</strong></td>
                        <td><strong>0011- 0314- 0100051858 27</strong></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td><strong>CCI N°</strong></td>
                        <td><strong>011 - 314 - 000100051858 - 27</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class=" text-center">
                        <div class="col-lg-12" style="padding-top: 20px;">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td> <strong><a href="">Requisitos Para Colegiación Virtual.pdf</strong>
                                                <i class="fa fa-download" aria-hidden="true" style="color: red;"></i> </a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>



    </div>

    

    <div id="Contact" class="tabcontent">
        <center>
            <h3 style="color: #E31E24; font-weight: bold;">CAMBIO DE SEDE</h3>
        </center>
        <div class="about-box-mainn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                            <div class="table-responsive">
            <table class="table ">
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><strong>Constancia De No Adeudo Del Consejo De Origen</strong></td>
                        
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><strong>Copia Del Diploma De Colegiado</strong></td>
                        
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><strong>Copia Del Titulo Profesional</strong></td>
                        
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td><strong>Copia de DNI</strong></td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
                    </div>                    
                        <div class="col-lg-6" style="padding-top: 20px;">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td> <a href="">REQUISITO PARA CAMBIO DE SEDE.pdf
                                                <i class="fa fa-download" aria-hidden="true" style="color: red;"></i> </a></td>                                    
                                    </tr>
                                </tbody>
                            </table>
                        </div>                   
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .about-box-mainn p {
        padding-bottom: 1px;
    }

    .himno {
        background-color: #efeded;


    }

    .himno p {
        color: #000000;
        text-align: center;
    }

    tbody tr th {
        color: #000000;
    }

    tbody tr td {
        color: #000000;

    }

    thead tr th {
        font-weight: bold;
        color: black;

    }

    .stilop p {
        text-align: justify;
        background-color: white;
        transition: background-color 3s;
    }

    .stilop p:hover {
        background-color: #E31E24;
        color: #ffffff;
    }

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


    .all-title-boxx .breadcrumb-item.breadcrumb-item::before {
        color: #000000;
    }

    /* Set height of body and the document to 100% to enable "full page tabs" */
    body,
    html {
        height: 100%;
        margin: 0;
        font-family: Arial;
    }

    /* Style tab links */
    .tablink {
        background-color: #b3a9a9;
        color: white;
        float: center;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 17px;
        font-size: 17px;
        width: 49%;
    }

    .tablink:hover {
        background-color: #777;
    }

    /* Style the tab content (and add height:100% for full page content) */
    .tabcontent {
        color: white;
        display: none;
        padding: 20px 20px;
        height: 100%;
    }

    p {
        color: black;
    }

    #Home {
        background-color: white;
    }

    #News {
        background-color: white;
    }

    #Contact {
        background-color: white;
    }

    #About {
        background-color: white;
    }

    @media (min-width: 256px) and (max-width: 767.99px) {
        .tablink {
            background-color: #b3a9a9;
            color: white;
            float: center;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 17px;
            font-size: 17px;
            width: 100%;
        }
</style>
<script>
    function openPage(pageName, elmnt, color) {
        // Hide all elements with class="tabcontent" by default */
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Remove the background color of all tablinks/buttons
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }

        // Show the specific tab content
        document.getElementById(pageName).style.display = "block";

        // Add the specific color to the button used to open the tab content
        elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<?php
require 'footer1.php';
?>