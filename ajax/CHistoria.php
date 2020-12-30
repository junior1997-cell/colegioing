<?php
if (strlen(session_id()) < 1) {
    session_start();
}

require_once '../modelo/MHistoria.php';

$historia = new MHistoria();

$reseña_historia       = isset($_POST["reseña_historia"]) ? limpiarCadena($_POST["reseña_historia"]) : "";
$decano_periodo_gestion = isset($_POST["decano_periodo_gestion"]) ? limpiarCadena($_POST["decano_periodo_gestion"]) : "";
$himno                  = isset($_POST["himno"]) ? limpiarCadena($_POST["himno"]) : "";

$op = $_GET["op"];
switch ($op) {
    case 'actualizar':
        $rspta = $historia->editar($reseña_historia, $decano_periodo_gestion, $himno);
        echo $rspta;
        break;

    case 'mostrar':
        $rspta = $historia->mostrar();
        echo json_encode($rspta);
        break;
}
