<?php
if (strlen(session_id()) < 1) {
    session_start();
}

/*Aqui se crea, se edita, se eimina y se lista las categorias*/
require_once '../modelo/Mcomunicados.php';

$Mcomunicados = new Mcomunicados();
/** DATOS GENERALES **/
$idcomunicado = isset($_POST["idcomunicado"]) ? limpiarCadena($_POST["idcomunicado"]) : "";
$titulo       = isset($_POST["titulo"]) ? limpiarCadena($_POST["titulo"]) : "";
$descripcion  = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";
/** Fecha **/
$fechaActual = isset($_POST["fechaActual"]) ? limpiarCadena($_POST["fechaActual"]) : "";
$foto        = isset($_POST["foto"]) ? limpiarCadena($_POST["foto"]) : "";
$op          = $_GET["op"];

switch ($op) {

    case 'guardaryeditar':
        //*IMAGEN 1*//
        if (!file_exists($_FILES['foto']['tmp_name']) || !is_uploaded_file($_FILES['foto']['tmp_name'])) {
            $flat_foto = false;
            $foto      = $_POST["foto_actual"];
        } else {

            $flat_foto = true;
            $ext_p     = explode(".", $_FILES["foto"]["name"]);
            if ($_FILES['foto']['type'] == "image/jpg" || $_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png") {
                $foto = rand(0, 20) . round(microtime(true)) . rand(21, 41) . '.' . end($ext_p);
                move_uploaded_file($_FILES["foto"]["tmp_name"], "../multimedia/comunicados/" . $foto);
            }
        }

        if (empty($idcomunicado)) {
            $rspta = $Mcomunicados->insertar($titulo, nl2br($descripcion), $foto, $fechaActual);
            //var_dump($rspta);die;
            echo $rspta;
        } else {
            if ($flat_foto == true) {
                $datos_f        = $Mcomunicados->nombreFoto($idcomunicado);
                $nombre_img_ant = $datos_f->fetch_object()->foto;
                if ($nombre_img_ant != "") {
                    unlink("../multimedia/comunicados/" . $nombre_img_ant);
                }
            }
            $rspta = $Mcomunicados->editar($idcomunicado, $titulo, nl2br($descripcion), $foto, $fechaActual);
            echo $rspta;

            // $ver = [$idcomunicado,$titulo,$descripcion, $foto, $fechaActual];
            // echo json_encode($ver);
        }

        break;

    case 'mostrar':
        $rspta = $Mcomunicados->mostrar($idcomunicado);
        echo json_encode($rspta);
        break;

    case 'listar':
        $rspta = $Mcomunicados->listar();
        $data  = array();
        $cont  = $rspta->num_rows;
        //var_dump($cont);die;

        while ($reg = $rspta->fetch_object()) {
            $data[] = array(
                "0" => $cont--,
                "1" => $reg->titulo,
                "2" => $reg->descripcion,
                "3" => ($reg->foto == "") ? '
          <img src="recursos/img/img_defecto.png" class="img-thumbnail" width="250px">
          ' : '<img src="../multimedia/comunicados/' . $reg->foto . '" class="img-thumbnail" width="250px">',
                "4" => $reg->fecha,
                "5" => ($reg->estado) ? '<center><button class="btn btn-warning btn-xs" onclick="mostrar(' . $reg->idcomunicado . ')"><i class="fa fa-edit"></i></button>' . ' <button class="btn btn-danger btn-xs" onclick="desactivar(' . $reg->idcomunicado . ')"><i class="fa fa-trash"></i></button></center>' : '<center><button class="btn btn-warning btn-xs" onclick="mostrar(' . $reg->idcomunicado . ')"><i class="fa fa-edit"></i></button>' . ' <button class="btn btn-success btn-xs" onclick="activar(' . $reg->idcomunicado . ')"><i class="fa fa-check-circle"></i></button></center>',
            );
        }
        $results = array(
            "sEcho"                => 1, //Información para el datatables
            "iTotalRecords"        => count($data), //enviamos el total registros al datatable
            "iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
            "aaData"               => $data);
        echo json_encode($results);

        break;

    case 'listar_web':
        $rspta = $Mcomunicados->listar_web();
        while ($row = mysqli_fetch_assoc($rspta)) {
            $test[] = $row;
        }
        echo json_encode($test,true);
    break;

    case 'desactivar':
        $rspta = $Mcomunicados->desactivar($idcomunicado);
        echo $rspta;
        break;

    case 'activar':
        $rspta = $Mcomunicados->activar($idcomunicado);
        echo $rspta;
        break;
    case 'eliminar':
        $rspta = $Mcomunicados->activar($idcomunicado);
        echo $rspta;
        break;
    default:
        echo 'ERROR AJAX Mcomunicados SIN OP';
        break;
}
