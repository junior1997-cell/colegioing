<?php
if (strlen(session_id()) < 1)
    session_start();

require_once '../modelo/Mespecial_ing.php';

$especializacion = new MEspecial_ing();

$peritaje = isset($_POST["peritaje"])?limpiarCadena($_POST["peritaje"]):"";
$arbitraje = isset($_POST["arbitraje"])?limpiarCadena($_POST["arbitraje"]):"";
$certificacion_calidad = isset($_POST["certificacion_calidad"])?limpiarCadena($_POST["certificacion_calidad"]):"";
$asuntos_municipales = isset($_POST["asuntos_municipales"])?limpiarCadena($_POST["asuntos_municipales"]):"";


$op = $_GET["op"];
switch($op){
	case 'actualizar':
			$rspta = $especializacion ->editar($peritaje,$arbitraje,$certificacion_calidad,$asuntos_municipales);
			echo $rspta;
	break;

	case 'mostrar':
		$rspta = $especializacion ->mostrar();
    echo json_encode($rspta);
	break;
}

?>
