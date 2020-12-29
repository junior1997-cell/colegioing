<?php
if (strlen(session_id()) < 1)
    session_start();

/*Aqui se crea, se edita, se eimina y se lista las categorias*/
require_once '../modelo/Mcomunicados.php';

$turisticos= new MTuristicos();
/** DATOS GENERALES **/
$idcomunicado = isset($_POST["idcomunicado"])?limpiarCadena($_POST["idcomunicado"]):"";
$titulo = isset($_POST["titulo"])?limpiarCadena($_POST["titulo"]):"";
$descripcion = isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";
/** IMAGENES **/
$fecha = isset($_POST["fecha"])?limpiarCadena($_POST["fecha"]):"";
$foto2 = isset($_POST["foto2"])?limpiarCadena($_POST["foto2"]):"";

$op = $_GET["op"];


switch($op){

  case 'guardaryeditar':
    if (empty($idcomunicado)){
      $rspta=$turisticos->insertar($titulo,nl2br($descripcion),$fecha);
      echo $rspta;
    }else {
        if($flat_fecha==true){
            $datos_f1 =$turisticos->nombreFoto($idcomunicado,1);
            $titulo_img_1_ant=$datos_f1->fetch_object()->fecha;
            if($titulo_img_1_ant!=""){
              unlink("../multimedia/turisticos/".$titulo_img_1_ant);
            }
        }
        if($flat_foto2==true){
            $datos_f2 =$turisticos->nombreFoto($idcomunicado,2);
            $titulo_img_2_ant=$datos_f2->fetch_object()->foto2;
            if($titulo_img_2_ant!=""){
              unlink("../multimedia/turisticos/".$titulo_img_2_ant);
            }
        }

        $rspta=$turisticos->editar($idcomunicado,$titulo,nl2br($descripcion),$fecha,$foto2);
        echo $rspta;
    }

  break;

	case 'mostrar':
		$rspta = $turisticos->mostrar($idcomunicado);
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
				"3" => ($reg->estado)?'<center><button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idcomunicado.')"><i class="fa fa-edit"></i></button>'.' <button class="btn btn-success btn-xs" onclick="activar('.$reg->idcomunicado.')"><i class="fa fa-check-circle"></i></button></center>':'<center><button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idcomunicado.')"><i class="fa fa-edit"></i></button>'.' <button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->idcomunicado.')"><i class="fa fa-trash"></i></button></center>'
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
            "idcomunicado" => $reg->idcomunicado,
            "fecha" => $reg->fecha,
            "titulo" => $reg->titulo,
            "descripcion" => $reg->descripcion
            );
        }
  	echo json_encode($data);
    break;

    case 'desactivar':
  		$rspta=$turisticos->desactivar($idcomunicado);
   		echo $rspta;
  	break;

  	case 'activar':
  		$rspta=$turisticos->activar($idcomunicado);
   		echo $rspta;
  	break;
    case 'eliminar':
  		$rspta=$turisticos->activar($idcomunicado);
   		echo $rspta;
  	break;
    default :
   		echo 'ERROR AJAX TURISTICOS SIN OP';
    break;
}

?>
