<?php
if (strlen(session_id()) < 1) {
    session_start();
}
/*MODULO DE CATEGORIA*/
/*Aqui se crea, se edita, se actualiza*/
require_once '../modelo/Mbeneficio_cole.php';

$beneficios = new Mbeneficio_cole();

$idbeneficio      = isset($_POST["idbeneficio"]) ? limpiarCadena($_POST["idbeneficio"]) : "";
$nombre_doc       = isset($_POST["nombre_doc"]) ? limpiarCadena($_POST["nombre_doc"]) : "";
$documento        = isset($_POST["documento"]) ? limpiarCadena($_POST["documento"]) : "";
$documento_actual = isset($_POST["documento_actual"]) ? limpiarCadena($_POST["documento_actual"]) : "";
/**seccion de información */
$servicios_sociales = isset($_POST["servicios_sociales"]) ? limpiarCadena($_POST["servicios_sociales"]) : "";
$integran_iss_cip   = isset($_POST["iss_cip"]) ? limpiarCadena($_POST["iss_cip"]) : "";
$derechos_iss_cip   = isset($_POST["derechobenef"]) ? limpiarCadena($_POST["derechobenef"]) : "";
$serv_act           = isset($_POST["actualidad"]) ? limpiarCadena($_POST["actualidad"]) : "";
$importantes        = isset($_POST["important"]) ? limpiarCadena($_POST["important"]) : "";

$op = $_GET["op"];
switch ($op) {
    case 'guardaryeditar':

        $pdf = "";
        if (!file_exists($_FILES['documento']['tmp_name']) || !is_uploaded_file($_FILES['documento']['tmp_name'])) {
            $pdf = $documento_actual;
        } else {
            $extencion = explode(".", $_FILES["documento"]["name"]);
            $documento = rand(0, 20) . round(microtime(true)) . rand(21, 41) . '.' . end($extencion);
            move_uploaded_file($_FILES["documento"]["tmp_name"], "../admin/recursos/pdf/beneficio_cole/" . $documento);
            $pdf = "recursos/pdf/beneficio_cole/" . $documento;
        }

        if (empty($idbeneficio)) {
            // ================================== INSERTAR UN NUEVO DOCUMENTO ==================================
            $rspta = $beneficios->insertarDoc($nombre_doc, $pdf);
            echo $rspta;
        } else {
            // ================================== EDITAR UN DOCUMENTO EXISTENTE ================================
            // $rspta = [
            //     'id'         => $idbeneficio,
            //     'nombre'     => $nombre_doc,
            //     'pdf'        => $pdf,
            //     'pdf_actual' => $documento_actual,
            // ];

            // echo json_encode($rspta);

            $rspta = $beneficios->editarDoc($idbeneficio, $nombre_doc, $pdf);

            echo $rspta;
        }
        break;

    case 'listarDocumnt':
        $rspta = $beneficios->listarDoc();
        //Vamos a declarar un array
        $data = [];
        $id   = 0;
        // var_dump($rspta); die;
        while ($reg = $rspta->fetch_object()) {
            $id++;
            $data[] = [
                "0" => $id,
                "1" => $reg->nombre_doc,
                "2" => $reg->documento == "" ? '
                    <center>
                        <a tipe="btn btn-danger">
                            <img src="recursos/pdf/beneficio_cole/triste.png" class="card-img-top" height="35" width="35" >
                       </a>
                    </center>' : '
                    <center>
                        <a tipe="btn btn-danger" class="btnMostrarPlanClasePDF resplandor"   pdf="' . $reg->documento . '" a="' . $reg->documento . '" c="' . $reg->nombre_doc . '" style="cursor: pointer !important; cursor: hand !important;" data-toggle="modal" data-target="#mostrarModalplanClasePdf">
                            <img src="recursos/pdf/pdf.svg" class="card-img-top" height="35" width="30" >
                       </a>
                    </center>',
                "3" => $reg->estado == 0 ? '
                    <center>
                        <span class="label bg-green">
                            &nbsp;&nbsp;&nbsp;&nbsp;Activado&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                    </center>' : '
                    <center>
                        <span class="label bg-red">
                            Deshabilitado
                        </span>
                    </center>',
                "4" => $reg->estado ? '
                    <center>
                        <button class="btn btn-warning btn-xs" onclick="mostrarDoc(' . $reg->idbeneficio . ')">
                            <i class="fa fa-edit"></i>
                        </button>' : '
                    <center>
                    <button class="btn btn-warning btn-xs" onclick="mostrarDoc(' . $reg->idbeneficio . ')">
                        <i class="fa fa-edit"></i>
                    </button>',
            ];
        }
        $results = [
            "sEcho"                => 1, //Información para el datatables
            "iTotalRecords"        => count($data), //enviamos el total registros al datatable
            "iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
            "aaData"               => $data,
        ];
        echo json_encode($results);
        break;

    // mostrar y actulizar INSTITUTO DE SERVICIOS SOCIALES

    case 'serv_sociales':
        $rspta = $beneficios->serv_sociales();
        echo json_encode($rspta);
        break;

    case 'actualizarserv':
        $idInfobc = 1;
        $rspta    = $beneficios->editarserv_sociales($servicios_sociales, $integran_iss_cip, $derechos_iss_cip, $serv_act, $importantes);
        // $rspta = [
        //     '1' => $servicios_sociales,
        //     '2' => $integran_iss_cip,
        //     '3' => $derechos_iss_cip,
        //     '4' => $serv_act,
        //     '5' => $importantes,
        // ];
        // echo json_encode($rspta);
        echo $rspta;
        break;

    // mostrar INSTITUTO DE SERVICIOS SOCIALES

    case 'mostrardoc':
        $rspta = $beneficios->mostrarDoc($idbeneficio);
        echo json_encode($rspta);
        break;
    
}
