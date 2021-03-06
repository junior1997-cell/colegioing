<?php
require '../config/conexion.php';

Class Mcomunicados{

	public function __construct(){

	}

	public function insertar($titulo,$descripcion,$fechaActual){
		$sql="INSERT INTO ".
		"comunicados(titulo,descripcion,fecha) ".
		"VALUES ('$titulo','$descripcion','$fechaActual')";
		return ejecutarConsulta($sql);
	}

	public function editar($idcomunicado,$titulo,$descripcion,$fechaActual){
		$sql="UPDATE comunicados SET ".
				 "titulo='$titulo',descripcion='$descripcion',fecha='$fechaActual' ".
				 "WHERE idcomunicado='$idcomunicado'";
		return ejecutarConsulta($sql);
	}

	public function mostrar($idcomunicado){
		$sql="SELECT * FROM comunicados WHERE idcomunicado='$idcomunicado'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function listar(){
		$sql="SELECT * FROM comunicados ORDER BY idcomunicado";
		return ejecutarConsulta($sql);
	}

	public function listar_web(){
		$sql="SELECT * FROM comunicados WHERE estado = '1' ORDER BY idturisticos";
		return ejecutarConsulta($sql);
	}

	public function nombreFoto($idturisticos,$numFoto){
    $sql = "SELECT foto".$numFoto." FROM turisticos WHERE idturisticos='$idturisticos'";
    return ejecutarConsulta($sql);
  }

	public function eliminar($idcomunicado){
		$sql = "DELETE FROM comunicados WHERE idcomunicado = '$idcomunicado'";
		return ejecutarConsulta($sql);
	}

	public function desactivar($idcomunicado){
		$sql = "UPDATE comunicados SET estado='0' WHERE idcomunicado = '$idcomunicado'";
		return ejecutarConsulta($sql);
	}

	public function activar($idcomunicado){
		$sql = "UPDATE comunicados SET estado='1' WHERE idcomunicado = '$idcomunicado'";
		return ejecutarConsulta($sql);
	}

}
?>
