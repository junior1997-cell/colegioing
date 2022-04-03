<?php
if (strlen(session_id()) < 1)
  session_start();
/*MODULO DE CATEGORIA*/
/*Aqui se crea, se edita, se eimina y se lista las categorias*/
require_once '../modelo/Malquiler.php';

$alquiler = new Malquiler();
//$idalquiler,$nombre, $descripcion, $capacidad,$foto,$direccion,$condiciones

$idalquiler = isset($_POST["idalquiler"]) ? limpiarCadena($_POST["idalquiler"]) : "";
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";
$descripcion = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";
$capacidad = isset($_POST["capacidad"]) ? limpiarCadena($_POST["capacidad"]) : "";
$foto = isset($_POST["foto"]) ? limpiarCadena($_POST["foto"]) : "";
$direccion = isset($_POST["direccion"]) ? limpiarCadena($_POST["direccion"]) : "";
$condiciones = isset($_POST["condiciones"]) ? limpiarCadena($_POST["condiciones"]) : "";

$op = $_GET["op"];

switch ($op) {

  case 'guardaryeditar':
    //*IMAGEN 1*//
    if (!file_exists($_FILES['foto']['tmp_name']) || !is_uploaded_file($_FILES['foto']['tmp_name'])) {
      $flat_foto = false;
      $foto = $_POST["foto_actual"];
    } else {
      $flat_foto = true;
      $ext_p = explode(".", $_FILES["foto"]["name"]);
      if ($_FILES['foto']['type'] == "image/jpg" || $_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png") {
        $foto = rand(0, 20) . round(microtime(true)) . rand(21, 41) . '.' . end($ext_p);
        move_uploaded_file($_FILES["foto"]["tmp_name"], "../multimedia/alquiler/" . $foto);
      }
    }
    if (empty($idalquiler)) {
      $rspta = $alquiler->insertar($nombre, $descripcion, $capacidad, $foto, $direccion, $condiciones);
      echo $rspta;
    } else {
      if ($flat_foto == true) {
        $datos_f = $alquiler->nombreFoto($idalquiler);
        $nombre_img_ant = $datos_f->fetch_object()->foto;
        if ($nombre_img_ant != "") {
          unlink("../multimedia/alquiler/" . $nombre_img_ant);
        }
      }
      $rspta = $alquiler->editar($idalquiler, $nombre, $descripcion, $capacidad, $foto, $direccion, $condiciones);
      echo $rspta;
    }

    break;

  case 'mostrar':
    $rspta = $alquiler->mostrar($idalquiler);
    echo json_encode($rspta);
    break;
    
  case 'count_alquiler':
    $rspta = $alquiler->count_alquiler($idalquiler);
    echo json_encode($rspta);
    break;
    
  case 'listar_web_alq':
    $rspta = $alquiler->listar_web();
    while($row = mysqli_fetch_assoc($rspta)){
      $test[] = $row;
    }
          
    echo  json_encode($test,true);
    break;


  case 'listar':
    $rspta = $alquiler->listar();
    $data = array();
    $cont = $rspta->num_rows;

    while ($reg = $rspta->fetch_object()) {
      $data[] = array(
        "0" => $cont--,
        "1" => $reg->nombre,
        "2" => $reg->descripcion,
        "3" => $reg->condiciones,
        "4" => $reg->direccion,
        "5" => $reg->capacidad,
        "6" => '<img src="../multimedia/alquiler/' . $reg->foto . '" class="img-thumbnail" width="100px">',
        "7" => ($reg->estado) ? '<small class="label pull-right bg-red">DESHABILITADO</small>' : '<small class="label pull-right bg-green">ACTIVO</small>',
        "8" => ($reg->estado) ? '<center>'
          . '<button class="btn btn-warning btn-xs" onclick="mostrar(' . $reg->idalquiler . ')">'
          . '<i class="fa fa-edit"></i>'
          . '</button> '
          . '<button class="btn btn-success btn-xs" onclick="activar(' . $reg->idalquiler . ')">'
          . '<i class="fa fa-check-circle"></i>'
          . '</button> '
          . '<button class="btn btn-danger btn-xs" onclick="eliminar(' . $reg->idalquiler . ')">'
          . '<i class="fa fa-trash"></i>'
          . '</button> '
          . '</center>' : '<center>'
          . '<button class="btn btn-warning btn-xs" onclick="mostrar(' . $reg->idalquiler . ')">'
          . '<i class="fa fa-edit"></i>'
          . '</button> '
          . '<button class="btn btn-danger btn-xs" onclick="desactivar(' . $reg->idalquiler . ')">'
          . '<i class="fa fa-close"></i>'
          . '</button> '
          . '<button class="btn btn-danger btn-xs" onclick="eliminar(' . $reg->idalquiler . ')">'
          . '<i class="fa fa-trash"></i>'
          . '</button>'
          . '</center>'
      );
    }
    $results = array(
      "sEcho" => 1, //Información para el datatables
      "iTotalRecords" => count($data), //enviamos el total registros al datatable
      "iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
      "aaData" => $data
    );
    echo json_encode($results);

    break;

  case 'desactivar':
    $rspta = $alquiler->desactivar($idalquiler);
    echo $rspta;
    break;

  case 'activar':
    $rspta = $alquiler->activar($idalquiler);
    echo $rspta;
    break;
  case 'eliminar':
    $datos_f = $alquiler->nombreFoto($idalquiler);
    $nombre_img_ant = $datos_f->fetch_object()->foto;

    $rspta = $alquiler->eliminar($idalquiler);
    if ($rspta == 1 && $nombre_img_ant != "") {
      unlink("../multimedia/alquiler/" . $nombre_img_ant);
    }
    echo $rspta;
    break;
  default:
    echo 'ERROR AJAX CATEGORIA SIN OP';
    break;
}
