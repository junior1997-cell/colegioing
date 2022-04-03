<?php
if (strlen(session_id()) < 1)
    session_start();
/*MODULO DE CATEGORIA*/
/*Aqui se crea, se edita, se eimina y se lista las categorias*/
require_once '../modelo/Moplaboral.php';

$oplaboral= new Moplaboral();

$idoplaboral = isset($_POST["idoplaboral"])?limpiarCadena($_POST["idoplaboral"]):"";
$titulo = isset($_POST["titulo"])?limpiarCadena($_POST["titulo"]):"";
$descripcion = isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";
$vigencia = isset($_POST["vigencia"])?limpiarCadena($_POST["vigencia"]):"";
$entidad = isset($_POST["entidad"])?limpiarCadena($_POST["entidad"]):"";

$op = $_GET["op"];

switch($op){

  case 'guardaryeditar':
    if (empty($idoplaboral)){
      $rspta=$oplaboral->insertar($titulo, $descripcion, $vigencia, $entidad);
      echo $rspta;
    }else {
        $rspta=$oplaboral->editar($idoplaboral,$titulo, $descripcion, $vigencia, $entidad);
        echo $rspta;
    }

  break;

	case 'mostrar':
    $rspta = $oplaboral->mostrar($idoplaboral);
    echo json_encode($rspta);
	break;

  case 'listar':
		$rspta=$oplaboral->listar();
 		$data = Array();
    $cont = $rspta->num_rows;

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0" => $cont--,
 				"1" => $reg->titulo,
 				"2" => $reg->descripcion,
 				"3" => $reg->vigencia,
 				"4" => $reg->entidad,
        "5" => ($reg->estado)?'<small class="label pull-right bg-red">DESHABILITADO</small>':'<small class="label pull-right bg-green">ACTIVO</small>',
        "6" => ($reg->estado)?'<center>'
        .'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idoplaboral.')">'
          .'<i class="fa fa-edit"></i>'
        .'</button> '
        .'<button class="btn btn-success btn-xs" onclick="activar('.$reg->idoplaboral.')">'
          .'<i class="fa fa-check-circle"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="eliminar('.$reg->idoplaboral.')">'
          .'<i class="fa fa-trash"></i>'
        .'</button> '
        .'</center>':'<center>'
        .'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idoplaboral.')">'
          .'<i class="fa fa-edit"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->idoplaboral.')">'
          .'<i class="fa fa-close"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="eliminar('.$reg->idoplaboral.')">'
          .'<i class="fa fa-trash"></i>'
        .'</button>'
        .'</center>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	  break;

    case 'desactivar':
  		$rspta=$oplaboral->desactivar($idoplaboral);
   		echo $rspta;
  	break;

  	case 'activar':
  		$rspta=$oplaboral->activar($idoplaboral);
   		echo $rspta;
  	break;
    case 'eliminar':
      $datos_f =$oplaboral->nombreFoto($idoplaboral);
      $nombre_img_ant=$datos_f->fetch_object()->foto;

  		$rspta=$oplaboral->eliminar($idoplaboral);
      if($rspta==1 && $nombre_img_ant!=""){
        unlink("../multimedia/oplaboral/".$nombre_img_ant);
      }
   		echo $rspta;
  	break;
    default :
   		echo 'ERROR AJAX CATEGORIA SIN OP';
    break;
}
