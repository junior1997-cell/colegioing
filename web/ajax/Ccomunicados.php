<?php
if (strlen(session_id()) < 1)
    session_start();

/*Aqui se crea, se edita, se eimina y se lista las categorias*/
require_once '../modelo/Mcomunicados.php';

$Mcomunicados= new Mcomunicados();
/** DATOS GENERALES **/
$idcomunicado = isset($_POST["idcomunicado"])?limpiarCadena($_POST["idcomunicado"]):"";
$titulo = isset($_POST["titulo"])?limpiarCadena($_POST["titulo"]):"";
$descripcion = isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";
/** Fecha **/
$fechaActual = isset($_POST["fechaActual"])?limpiarCadena($_POST["fechaActual"]):"";

$op = $_GET["op"];


switch($op){

  case 'guardaryeditar':
    if (empty($idcomunicado)){
      $rspta=$Mcomunicados->insertar($titulo,nl2br($descripcion),$fechaActual);
      //var_dump($rspta);die;
      echo $rspta;
    }else {
        $rspta=$Mcomunicados->editar($idcomunicado,$titulo,nl2br($descripcion),$fechaActual);
        echo $rspta;
    }

  break;

	case 'mostrar':
		$rspta = $Mcomunicados->mostrar($idcomunicado);
    echo json_encode($rspta);
	break;

  case 'listar':
		$rspta=$Mcomunicados->listar();
 		$data = Array();
    $cont = $rspta->num_rows;
    //var_dump($cont);die;

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0" => $cont--,
 				"1" => $reg->titulo,
				"2" => $reg->descripcion,
				"3" => $reg->fecha,
				"4" => ($reg->estado)?'<center><button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idcomunicado.')"><i class="fa fa-edit"></i></button>'.' <button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->idcomunicado.')"><i class="fa fa-trash"></i></button></center>':'<center><button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idcomunicado.')"><i class="fa fa-edit"></i></button>'.' <button class="btn btn-success btn-xs" onclick="activar('.$reg->idcomunicado.')"><i class="fa fa-check-circle"></i></button></center>'
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
        $rspta=$Mcomunicados->listar_web();
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
  		$rspta=$Mcomunicados->desactivar($idcomunicado);
   		echo $rspta;
  	break;

  	case 'activar':
  		$rspta=$Mcomunicados->activar($idcomunicado);
   		echo $rspta;
  	break;
    case 'eliminar':
  		$rspta=$Mcomunicados->activar($idcomunicado);
   		echo $rspta;
  	break;
    default :
   		echo 'ERROR AJAX Mcomunicados SIN OP';
    break;
}

?>
