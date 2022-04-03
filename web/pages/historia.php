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
                <h2>INSTITUCIÓN</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="title-all text-center">
                <h1>Historia</h1>
                <hr>
            </div>
        </div>
    </div>
</div>

<!-- End All Title Box -->

<div class="container">

    <button class="tablink" onclick="openPage('Home', this, 'orange')" id="defaultOpen">Reseña Historica</button>
    <button class="tablink" onclick="openPage('News', this, 'orange')">Decanos y Periodos</button>
    <button class="tablink" onclick="openPage('Contact', this, 'orange')">Himno</button>

</div>

<div class="container">
    <div id="Home" class="tabcontent stilop">
        <center>
            <h3 style="color: #E31E24; font-weight: bold;">RESEÑA HISTÓRICA DE CREACIÓN DEL CIP - CDSM MOYOBAMBA</h3>
        </center>
        <p id="contenido"></p>

        <div class="table-responsive">
            <table class="table ">
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Decano Departamental</td>
                        <td>Ing. Eduardo Díaz Acosta.</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Vicedecano Departamental</td>
                        <td>Ing. Leonardo Márquez Alabarca.</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Secretario</td>
                        <td>Ing. Tomás Juan Pérez Ursúa.</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Por Secretario</td>
                        <td>Ing. Carlos Hugo Egoavil De La Cruz.</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Tesorero</td>
                        <td>Ing. Olmedo M. Ruiz Vásquez.</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Pro Tesorero</td>
                        <td>Ing. Olmedo M. Ruiz Vásquez.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="News" class="tabcontent">
        <center>
            <h3 style="color: #E31E24; font-weight: bold;">Decanos y Periodos</h3>
        </center>
        <div class="container">
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">PERIODO</th>
                            <th scope="col">NOMBRES Y APELLIDOS</th>
                            <th scope="col">PROFESIÓN</th>
                            <th scope="col">REG. CIP</th>
                        </tr>
                    </thead>
                    <?php $id = 0;
                    while ($row = $decano->fetch_assoc()) {
                        $id++; ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $id; ?></th>
                                <td><?php echo $row['decano_periodo']; ?></td>
                                <td><?php echo $row['decano_nom_ape']; ?></td>
                                <td><?php echo $row['decano_profesion']; ?></td>
                                <td><?php echo $row['decano_cip']; ?></td>

                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <div id="Contact" class="tabcontent">
        <center>
            <h3 style="color: #E31E24; font-weight: bold;">HIMNO DEL COLEGIO DE INGENIEROS DEL PERÚ</h3>
        </center>
        <div class="about-box-mainn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <iframe src="https://www.youtube.com/embed/ZfIrfs6XeYY" style="width: 100%;height:100%;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 himno">
                        <p id="himno"></p>
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
        /*background-color: #E31E24;*/
        color: #1B4F7A;
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
        width: 33%;
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

<script>
    function innit() {
        mostrar_historia();
    }

    function mostrar_historia() {
        $.post("../../ajax/CHistoria.php?op=mostrar", {}, function(data, status) {
            data = JSON.parse(data);
            $('#contenido').html("<br>" + (data.reseña_historia).replace(/\n/ig, '<br>') + "<br>");
            $('#himno').html("<br>" + (data.himno).replace(/\n/ig, '<br>') + "<br>");
        })
    }

    innit();
</script>