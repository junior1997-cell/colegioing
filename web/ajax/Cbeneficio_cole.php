<?php
if (strlen(session_id()) < 1)
    session_start();
/*MODULO DE CATEGORIA*/
/*Aqui se crea, se edita, se actualiza*/
require_once '../modelo/Mbeneficio_cole.php';

$beneficios= new Mbeneficio_cole();

$idbeneficio = isset($_POST["idbeneficio"])?limpiarCadena($_POST["idbeneficio"]):"";
$titulo = isset($_POST["titulo"])?limpiarCadena($_POST["titulo"]):"";
$descripcion = isset($_POST["descripcion"])?limpiarCadena($_POST["descripcion"]):"";
$documento = isset($_POST["documento"])?limpiarCadena($_POST["documento"]):"";

/**seccion de información */
$servicios_sociales = isset($_POST["servicios_sociales"])?limpiarCadena($_POST["servicios_sociales"]):"";
$iss_cip = isset($_POST["iss_cip"])?limpiarCadena($_POST["iss_cip"]):"";
$derechobenef = isset($_POST["derechobenef"])?limpiarCadena($_POST["derechobenef"]):"";
$actualidad = isset($_POST["actualidad"])?limpiarCadena($_POST["actualidad"]):"";
$important = isset($_POST["important"])?limpiarCadena($_POST["important"]):"";

$op = $_GET["op"];
switch ($op) {
    case 'guardaryeditar':
            //*Documentos*//
      if (!file_exists($_FILES['documento']['tmp_name']) || !is_uploaded_file($_FILES['documento']['tmp_name'])){
        $flat_documento=false;
        $documento=$_POST["documento_actual"];
      }else{
        $flat_documento=true;
        $ext_p = explode(".", $_FILES["documento"]["name"]);
        //if ($_FILES['documento']['type'] == "text/pdf"){
          $documento = rand(0, 20) . round(microtime(true)) . rand(21, 41) . '.' . end($ext_p);
          move_uploaded_file($_FILES["documento"]["tmp_name"], "../multimedia/documentos/" . $documento);
        //}
      }
		if (empty($idbeneficio)){
			$rspta = $beneficios->insertarDoc($titulo,$documento);
			echo $rspta;
		}else {
      if($flat_documento==true){
        $datos_f =$beneficios->nombredocumento($idbeneficio);
        $nombre_img_ant=$datos_f->fetch_object()->documento;
        if($nombre_img_ant!=""){
          unlink("../multimedia/documentos/".$nombre_img_ant);
        }
    }
			$rspta=$beneficios->editarDoc($idbeneficio,$titulo,$documento);
			echo $rspta;
		}
	break;

	case 'listarDocumnt':
		$rspta=$beneficios->listarDoc();
 		//Vamos a declarar un array
 		$data= Array();
    	$id =0;
    	// var_dump($rspta); die;
 		while ($reg = $rspta->fetch_object()){
			$id ++;
 			$data[]=array(
 				"0" => $id,
 				"1" => $reg->titulo,
				"2" => $reg->documento,
				"3" => ($reg->estado==0)?'<center><span class="label bg-green">&nbsp;&nbsp;&nbsp;&nbsp;Activado&nbsp;&nbsp;&nbsp;&nbsp;</span></center>':'<center><span class="label bg-red">Deshabilitado</span></center>',
				"4" => ($reg->estado)?'
				<center>
					<button class="btn btn-warning btn-xs" onclick="mostrarDoc('.$reg->idbeneficio.')">
						<i class="fa fa-edit"></i>
					</button>':'
				<center>
				<button class="btn btn-warning btn-xs" onclick="mostrarDoc('.$reg->idbeneficio.')">
					<i class="fa fa-edit"></i>
				</button>'
				 
 			);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);
	break;
	/**
	 * ==========================
	 * mostrar y actulizar INSTITUTO DE SERVICIOS SOCIALES
	 * ==========================
	*/
	case 'serv_sociales':
		$rspta=$beneficios->serv_sociales();
 		echo json_encode($rspta);
	break;

	case 'actualizarserv':
		$rspta = $beneficios->editarserv_sociales($servicios_sociales,$iss_cip,$derechobenef,$actualidad,$important);
		//var_dump($rspta);die;
        echo $rspta;
    break;

  	/**
	 * ==========================
	 * mostrar INSTITUTO DE SERVICIOS SOCIALES
	 * ==========================
	*/
    case 'mostrardoc':
		$rspta=$beneficios->mostrarDoc($idbeneficio);
 		echo json_encode($rspta);
    break;	
  
	
}
