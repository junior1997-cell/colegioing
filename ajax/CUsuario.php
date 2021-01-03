<?php
if (strlen(session_id()) < 1)
    session_start();
require_once '../modelo/MUsuario.php';

$usuario= new MUsuario();

$idusuario= isset($_POST["idusuario"])?limpiarCadena($_POST["idusuario"]):"";
$user = isset($_POST["usuario"])?limpiarCadena($_POST["usuario"]):"";
$clave = isset($_POST["clave"])?limpiarCadena($_POST["clave"]):"";
$estado = isset($_POST["estado"])?limpiarCadena($_POST["estado"]):"";

$op = $_GET["op"];
switch($op){
	case 'guardaryeditar':
		require_once '../modelo/e_d.php';
		$e_d = new e_d();
    	$clavehash = $e_d->openCypher('encrypt',$clave);//EMCRIPTAMOS LA CLAVE
		if (empty($idusuario)){
			$rspta = $usuario->insertar($user,$clavehash);
			echo $rspta;
		}else {
			$rspta=$usuario->editar($idusuario,$user,$clavehash);
			echo $rspta;
		}
	break;

	case 'desactivar':
		$rspta=$usuario->desactivar($idusuario);
 		echo $rspta;
	break;

	case 'activar':
		$rspta=$usuario->activar($idusuario);
 		echo $rspta;
	break;

	case 'mostrar':
		require_once '../modelo/e_d.php';
		$e_d= new e_d();
		$rspta=$usuario->mostrar($idusuario);
 		//Codificar el resultado utilizando json
		$data= Array();
 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"idusuario" => $reg->idusuario,
				"usuario" => $reg->usuario,
				"clave" => $e_d->openCypher('decrypt',$reg->clave)
 				);
 		}
 		echo json_encode($data);
	break;

	case 'listar':
		$rspta=$usuario->listar();
 		//Vamos a declarar un array
 		$data= Array();
    $id =0;

 		while ($reg = $rspta->fetch_object()){
			$id ++;
 			$data[]=array(
 				"0" => $id,
 				"1" => $reg->usuario,
				"2" => ($reg->estado==0)?'<center><span class="label bg-green">&nbsp;&nbsp;&nbsp;&nbsp;Activado&nbsp;&nbsp;&nbsp;&nbsp;</span></center>':'<center><span class="label bg-red">Deshabilitado</span></center>',
 				/*"2" => ($reg->iborrado)?'<span class="label bg-red">Desactivado</span>':'<span class="label bg-green">&nbsp;&nbsp;&nbsp;&nbsp;Activado&nbsp;&nbsp;&nbsp;&nbsp;</span>',*/
				"3" => ($reg->estado)?'<center><button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idusuario.')"><i class="fa fa-edit"></i></button>'.' <button class="btn btn-success btn-xs" onclick="activar('.$reg->idusuario.')"><i class="fa fa-check-circle"></i></button></center>':'<center><button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->idusuario.')"><i class="fa fa-edit"></i></button>'.' <button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->idusuario.')"><i class="fa fa-trash"></i></button>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

	case 'verificar_login':
		require_once '../modelo/e_d.php';
		$e_d= new e_d();
		// RECIBIMOS LOS PARAMETROS DE LOGIN
		$user_login=$_POST['user_login'];
		$clave_login=$_POST['clave_login'];
		// $clavehash = $e_d->openCypher('encrypt',$clave_login);
		$rspta = $usuario->verificar_login($user_login,$clave_login);
		$fetch = $rspta->fetch_object();
		if (isset($fetch)){
			//Declaramos las variables de sesión
			 $_SESSION['idusuario']=$fetch->idusuario;
			 $_SESSION['usuario']=$fetch->usuario;
		}
		echo json_encode($fetch);
		break;

			case 'salir':
		    //Limpiamos las variables de sesión
        session_unset();
        //Destruìmos la sesión
        session_destroy();
        //Redireccionamos al login
        header("Location: ../admin/index.html");

	break;

	case 'pass':
		require_once '../modelo/e_d.php';
		$e_d= new e_d();
		$txt = '@datem123';
		//$myText_decrypted = $e_d->openCypher('decrypt',$myText_encrypted);
		$myText_encrypted = $e_d->openCypher('encrypt',$txt);
		echo $myText_encrypted;
	break;

		default :
		echo 'NADA';
		break;
}

?>
