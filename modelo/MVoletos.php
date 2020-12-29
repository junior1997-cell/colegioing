<?php
require '../config/conexion.php';

Class MVoletos{

	public function __construct(){

	}

	public function insertar($nombre,$descripcion,$tipo,$foto){
		$sql="INSERT INTO voletos (nombre,descripcion,tipo,foto,estado) VALUES ('$nombre','$descripcion','$tipo','$foto','0')";
		return ejecutarConsulta($sql);
	}

	public function editar($idvoletos,$nombre,$descripcion,$tipo,$foto){
		$sql="UPDATE voletos SET ".
				 "nombre='$nombre',descripcion='$descripcion',tipo='$tipo',foto='$foto' ".
				 "WHERE idvoletos='$idvoletos'";
		return ejecutarConsulta($sql);
	}

	public function mostrar($idvoletos){
		$sql="SELECT * FROM voletos WHERE idvoletos='$idvoletos'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function listar(){
		$sql="SELECT * FROM voletos ORDER BY idvoletos";
		return ejecutarConsulta($sql);
	}

	public function listar_web(){
		$sql="SELECT * FROM voletos WHERE estado = '0' ORDER BY idvoletos";
		return ejecutarConsulta($sql);
	}

	public function eliminar($idvoletos){
		$sql = "DELETE FROM voletos WHERE idvoletos = '$idvoletos'";
		return ejecutarConsulta($sql);
	}

	public function desactivar($idvoletos){
		$sql = "UPDATE voletos SET estado='1' WHERE idvoletos = '$idvoletos'";
		return ejecutarConsulta($sql);
	}

	public function activar($idvoletos){
		$sql = "UPDATE voletos SET estado='0' WHERE idvoletos = '$idvoletos'";
		return ejecutarConsulta($sql);
	}

	public function nombreFoto($idvoletos){
      $sql = "SELECT foto FROM voletos WHERE idvoletos='$idvoletos'";
      return ejecutarConsulta($sql);
  }
}
?>
