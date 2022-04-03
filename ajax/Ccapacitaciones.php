<?php
if (strlen(session_id()) < 1)
    session_start();
/*MODULO DE CATEGORIA*/
/*Aqui se crea, se edita, se eimina y se lista las categorias*/
require_once '../modelo/Mcapacitaciones.php';

$capacitaciones= new Mcapacitacion();

$idcapacitacion = isset($_POST["idcapacitacion"])?limpiarCadena($_POST["idcapacitacion"]):"";
$titulo = isset($_POST["titulo"])?limpiarCadena($_POST["titulo"]):"";
$descripcion = isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";
$fecha = isset($_POST["fecha"])?limpiarCadena($_POST["fecha"]):"";
$foto = isset($_POST["foto"])?limpiarCadena($_POST["foto"]):"";
$costo = isset($_POST["costo"])?limpiarCadena($_POST["costo"]):"";

$op = $_GET["op"];

switch($op){

  case 'guardaryeditar':
        //*IMAGEN 1*//
        if (!file_exists($_FILES['foto']['tmp_name']) || !is_uploaded_file($_FILES['foto']['tmp_name'])){
          $flat_foto=false;
          $foto=$_POST["foto_actual"];
        }else{
          $flat_foto=true;
          $ext_p = explode(".", $_FILES["foto"]["name"]);
          if ($_FILES['foto']['type'] == "image/jpg" || $_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png"){
            $foto = rand(0, 20) . round(microtime(true)) . rand(21, 41) . '.' . end($ext_p);
            move_uploaded_file($_FILES["foto"]["tmp_name"], "../multimedia/capacitaciones/" . $foto);
          }
        }
    if (empty($idcapacitacion)){
      $rspta=$capacitaciones->insertar($titulo, $descripcion, $fecha, $foto, $costo);
      echo $rspta;
    }else {
      if($flat_foto==true){
        $datos_f =$capacitaciones->nombreFoto($idcapacitacion);
        $nombre_img_ant=$datos_f->fetch_object()->foto;
        if($nombre_img_ant!=""){
          unlink("../multimedia/capacitaciones/".$nombre_img_ant);
        }
    }
        $rspta=$capacitaciones->editar($idcapacitacion,$titulo,$descripcion,$foto,$fecha, $costo);
        echo $rspta;
    }

  break;

	case 'mostrar':
    $rspta = $capacitaciones->mostrar($idcapacitacion);
    echo json_encode($rspta);
	break;

  case 'listar':
		$rspta=$capacitaciones->listar();
 		$data = Array();
    $cont = $rspta->num_rows;

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0" => $cont--,
 				"1" => $reg->titulo,
 				"2" => $reg->descripcion,
 				"3" => $reg->costo,
 				"4" => $reg->fecha,
 				"5" => '<img src="../multimedia/capacitaciones/'.$reg->foto.'" class="img-thumbnail" width="100px">',
        "6" => ($reg->estado)?'<small class="label pull-right bg-red">DESHABILITADO</small>':'<small class="label pull-right bg-green">ACTIVO</small>',
        "7" => ($reg->estado)?'<center>'
        .'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idcapacitacion.')">'
          .'<i class="fa fa-edit"></i>'
        .'</button> '
        .'<button class="btn btn-success btn-xs" onclick="activar('.$reg->idcapacitacion.')">'
          .'<i class="fa fa-check-circle"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="eliminar('.$reg->idcapacitacion.')">'
          .'<i class="fa fa-trash"></i>'
        .'</button> '
        .'</center>':'<center>'
        .'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idcapacitacion.')">'
          .'<i class="fa fa-edit"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->idcapacitacion.')">'
          .'<i class="fa fa-close"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="eliminar('.$reg->idcapacitacion.')">'
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
  		$rspta=$capacitaciones->desactivar($idcapacitacion);
   		echo $rspta;
  	break;

  	case 'activar':
  		$rspta=$capacitaciones->activar($idcapacitacion);
   		echo $rspta;
  	break;
    case 'eliminar':
      $datos_f =$capacitaciones->nombreFoto($idcapacitacion);
      $nombre_img_ant=$datos_f->fetch_object()->foto;

  		$rspta=$capacitaciones->eliminar($idcapacitacion);
      if($rspta==1 && $nombre_img_ant!=""){
        unlink("../multimedia/capacitaciones/".$nombre_img_ant);
      }
   		echo $rspta;
  	break;
    default :
   		echo 'ERROR AJAX CATEGORIA SIN OP';
    break;
}
