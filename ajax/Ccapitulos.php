<?php
if (strlen(session_id()) < 1)
    session_start();
/*MODULO DE CATEGORIA*/
/*Aqui se crea, se edita, se eimina y se lista las categorias*/
require_once '../modelo/Mcapitulos.php';

$capitulos= new Mcapitulos();

$idcapitulos = isset($_POST["idcapitulos"])?limpiarCadena($_POST["idcapitulos"]):"";
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
        move_uploaded_file($_FILES["foto"]["tmp_name"], "../multimedia/capitulos/" . $foto);
      }
    }

    if (empty($idcapitulos)){
      $rspta=$capitulos->insertar($titulo,$descripcion,$foto);
      echo $rspta;
    }else {
        if($flat_foto==true){
            $datos_f =$capitulos->nombreFoto($idcapitulos);
            $nombre_img_ant=$datos_f->fetch_object()->foto;
            if($nombre_img_ant!=""){
              unlink("../multimedia/capitulos/".$nombre_img_ant);
            }
        }
        $rspta=$capitulos->editar($idcapitulos,$titulo,$descripcion,$foto);
        echo $rspta;
    }

  break;

	case 'mostrar':
    $rspta = $capitulos->mostrar($idcapitulos);
   // var_dump($rspta);die;
    echo json_encode($rspta);
	break;

  case 'listar':
		$rspta=$capitulos->listar();
 		$data = Array();
    $cont = $rspta->num_rows;

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0" => $cont--,
 				"1" => $reg->titulo,
 				"2" => $reg->descripcion,
				"3" => '<img src="../multimedia/capitulos/'.$reg->foto.'" class="img-thumbnail" width="100px">',
        "4" => ($reg->estado)?'<small class="label pull-right bg-red">DESHABILITADO</small>':'<small class="label pull-right bg-green">ACTIVO</small>',
        "5" => ($reg->estado)?'<center>'
        .'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idcapitulos.')">'
          .'<i class="fa fa-edit"></i>'
        .'</button> '
        .'<button class="btn btn-success btn-xs" onclick="activar('.$reg->idcapitulos.')">'
          .'<i class="fa fa-check-circle"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="eliminar('.$reg->idcapitulos.')">'
          .'<i class="fa fa-trash"></i>'
        .'</button> '
        .'</center>':'<center>'
        .'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idcapitulos.')">'
          .'<i class="fa fa-edit"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->idcapitulos.')">'
          .'<i class="fa fa-close"></i>'
        .'</button> '
        .'<button class="btn btn-danger btn-xs" onclick="eliminar('.$reg->idcapitulos.')">'
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

   /* case 'listar_web':
        $rspta=$capitulos->listar_web();
        $html_data ="";
        while ($reg=$rspta->fetch_object()){
            $html_data = $html_data . '<div class="hero_slide">'
                .'<div class="hero_slide_background" style="background-image:url(multimedia/capitulos/'.$reg->foto.')"></div>'
                .'<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">'
                    .'<div class="hero_slide_content text-center">'
                        .'<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">'.$reg->titulo.'</h1>'
                    .'</div>'
                .'</div>'
            .'</div>';
        }
  	echo ($html_data);
    break;*/

    case 'desactivar':
  		$rspta=$capitulos->desactivar($idcapitulos);
   		echo $rspta;
  	break;

  	case 'activar':
  		$rspta=$capitulos->activar($idcapitulos);
   		echo $rspta;
  	break;
    case 'eliminar':
      $datos_f =$capitulos->nombreFoto($idcapitulos);
      $nombre_img_ant=$datos_f->fetch_object()->foto;

  		$rspta=$capitulos->eliminar($idcapitulos);
      if($rspta==1 && $nombre_img_ant!=""){
        unlink("../multimedia/capitulos/".$nombre_img_ant);
      }
   		echo $rspta;
  	break;
    default :
   		echo 'ERROR AJAX CATEGORIA SIN OP';
    break;
}

?>
