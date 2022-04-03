<?php
if (strlen(session_id()) < 1) {
    session_start();
}

require_once '../modelo/MDocnorma.php';

$docnorma = new MDocnorma();

$id_docnorma     = isset($_POST["id_docnorma"]) ? limpiarCadena($_POST["id_docnorma"]) : "";
$nombre_doc      = isset($_POST["nombre_doc"]) ? limpiarCadena($_POST["nombre_doc"]) : "";
$tipo_doc_actual = isset($_POST["tipo_doc_actual"]) ? limpiarCadena($_POST["tipo_doc_actual"]) : "";
$id_tipo_doc     = isset($_POST["id_tipo_doc"]) ? limpiarCadena($_POST["id_tipo_doc"]) : "";
$docActual       = isset($_POST["docActual"]) ? limpiarCadena($_POST["docActual"]) : "";
$doc             = isset($_POST["doc"]) ? limpiarCadena($_POST["doc"]) : "";

$op = $_GET["op"];
switch ($op) {
    case 'guardaryeditar':
        // $id_docnorma = "";
        // $nombre_doc  = "sasasasa";
        // $id_tipo_doc = "1";
        // $doc         = "sassa/21.pdf";
        $pdf = "";
        if (!file_exists($_FILES['doc']['tmp_name']) || !is_uploaded_file($_FILES['doc']['tmp_name'])) {
            $pdf = $docActual;
        } else {
            $extencion = explode(".", $_FILES["doc"]["name"]);
            $documento = rand(0, 20) . round(microtime(true)) . rand(21, 41) . '.' . end($extencion);
            move_uploaded_file($_FILES["doc"]["tmp_name"], "../admin/recursos/pdf/" . $documento);
            $pdf = "recursos/pdf/" . $documento;
        }

        if (empty($id_docnorma)) {
            // ================================== INSERTAR UN NUEVO DOCUMENTO ==================================
            $rspta = $docnorma->insertarDocnorma($pdf, $nombre_doc, $id_tipo_doc);
            echo $rspta;
        } else {
            $id_tipo_doc_base = 0;
            if ($id_tipo_doc >= 1) {
                $id_tipo_doc_base = $id_tipo_doc;
            } else {
                $id_tipo_doc_base = $tipo_doc_actual;
            }
            // ==================================EDITAR UNA DIRECTIVA EXISTENTE===============
            $rspta = $docnorma->editarDocnorma($id_docnorma, $pdf, $nombre_doc, $id_tipo_doc_base);
            echo $rspta;
        }
        break;

    case 'listar_docnorma':
        $rspta = $docnorma->listarDocnorma();
        //Vamos a declarar un array
        $data = array();
        $id   = 0;
        // var_dump($rspta); die;
        while ($reg = $rspta->fetch_object()) {
            $id++;
            $data[] = array(
                "0" => $id,
                "1" => '
                    <center>
                        <a tipe="btn btn-danger" class="btnMostrarPlanClasePDF resplandor"   pdf="' . $reg->doc_doc . '" a="' . $reg->doc_doc . '" style="cursor: pointer !important; cursor: hand !important;" data-toggle="modal" data-target="#mostrarModalplanClasePdf">
                        <img src="recursos/pdf/pdf.svg" class="card-img-top" height="35" width="30" >
                       </a>
                     </center>',
                "2" => $reg->nombre_doc,
                "3" => $reg->nombre_tipo_doc,
                "4" => ($reg->estado_doc == 0) ? '
                    <center>
                        <span class="label bg-green">&nbsp;&nbsp;&nbsp;&nbsp;Activado&nbsp;&nbsp;&nbsp;&nbsp;
                    </span>
                    </center>' : '
                    <center>
                        <span class="label bg-red">Deshabilitado</span>
                    </center>',
                "5" => ($reg->estado_doc) ? '
                    <center>
                        <button class="btn btn-warning btn-xs resplaAmari" onclick="mostrar_docnorma(' . $reg->id_docnorma . ')">
                            <i class="fa fa-edit"></i>
                        </button>' . '
                        <button class="btn btn-success btn-xs resplaVerde" onclick="activar_docnorma(' . $reg->id_docnorma . ')">
                            <i class="fa fa-check-circle"></i>
                        </button>
                    </center>' : '
                    <center>
                    <button class="btn btn-warning btn-xs resplaAmari" onclick="mostrar_docnorma(' . $reg->id_docnorma . ')">
                        <i class="fa fa-edit"></i>
                    </button>' . '
                    <button class="btn btn-danger btn-xs resplaRojo" onclick="desactivar_docnorma(' . $reg->id_docnorma . ')">
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

    case 'mostrar_docnorma':
        // $a= $_GET["a"];
        $id_docnorma = $_POST["id_docnorma"];
        $rspta       = $docnorma->mostrarDocnorma($id_docnorma);
        //Codificar el resultado utilizando json
        // var_dump($rspta); die;
        $data = array();
        while ($reg = $rspta->fetch_object()) {
            $data[] = array(
                "id_docnorma"     => $reg->id_docnorma,
                "doc_doc"         => $reg->doc_doc,
                "nombre_doc"      => $reg->nombre_doc,
                "nombre_tipo_doc" => $reg->nombre_tipo_doc,
                "idtipodoc"       => $reg->idtipodoc,
            );
        }
        echo json_encode($data);
        break;

    case 'count_doc_normativos':
            $rspta = $docnorma->count_doc_norma($id_docnorma);
            echo json_encode($rspta);
            break;
    case 'desactivar_docnorma':
        // $id_docnorma = $_POST["id_docnorma"];
        $rspta = $docnorma->desactivarDocnorma($id_docnorma);
        echo $rspta;
        break;

    case 'activar_docnorma':
        // $id_docnorma = $_POST["id_docnorma"];
        $rspta = $docnorma->activarDocnorma($id_docnorma);
        echo $rspta;
        break;
}
