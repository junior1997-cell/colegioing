<?php
if (strlen(session_id()) < 1)
    session_start();

/*Aqui se crea, se edita, se eimina y se lista las categorias*/
require_once '../modelo/MTuristicos.php';

$turisticos= new MTuristicos();
/** DATOS GENERALES **/
$idturisticos = isset($_POST["idturisticos"])?limpiarCadena($_POST["idturisticos"]):"";
$titulo = isset($_POST["titulo"])?limpiarCadena($_POST["titulo"]):"";
$descripcion = isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";
/** IMAGENES **/
$foto1 = isset($_POST["foto1"])?limpiarCadena($_POST["foto1"]):"";
$foto2 = isset($_POST["foto2"])?limpiarCadena($_POST["foto2"]):"";

$op = $_GET["op"];


switch($op){

  case 'guardaryeditar':
    //*IMAGEN 1*//
    if (!file_exists($_FILES['foto1']['tmp_name']) || !is_uploaded_file($_FILES['foto1']['tmp_name'])){
      $flat_foto1=false;
      $foto1=$_POST["foto1_actual"];
    }else{
      $flat_foto1=true;
      $ext_p = explode(".", $_FILES["foto1"]["name"]);
      if ($_FILES['foto1']['type'] == "image/jpg" || $_FILES['foto1']['type'] == "image/jpeg" || $_FILES['foto1']['type'] == "image/png"){
        $foto1 = rand(0, 20) . round(microtime(true)) . rand(21, 41) . '.' . end($ext_p);
        move_uploaded_file($_FILES["foto1"]["tmp_name"], "../multimedia/turisticos/" . $foto1);
      }
    }
    //*IMAGEN 2*//
    if (!file_exists($_FILES['foto2']['tmp_name']) || !is_uploaded_file($_FILES['foto2']['tmp_name'])){
      $flat_foto2=false;
      $foto2=$_POST["foto2_actual"];
    }else{
      $flat_foto2=true;
      $ext_s = explode(".", $_FILES["foto2"]["name"]);
      if ($_FILES['foto2']['type'] == "image/jpg" || $_FILES['foto2']['type'] == "image/jpeg" || $_FILES['foto2']['type'] == "image/png"){
        $foto2 = rand(42, 62) . round(microtime(true)) . rand(63, 83) . '.' . end($ext_s);
        move_uploaded_file($_FILES["foto2"]["tmp_name"], "../multimedia/turisticos/" . $foto2);
      }
    }

    if (empty($idturisticos)){
      $rspta=$turisticos->insertar($titulo,nl2br($descripcion),$foto1,$foto2);
      echo $rspta;
    }else {
        if($flat_foto1==true){
            $datos_f1 =$turisticos->nombreFoto($idturisticos,1);
            $titulo_img_1_ant=$datos_f1->fetch_object()->foto1;
            if($titulo_img_1_ant!=""){
              unlink("../multimedia/turisticos/".$titulo_img_1_ant);
            }
        }
        if($flat_foto2==true){
            $datos_f2 =$turisticos->nombreFoto($idturisticos,2);
            $titulo_img_2_ant=$datos_f2->fetch_object()->foto2;
            if($titulo_img_2_ant!=""){
              unlink("../multimedia/turisticos/".$titulo_img_2_ant);
            }
        }

        $rspta=$turisticos->editar($idturisticos,$titulo,nl2br($descripcion),$foto1,$foto2);
        echo $rspta;
    }

  break;

	case 'mostrar':
		$rspta = $turisticos->mostrar($idturisticos);
    echo json_encode($rspta);
	break;

  case 'listar':
		$rspta=$turisticos->listar();
 		$data = Array();
    $cont = $rspta->num_rows;

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0" => $cont--,
 				"1" => $reg->titulo,
				"2" => $reg->descripcion,
				"3" => ($reg->estado)?'<center><button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idturisticos.')"><i class="fa fa-edit"></i></button>'.' <button class="btn btn-success btn-xs" onclick="activar('.$reg->idturisticos.')"><i class="fa fa-check-circle"></i></button></center>':'<center><button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idturisticos.')"><i class="fa fa-edit"></i></button>'.' <button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->idturisticos.')"><i class="fa fa-trash"></i></button></center>'
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
        $rspta=$turisticos->listar_web();
        while ($reg=$rspta->fetch_object()){
          $data[]=array(
            "idturisticos" => $reg->idturisticos,
            "foto1" => $reg->foto1,
            "titulo" => $reg->titulo,
            "descripcion" => $reg->descripcion
            );
        }
  	echo json_encode($data);
    break;

    case 'desactivar':
  		$rspta=$turisticos->desactivar($idturisticos);
   		echo $rspta;
  	break;

  	case 'activar':
  		$rspta=$turisticos->activar($idturisticos);
   		echo $rspta;
  	break;
    case 'eliminar':
  		$rspta=$turisticos->activar($idturisticos);
   		echo $rspta;
  	break;
    default :
   		echo 'ERROR AJAX TURISTICOS SIN OP';
    break;
}

?>
