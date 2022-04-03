<?php
if (strlen(session_id()) < 1)
    session_start();

require_once '../modelo/MEmpresa.php';

$empresa = new MEmpresa();

$nombre = isset($_POST["nombre"])?limpiarCadena($_POST["nombre"]):"";
$descripcion = isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";
$mision = isset($_POST["mision"])?limpiarCadena($_POST["mision"]):"";
$vision = isset($_POST["vision"])?limpiarCadena($_POST["vision"]):"";
$valores = isset($_POST["valores"])?limpiarCadena($_POST["valores"]):"";

$op = $_GET["op"];
switch($op){
	case 'actualizar':
			$rspta = $empresa ->editar($nombre,nl2br($descripcion),nl2br($mision),nl2br($vision),nl2br($valores));
			echo $rspta;
	break;

	case 'mostrar':
		$rspta = $empresa ->mostrar();
    echo json_encode($rspta);
	break;
}

?>
