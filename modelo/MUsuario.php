<?php
require '../config/conexion.php';

Class MUsuario{

	public function __construct(){

	}

	public function insertar($usuario,$clavehash){
		$sql="INSERT INTO usuario (usuario,clave,estado) VALUES ('$usuario','$clavehash','0')";
		return ejecutarConsulta($sql);

	}

	public function editar($idusuario,$usuario,$clavehash){
		$sql="UPDATE usuario SET usuario='$usuario',clave='$clavehash' WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);
	}

	public function activar($idusuario){
		$sql="UPDATE usuario set estado = '0' WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);
	}

	public function desactivar($idusuario){
		$sql="UPDATE usuario set estado = '1' WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);
	}

	public function restablecer($idusuario){
		$clavehash=hash("SHA256","123456");
		$sql="UPDATE usuario SET clave='$clavehash' WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);
	}

	public function mostrar($idusuario){
		$sql="SELECT * FROM usuario WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);
	}

	public function listar(){
		$sql="SELECT idusuario,usuario,estado FROM usuario WHERE idusuario!=1";
		return ejecutarConsulta($sql);
	}

	public function verificar_login($user_login,$clave_login){
		$sql="SELECT idusuario,usuario,clave,estado FROM usuario WHERE estado=0 AND usuario='$user_login' AND clave='$clave_login'";
		return ejecutarConsulta($sql);
	}

	public function clave_actual($idusuario){
		$sql="SELECT clave FROM usuario WHERE idusuario='$idusuario'";
		return ejecutarConsulta($sql);
	}



}

?>
