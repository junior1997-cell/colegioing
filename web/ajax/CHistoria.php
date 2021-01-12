<?php
if (strlen(session_id()) < 1) {
    session_start();
}

require_once '../modelo/MHistoria.php';

$historia = new MHistoria();

$reseña_historia = isset($_POST["reseña_historia"]) ? limpiarCadena($_POST["reseña_historia"]) : "";
$himno = isset($_POST["himno"]) ? limpiarCadena($_POST["himno"]) : "";
// datos del DECANO
$id_decano = isset($_POST["id_decano"]) ? limpiarCadena($_POST["id_decano"]) : "";
$decano_periodo = isset($_POST["decano_periodo"]) ? limpiarCadena($_POST["decano_periodo"]) : "";
$decano_nom_ape = isset($_POST["decano_nom_ape"]) ? limpiarCadena($_POST["decano_nom_ape"]) : "";
$decano_profesion = isset($_POST["decano_profesion"]) ? limpiarCadena($_POST["decano_profesion"]) : "";
$decano_cip = isset($_POST["decano_cip"]) ? limpiarCadena($_POST["decano_cip"]) : "";

$op = $_GET["op"];
switch ($op) {
    case 'actualizar':
        $rspta = $historia->editar($reseña_historia, $himno);
        echo $rspta;
        break;

    case 'mostrar':
        $rspta = $historia->mostrar();
        echo json_encode($rspta);
        break;

    case 'guardaryeditar':
    	
		if (empty($id_decano)){
			$rspta = $historia->insertarDecano($decano_periodo,$decano_nom_ape,$decano_profesion,$decano_cip);
			echo $rspta;
		}else {
			$rspta=$historia->editarDecano($id_decano,$decano_periodo,$decano_nom_ape,$decano_profesion,$decano_cip);
			echo $rspta;
		}
		break;

	case 'listarDecano':
		$rspta=$historia->listarDecano();
 		//Vamos a declarar un array
 		$data= Array();
    	$id =0;
    	// var_dump($rspta); die;
 		while ($reg = $rspta->fetch_object()){
			$id ++;
 			$data[]=array(
 				"0" => $id,
 				"1" => $reg->decano_periodo,
				"2" => $reg->decano_nom_ape,
				"3" => $reg->decano_profesion,
				"4" => $reg->decano_cip,
				"5" => ($reg->estado_decano==0)?'<center><span class="label bg-green">&nbsp;&nbsp;&nbsp;&nbsp;Activado&nbsp;&nbsp;&nbsp;&nbsp;</span></center>':'<center><span class="label bg-red">Deshabilitado</span></center>',
				"6" => ($reg->estado_decano)?'
				<center>
					<button class="btn btn-warning btn-xs" onclick="mostrarDecano('.$reg->id_decano.')">
						<i class="fa fa-edit"></i>
					</button>'.' 
					<button class="btn btn-success btn-xs" onclick="activar_decano('.$reg->id_decano.')">
						<i class="fa fa-check-circle"></i>
					</button>
				</center>':'
				<center>
				<button class="btn btn-warning btn-xs" onclick="mostrarDecano('.$reg->id_decano.')">
					<i class="fa fa-edit"></i>
				</button>'.' 
				<button class="btn btn-danger btn-xs" onclick="desactivar_decano('.$reg->id_decano.')">
					<i class="fa fa-trash"></i>
				</button>'
				 
 			);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);
	break;

	case 'mostrarDecano':
		// $a= $_GET["a"];
		$iddecano=$_POST["iddecano"];
		$rspta=$historia->mostrarDecano($iddecano);
 		//Codificar el resultado utilizando json
 		// var_dump($rspta); die;
		$data= Array();
 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"id_decano" => $reg->id_decano,
				"decano_periodo" => $reg->decano_periodo,
				"decano_nom_ape" => $reg->decano_nom_ape,
				"decano_profesion" => $reg->decano_profesion,
				"decano_cip" => $reg->decano_cip,
 				);
 		}
 		echo json_encode($data);
	break;	
	case 'desactivar_decano':
		$id_decano=$_POST["id_decano"];
		$rspta=$historia->desactivar_decano($id_decano);
 		echo $rspta;
	break;

	case 'activar_decano':
		$id_decano=$_POST["id_decano"];
		$rspta=$historia->activar_decano($id_decano);
 		echo $rspta;
	break;
}
