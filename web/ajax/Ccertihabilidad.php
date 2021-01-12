<?php
if (strlen(session_id()) < 1)
    session_start();
/*MODULO DE CATEGORIA*/
/*Aqui se crea, se edita, se eimina y se lista las categorias*/
require_once '../modelo/Mcertihabilidad.php';

$certificadoH= new McertificadoH();

$idcertificadoH = isset($_POST["idcertificadoH"])?limpiarCadena($_POST["idcertificadoH"]):"";
$titulo = isset($_POST["titulo"])?limpiarCadena($_POST["titulo"]):"";
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
        move_uploaded_file($_FILES["foto"]["tmp_name"], "../multimedia/certificadoH/" . $foto);
      }
    }

    if (empty($idcertificadoH)){
      $rspta=$certificadoH->insertar($titulo,$descripcion,$foto);
      echo $rspta;
    }else {
        if($flat_foto==true){
            $datos_f =$certificadoH->nombreFoto($idcertificadoH);
            $nombre_img_ant=$datos_f->fetch_object()->foto;
            if($nombre_img_ant!=""){
              unlink("../multimedia/certificadoH/".$nombre_img_ant);
            }
        }
        $rspta=$certificadoH->editar($idcertificadoH,$titulo,$descripcion,$foto);
        echo $rspta;
    }

  break;

	case 'mostrar':
    $rspta = $certificadoH->mostrar($idcertificadoH);
   // var_dump($rspta);die;
    echo json_encode($rspta);
	break;

  case 'listar':
		$rspta=$certificadoH->listar();
 		$data = Array();
    $cont = $rspta->num_rows;

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0" => $cont--,
 				"1" => $reg->titulo,
 				"2" => $reg->descripcion,
 				"3" =>'<center>'
         .'<button class="btn btn-warning btn-xs" type="button" onclick="ver_costo('.$reg->idcertifhabilidad.')">'
           .'<i class="fa fa-eye"></i>'
         .'</button> '
         .'<button class="btn btn-success btn-xs" onclick="mostrar('.$reg->idcertifhabilidad.')">'
           .'<i class="fa fa-plus-circle"></i>'
         .'</button> '
         .'</center>',
				"4" => '<img src="../multimedia/certificadoH/'.$reg->foto.'" class="img-thumbnail" width="100px">',
        "5" => ($reg->estado)?'<small class="label pull-right bg-red">DESHABILITADO</small>':'<small class="label pull-right bg-green">ACTIVO</small>',
        "6" => ($reg->estado)?'<center>'
        .'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idcertifhabilidad.')">'
          .'<i class="fa fa-edit"></i>'
        .'</button> '
        .'<button class="btn btn-success btn-xs" onclick="activar('.$reg->idcertifhabilidad.')">'
          .'<i class="fa fa-check-circle"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="eliminar('.$reg->idcertifhabilidad.')">'
          .'<i class="fa fa-trash"></i>'
        .'</button> '
        .'</center>':'<center>'
        .'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idcertifhabilidad.')">'
          .'<i class="fa fa-edit"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->idcertifhabilidad.')">'
          .'<i class="fa fa-close"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="eliminar('.$reg->idcertifhabilidad.')">'
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
  		$rspta=$certificadoH->desactivar($idcertificadoH);
   		echo $rspta;
  	break;

  	case 'activar':
  		$rspta=$certificadoH->activar($idcertificadoH);
   		echo $rspta;
  	break;
    case 'eliminar':
      $datos_f =$certificadoH->nombreFoto($idcertificadoH);
      $nombre_img_ant=$datos_f->fetch_object()->foto;

  		$rspta=$certificadoH->eliminar($idcertificadoH);
      if($rspta==1 && $nombre_img_ant!=""){
        unlink("../multimedia/certificadoH/".$nombre_img_ant);
      }
   		echo $rspta;
    break;
    /**Costos */
    case 'listarcosto':
      $id = $_GET["id"];
      $rspta=$certificadoH->listarcosto($id);
       $data = Array();
      $cont = $rspta->num_rows;
  
       while ($reg=$rspta->fetch_object()){
         $data[]=array(
           "0" => $cont--,
           "1" => $reg->cost_por_obra,
           "2" => $reg->monto
           );
       }
       $results = array(
         "sEcho"=>1, //Información para el datatables
         "iTotalRecords"=>count($data), //enviamos el total registros al datatable
         "iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
         "aaData"=>$data);
       echo json_encode($results);
  
    break;
    
    default :
   		echo 'ERROR AJAX CATEGORIA SIN OP';
    break;
}

?>
