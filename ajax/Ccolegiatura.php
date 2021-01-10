<?php
if (strlen(session_id()) < 1)
    session_start();

require_once '../modelo/Mcolegiatura.php';

$colegiatura = new Mcolegiatura();

$mordinario = isset($_POST["mordinario"])?limpiarCadena($_POST["mordinario"]):"";
$mtemporal = isset($_POST["mtemporal"])?limpiarCadena($_POST["mtemporal"]):"";
$mvitalico = isset($_POST["mvitalico"])?limpiarCadena($_POST["mvitalico"]):"";
$sespecializacion = isset($_POST["sespecializacion"])?limpiarCadena($_POST["sespecializacion"]):"";
$ctemporal = isset($_POST["ctemporal"])?limpiarCadena($_POST["ctemporal"]):"";
$cdepartamental = isset($_POST["cdepartamental"])?limpiarCadena($_POST["cdepartamental"]):"";

$op = $_GET["op"];
switch($op){
	case 'actualizar':
			$rspta = $colegiatura ->editar($mordinario,$mtemporal,$mvitalico,$sespecializacion,$ctemporal,$cdepartamental);
			echo $rspta;
	break;

	case 'mostrar':
		$rspta = $colegiatura ->mostrar();
    echo json_encode($rspta);
	break;
}

?>
