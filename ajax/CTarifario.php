<?php
if (strlen(session_id()) < 1) {
    session_start();
}

require_once '../modelo/MTarifario.php';

$tarifario = new MTarifario();

$id_tarifario = isset($_POST["id_tarifario"]) ? limpiarCadena($_POST["id_tarifario"]) : "";
$nombre_doc   = isset($_POST["nombre_doc"]) ? limpiarCadena($_POST["nombre_doc"]) : "";
$docActual    = isset($_POST["docActual"]) ? limpiarCadena($_POST["docActual"]) : "";
$doc          = isset($_POST["doc"]) ? limpiarCadena($_POST["doc"]) : "";

$op = $_GET["op"];
switch ($op) {
    case 'guardaryeditar':
        // $id_tarifario = "";
        // $nombre_doc  = "sasasasa";
        // $id_tipo_doc = "1";
        // $doc         = "sassa/21.pdf";
        $pdf = "";
        if (!file_exists($_FILES['doc']['tmp_name']) || !is_uploaded_file($_FILES['doc']['tmp_name'])) {
            $pdf = $docActual;
        } else {
            $extencion = explode(".", $_FILES["doc"]["name"]);
            $documento = rand(0, 20) . round(microtime(true)) . rand(21, 41) . '.' . end($extencion);
            move_uploaded_file($_FILES["doc"]["tmp_name"], "../admin/recursos/pdf/tarifario/" . $documento);
            $pdf = "recursos/pdf/tarifario/" . $documento;
        }

        if (empty($id_tarifario)) {
            // ================================== INSERTAR UN NUEVO DOCUMENTO ==================================
            $rspta = $tarifario->insertarTarifario($pdf, $nombre_doc);
            echo $rspta;
        } else {

            // ==================================EDITAR UNA DIRECTIVA EXISTENTE===============
            $rspta = $tarifario->editarTarifario($id_tarifario, $pdf, $nombre_doc);
            echo $rspta;
        }
        break;

    case 'listar_tarifario':
        $rspta = $tarifario->listarTarifario();
        //Vamos a declarar un array
        $data = array();
        $id   = 0;
        // var_dump($rspta); die;
        while ($reg = $rspta->fetch_object()) {

            $id++;
            $data[] = array(
                "0" => $reg->id_tarifario,
                "1" => '
                    <center>
                        <a tipe="btn btn-danger" class="btnMostrarPDF resplandor"   pdf="' . $reg->doc_tarifario . '" a="' . $reg->doc_tarifario . '" style="cursor: pointer !important; cursor: hand !important;" data-toggle="modal" data-target="#mostrarModalPdf" c="' . $reg->nombre_tarifario . '">
                        <img src="recursos/pdf/pdf.svg" class="card-img-top" height="35" width="30" >
                       </a>
                     </center>',
                "2" => $reg->nombre_tarifario,
                "3" => ($reg->estado_tarifario == 0) ? '
                    <center>
                        <span class="label bg-green">&nbsp;&nbsp;&nbsp;&nbsp;Activado&nbsp;&nbsp;&nbsp;&nbsp;
                    </span>
                    </center>' : '
                    <center>
                        <span class="label bg-red">Deshabilitado</span>
                    </center>',
                "4" => ($reg->estado_tarifario) ? '
                    <center>
                        <button class="btn btn-warning btn-xs resplaAmari" onclick="mostrar_doc_tarifario(' . $reg->id_tarifario . ')">
                            <i class="fa fa-edit"></i>
                        </button>' . '
                        <button class="btn btn-success btn-xs resplaVerde" onclick="activar_doc_tarifario(' . $reg->id_tarifario . ')">
                            <i class="fa fa-check-circle"></i>
                        </button>
                    </center>' : '
                    <center>
                    <button class="btn btn-warning btn-xs resplaAmari" onclick="mostrar_doc_tarifario(' . $reg->id_tarifario . ')">
                        <i class="fa fa-edit"></i>
                    </button>' . '
                    <button class="btn btn-danger btn-xs resplaRojo" onclick="desactivar_doc_tarifario(' . $reg->id_tarifario . ')">
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

    case 'mostrar_tarifario':
        // $a= $_GET["a"];
        $id_tarifario = $_POST["id_tarifario"];
        $rspta        = $tarifario->mostrarTarifario($id_tarifario);
        //Codificar el resultado utilizando json
        // var_dump($rspta); die;
        $data = array();
        while ($reg = $rspta->fetch_object()) {
            $data[] = array(
                "id_tarifario"     => $reg->id_tarifario,
                "doc_tarifario"    => $reg->doc_tarifario,
                "nombre_tarifario" => $reg->nombre_tarifario,
            );
        }
        echo json_encode($data);
        break;
    case 'desactivar_docnorma':
        // $id_tarifario = $_POST["id_tarifario"];
        $rspta = $tarifario->desactivarDocnorma($id_tarifario);
        echo $rspta;
        break;

    case 'activar_docnorma':
        // $id_tarifario = $_POST["id_tarifario"];
        $rspta = $tarifario->activarDocnorma($id_tarifario);
        echo $rspta;
        break;
}
