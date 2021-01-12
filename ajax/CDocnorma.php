<?php
if (strlen(session_id()) < 1) {
    session_start();
}

require_once '../modelo/MDocnorma.php';

$docnorma = new MDocnorma();

$id_docnorma = isset($_POST["id_docnorma"]) ? limpiarCadena($_POST["id_docnorma"]) : "";
$nombre_doc  = isset($_POST["nombre_doc"]) ? limpiarCadena($_POST["nombre_doc"]) : "";
$id_tipo_doc = isset($_POST["id_tipo_doc"]) ? limpiarCadena($_POST["id_tipo_doc"]) : "";
$doc         = isset($_POST["doc"]) ? limpiarCadena($_POST["doc"]) : "";

$op = $_GET["op"];
switch ($op) {
    case 'guardaryeditar':

        $extencion = explode(".", $_FILES["doc"]["name"]);
        $documento = rand(0, 20) . round(microtime(true)) . rand(21, 41) . '.' . end($extencion);
        move_uploaded_file($_FILES["doc"]["tmp_name"], "../admin/recursos/pdf/" . $documento);

        if (empty($id_docnorma)) {
            // ================================== INSERTAR UN NUEVO DOCUMENTO ==================================
            $rspta = $docnorma->insertarDocnorma($documento, $nombre_doc, $id_tipo_doc);
            echo $rspta;
        } else {
            $tipodirec = 0;
            if ($id_tipo_directiva >= 1) {
                $tipodirec = $id_tipo_directiva;
            } else {
                $tipodirec = $id_tipo_directiva2;
            }
            // ==================================EDITAR UNA DIRECTIVA EXISTENTE===============
            $rspta = $docnorma->editarDocnorma($id_docnorma, $documento, $nombre_doc, $id_tipo_doc);
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
                        <a tipe="btn btn-danger" class="btnMostrarPlanClasePDF"   pdf="recursos/pdf/' . $reg->doc_doc . '" a="recursos/pdf/' . $reg->doc_doc . '" style="cursor: pointer !important; cursor: hand !important;" data-toggle="modal" data-target="#mostrarModalplanClasePdf">
                        <img src="recursos/pdf/pdf.png" class="card-img-top" height="35" width="30" >
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
	                    <button class="btn btn-warning btn-xs" onclick="mostrar_docnorma(' . $reg->id_docnorma . ')">
	                        <i class="fa fa-edit"></i>
	                    </button>' . '
	                    <button class="btn btn-success btn-xs" onclick="activar_directiva(' . $reg->id_docnorma . ')">
	                        <i class="fa fa-check-circle"></i>
	                    </button>
	                </center>' : '
	                <center>
	                <button class="btn btn-warning btn-xs" onclick="mostrar_docnorma(' . $reg->id_docnorma . ')">
	                    <i class="fa fa-edit"></i>
	                </button>' . '
	                <button class="btn btn-danger btn-xs" onclick="desactivar_directiva(' . $reg->id_docnorma . ')">
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
    case 'desactivar_directiva':
        $id_docnorma = $_POST["id_docnorma"];
        $rspta       = $docnorma->desactivar_directiva($id_docnorma);
        echo $rspta;
        break;

    case 'activar_directiva':
        $id_docnorma = $_POST["id_docnorma"];
        $rspta       = $docnorma->activar_directiva($id_docnorma);
        echo $rspta;
        break;
}
