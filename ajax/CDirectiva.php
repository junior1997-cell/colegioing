<?php
if (strlen(session_id()) < 1) {
    session_start();
}

require_once '../modelo/MDirectiva.php';

$directiva = new MDirectiva();

$reseña_historia = isset($_POST["reseña_historia"]) ? limpiarCadena($_POST["reseña_historia"]) : "";
$himno            = isset($_POST["himno"]) ? limpiarCadena($_POST["himno"]) : "";
// datos del DECANO
$id_decano        = isset($_POST["id_decano"]) ? limpiarCadena($_POST["id_decano"]) : "";
$decano_periodo   = isset($_POST["decano_periodo"]) ? limpiarCadena($_POST["decano_periodo"]) : "";
$decano_nom_ape   = isset($_POST["decano_nom_ape"]) ? limpiarCadena($_POST["decano_nom_ape"]) : "";
$decano_profesion = isset($_POST["decano_profesion"]) ? limpiarCadena($_POST["decano_profesion"]) : "";
$decano_cip       = isset($_POST["decano_cip"]) ? limpiarCadena($_POST["decano_cip"]) : "";

$op = $_GET["op"];
switch ($op) {
    case 'actualizar':
        $rspta = $directiva->editar($reseña_historia, $himno);
        echo $rspta;
        break;

    case 'mostrar':
        $rspta = $directiva->mostrar();
        echo json_encode($rspta);
        break;

    case 'guardaryeditar':

        if (empty($id_decano)) {
            $rspta = $directiva->insertarDecano($decano_periodo, $decano_nom_ape, $decano_profesion, $decano_cip);
            echo $rspta;
        } else {
            $rspta = $directiva->editarDecano($id_decano, $decano_periodo, $decano_nom_ape, $decano_profesion, $decano_cip);
            echo $rspta;
        }
        break;

    case 'listarDecano':
        $rspta = $directiva->listarDirectiva();
        //Vamos a declarar un array
        $data = array();
        $id   = 0;
        // var_dump($rspta); die;
        while ($reg = $rspta->fetch_object()) {
            $id++;
            $data[] = array(
                "0" => $id,
                "1" => $reg->cip_directiva,
                "2" => $reg->cargo_directiva,
                "3" => $reg->miembro_directiva,
                "4" => $reg->correo_directiva,
                "5" => $reg->nombre_td,
                "6" => ($reg->estado_directiva == 0) ? '<center><span class="label bg-green">&nbsp;&nbsp;&nbsp;&nbsp;Activado&nbsp;&nbsp;&nbsp;&nbsp;</span></center>' : '<center><span class="label bg-red">Deshabilitado</span></center>',
                "7" => ($reg->estado_directiva) ? '
				<center>
					<button class="btn btn-warning btn-xs" onclick="mostrarDecano(' . $reg->id_directiva . ')">
						<i class="fa fa-edit"></i>
					</button>' . '
					<button class="btn btn-success btn-xs" onclick="activar_decano(' . $reg->id_directiva . ')">
						<i class="fa fa-check-circle"></i>
					</button>
				</center>' : '
				<center>
				<button class="btn btn-warning btn-xs" onclick="mostrarDecano(' . $reg->id_directiva . ')">
					<i class="fa fa-edit"></i>
				</button>' . '
				<button class="btn btn-danger btn-xs" onclick="desactivar_decano(' . $reg->id_directiva . ')">
					<i class="fa fa-trash"></i>
				</button>',

            );
        }
        $results = array(
            "sEcho"                => 1, //Información para el datatables
            "iTotalRecords"        => count($data), //enviamos el total registros al datatable
            "iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
            "aaData"               => $data);
        echo json_encode($results);
        break;

    case 'mostrarDecano':
        // $a= $_GET["a"];
        $iddecano = $_POST["iddecano"];
        $rspta    = $directiva->mostrarDecano($iddecano);
        //Codificar el resultado utilizando json
        // var_dump($rspta); die;
        $data = array();
        while ($reg = $rspta->fetch_object()) {
            $data[] = array(
                "id_decano"        => $reg->id_decano,
                "decano_periodo"   => $reg->decano_periodo,
                "decano_nom_ape"   => $reg->decano_nom_ape,
                "decano_profesion" => $reg->decano_profesion,
                "decano_cip"       => $reg->decano_cip,
            );
        }
        echo json_encode($data);
        break;
    case 'desactivar_decano':
        $id_decano = $_POST["id_decano"];
        $rspta     = $directiva->desactivar_decano($id_decano);
        echo $rspta;
        break;

    case 'activar_decano':
        $id_decano = $_POST["id_decano"];
        $rspta     = $directiva->activar_decano($id_decano);
        echo $rspta;
        break;
}
