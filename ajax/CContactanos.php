<?php
if (strlen(session_id()) < 1)
    session_start();

require_once '../modelo/MContactanos.php';

$contactanos = new MContactanos();

$coordenadas = isset($_POST["coordenadas"])?limpiarCadena($_POST["coordenadas"]):"";
$direccion = isset($_POST["direccion"])?limpiarCadena($_POST["direccion"]):"";
$email = isset($_POST["email"])?limpiarCadena($_POST["email"]):"";
$telefono = isset($_POST["telefono"])?limpiarCadena($_POST["telefono"]):"";


$op = $_GET["op"];
switch($op){
	case 'actualizar':
			$rspta = $contactanos ->editar($coordenadas,$direccion,$email,$telefono);
			echo $rspta;
	break;

	case 'mostrar':
		$rspta = $contactanos ->mostrar();
    echo json_encode($rspta);
	break;
}

?>
