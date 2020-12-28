<?php
if (strlen(session_id()) < 1)
    session_start();

/*Aqui se crea, se edita, se eimina y se lista las categorias*/
require_once '../modelo/MPaquetes.php';

$paquetes= new MPaquetes();
/** DATOS GENERALES **/
$idpaquetes = isset($_POST["idpaquetes"])?limpiarCadena($_POST["idpaquetes"]):"";
$nombre = isset($_POST["nombre"])?limpiarCadena($_POST["nombre"]):"";
$precio = isset($_POST["precio"])?limpiarCadena($_POST["precio"]):"";
$dp = isset($_POST["dp"])?limpiarCadena($_POST["dp"]):"";
$intinerario = isset($_POST["intinerario"])?limpiarCadena($_POST["intinerario"]):"";
$incluye = isset($_POST["incluye"])?limpiarCadena($_POST["incluye"]):"";
$noincluye = isset($_POST["noincluye"])?limpiarCadena($_POST["noincluye"]):"";
$aclaraciones = isset($_POST["aclaraciones"])?limpiarCadena($_POST["aclaraciones"]):"";
$informacion_general = isset($_POST["informacion_general"])?limpiarCadena($_POST["informacion_general"]):"";
/** IMAGENES **/
$foto1 = isset($_POST["foto1"])?limpiarCadena($_POST["foto1"]):"";
$foto2 = isset($_POST["foto2"])?limpiarCadena($_POST["foto2"]):"";
$foto3 = isset($_POST["foto3"])?limpiarCadena($_POST["foto3"]):"";

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
        move_uploaded_file($_FILES["foto1"]["tmp_name"], "../multimedia/paquetes/" . $foto1);
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
        move_uploaded_file($_FILES["foto2"]["tmp_name"], "../multimedia/paquetes/" . $foto2);
      }
    }
    //*IMAGEN SECUNDARIA*//
    if (!file_exists($_FILES['foto3']['tmp_name']) || !is_uploaded_file($_FILES['foto3']['tmp_name'])){
      $flat_foto3=false;
      $foto3=$_POST["foto3_actual"];
    }else{
      $flat_foto3=true;
      $ext_s2 = explode(".", $_FILES["foto3"]["name"]);
      if ($_FILES['foto3']['type'] == "image/jpg" || $_FILES['foto3']['type'] == "image/jpeg" || $_FILES['foto3']['type'] == "image/png"){
        $foto3 = rand(21, 41) . round(microtime(true)) . rand(0, 20) . '.' . end($ext_s2);
        move_uploaded_file($_FILES["foto3"]["tmp_name"], "../multimedia/paquetes/" . $foto3);
      }
    }


    if (empty($idpaquetes)){
      $rspta=$paquetes->insertar($nombre,$precio,$dp,nl2br($intinerario),nl2br($incluye),nl2br($noincluye),nl2br($aclaraciones),nl2br($informacion_general),$foto1,$foto2,$foto3);
      echo $rspta;
    }else {
        if($flat_foto1==true){
            $datos_f1 =$paquetes->nombreFoto($idpaquetes,1);
            $nombre_img_1_ant=$datos_f1->fetch_object()->foto1;
            if($nombre_img_1_ant!=""){
              unlink("../multimedia/paquetes/".$nombre_img_1_ant);
            }
        }
        if($flat_foto2==true){
            $datos_f2 =$paquetes->nombreFoto($idpaquetes,2);
            $nombre_img_2_ant=$datos_f2->fetch_object()->foto2;
            if($nombre_img_2_ant!=""){
              unlink("../multimedia/paquetes/".$nombre_img_2_ant);
            }
        }
        if($flat_foto3==true){
            $datos_f3 =$paquetes->nombreFoto($idpaquetes,3);
            $nombre_img_3_ant=$datos_f3->fetch_object()->foto3;
            if($nombre_img_3_ant!=""){
              unlink("../multimedia/paquetes/".$nombre_img_3_ant);
            }
        }

        $rspta=$paquetes->editar($idpaquetes,$nombre,$precio,$dp,nl2br($intinerario),nl2br($incluye),nl2br($noincluye),nl2br($aclaraciones),nl2br($informacion_general),$foto1,$foto2,$foto3);
        echo $rspta;
    }

  break;

	case 'mostrar':
		$rspta = $paquetes->mostrar($idpaquetes);
    echo json_encode($rspta);
	break;

  case 'listar':
		$rspta=$paquetes->listar();
 		$data = Array();
    $cont = $rspta->num_rows;

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0" => $cont--,
 				"1" => $reg->nombre,
				"2" => $reg->dp,
        "3" => $reg->precio,
				"4" => ($reg->estado)?'<center><button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idpaquetes.')"><i class="fa fa-edit"></i></button>'.' <button class="btn btn-success btn-xs" onclick="activar('.$reg->idpaquetes.')"><i class="fa fa-check-circle"></i></button></center>':'<center><button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idpaquetes.')"><i class="fa fa-edit"></i></button>'.' <button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->idpaquetes.')"><i class="fa fa-trash"></i></button></center>'
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
        $rspta=$paquetes->listar_web();
        while ($reg=$rspta->fetch_object()){
          $data[]=array(
            "idpaquetes" => $reg->idpaquetes,
            "nombre" => $reg->nombre,
            "foto1" => $reg->foto1,
            "dp" => $reg->dp,
            "precio" => $reg->precio,
            "intinerario" => $reg->intinerario
            );
        }
  	echo json_encode($data);
    break;

    case 'desactivar':
  		$rspta=$paquetes->desactivar($idpaquetes);
   		echo $rspta;
  	break;

  	case 'activar':
  		$rspta=$paquetes->activar($idpaquetes);
   		echo $rspta;
  	break;
    case 'eliminar':
  		$rspta=$paquetes->activar($idpaquetes);
   		echo $rspta;
  	break;
    default :
   		echo 'ERROR AJAX CATEGORIA SIN OP';
    break;
}

?>
