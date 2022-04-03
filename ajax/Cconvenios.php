<?php
if (strlen(session_id()) < 1)
    session_start();
require_once '../modelo/Mconvenios.php';
$convenios= new Mconvenios();

$idconvenios= isset($_POST["idconvenios"])?limpiarCadena($_POST["idconvenios"]):"";
$nombre = isset($_POST["nombre"])?limpiarCadena($_POST["nombre"]):"";
$descripcion = isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";
$foto = isset($_POST["foto"])?limpiarCadena($_POST["foto"]):"";

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
          move_uploaded_file($_FILES["foto"]["tmp_name"], "../multimedia/convenios/" . $foto);
        }
      }

      if (empty($idconvenios)){
        $rspta=$convenios->insertar($nombre,$descripcion,$foto);
        echo $rspta;
      }else {
          if($flat_foto==true){
              $datos_f =$convenios->nombreFoto($idconvenios);
              $nombre_img_ant=$datos_f->fetch_object()->foto;
              if($nombre_img_ant!=""){
                unlink("../multimedia/convenios/".$nombre_img_ant);
              }
          }
          $rspta=$convenios->editar($idconvenios,$nombre,$descripcion,$foto);
          echo $rspta;
      }
	break;

	case 'desactivar':
		$rspta=$convenios->desactivar($idconvenios);
 		echo $rspta;
	break;

  case 'eliminar':
    $datos_f =$convenios->nombreFoto($idconvenios);
    $nombre_img_ant=$datos_f->fetch_object()->foto;

		$rspta=$convenios->eliminar($idconvenios);
    if($rspta==1 && $nombre_img_ant!=""){
      unlink("../multimedia/convenios/".$nombre_img_ant);
    }
 		echo $rspta;
	break;

	case 'activar':
		$rspta=$convenios->activar($idconvenios);
 		echo $rspta;
	break;

	case 'mostrar':
		$rspta=$convenios->mostrar($idconvenios);
 		echo json_encode($rspta);
	break;

  case 'count_convenios':
		$rspta=$convenios->count_convenios($idconvenios);
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$convenios->listar();
 		$data = Array();
    $cont = $rspta->num_rows;

 		while ($reg=$rspta->fetch_object()){

 			$data[]=array(
 				"0" => $cont--,
 				"1" => $reg->nombre,
				"2" => $reg->descripcion,
        "3" => '<img src="../multimedia/convenios/'.$reg->foto.'" class="img-thumbnail" width="100px">',
        "4" => ($reg->estado)?'<small class="label pull-right bg-red">DESHABILITADO</small>':'<small class="label pull-right bg-green">ACTIVO</small>',
				"5" => ($reg->estado)?'<center>'
        .'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idconvenio.')">'
          .'<i class="fa fa-edit"></i>'
        .'</button> '
        .'<button class="btn btn-success btn-xs" onclick="activar('.$reg->idconvenio.')">'
          .'<i class="fa fa-check-circle"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="eliminar('.$reg->idconvenio.')">'
          .'<i class="fa fa-trash"></i>'
        .'</button>'
        .'</center>':'<center>'
        .'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idconvenio.')">'
          .'<i class="fa fa-edit"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->idconvenio.')">'
          .'<i class="fa fa-close"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="eliminar('.$reg->idconvenio.')">'
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

  case 'listar_web':
      $rspta=$convenios->listar_web();
      while ($reg=$rspta->fetch_object()){
        $data[]=array(
          "id" => $reg->idconvenios,
          "nombre" => $reg->nombre,
          "foto" => $reg->foto,
          "descripcion" => $reg->descripcion,
          "tipo" => $reg->tipo
          );
      }
  echo json_encode($data);
  break;

	default :
  		// SI NO SE RECIVE NINGUNA OPERACION
 		echo 'ERROR AJAX CATEGORIA SIN OP';
  break;
}

?>
