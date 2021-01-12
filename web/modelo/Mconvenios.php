<?php
require '../config/conexion.php';

Class Mconvenios{

	public function __construct(){

	}

	public function insertar($nombre,$descripcion,$foto){
		$sql="INSERT INTO convenios (nombre,descripcion,foto) VALUES ('$nombre','$descripcion','$foto')";
		return ejecutarConsulta($sql);
	}

	public function editar($idconvenios,$nombre,$descripcion,$foto){
		$sql="UPDATE convenios SET ".
				 "nombre='$nombre',descripcion='$descripcion',foto='$foto' ".
				 "WHERE idconvenio='$idconvenios'";
		return ejecutarConsulta($sql);
	}

	public function mostrar($idconvenios){
		$sql="SELECT * FROM convenios WHERE idconvenio='$idconvenios'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function listar(){
		$sql="SELECT * FROM convenios ORDER BY idconvenio";
		return ejecutarConsulta($sql);
	}

	public function listar_web(){
		$sql="SELECT * FROM convenios WHERE estado = '0' ORDER BY idconvenio";
		return ejecutarConsulta($sql);
	}

	public function eliminar($idconvenios){
		$sql = "DELETE FROM convenios WHERE idconvenio = '$idconvenios'";
		return ejecutarConsulta($sql);
	}

	public function desactivar($idconvenios){
		$sql = "UPDATE convenios SET estado='1' WHERE idconvenio = '$idconvenios'";
		return ejecutarConsulta($sql);
	}

	public function activar($idconvenios){
		$sql = "UPDATE convenios SET estado='0' WHERE idconvenio = '$idconvenios'";
		return ejecutarConsulta($sql);
	}

	public function nombreFoto($idconvenios){
      $sql = "SELECT foto FROM convenios WHERE idconvenio='$idconvenios'";
      return ejecutarConsulta($sql);
  }
}
?>
