<?php
require '../config/conexion.php';

Class MCarousel{

	public function __construct(){

	}

	public function insertar($titulo,$foto){
		$sql="INSERT INTO carousel (titulo,foto,estado) VALUES ('$titulo','$foto','0')";
		return ejecutarConsulta($sql);
	}

	public function editar($idcarousel,$titulo,$foto){
		$sql="UPDATE carousel SET titulo='$titulo',foto='$foto' WHERE idcarousel='$idcarousel'";
		return ejecutarConsulta($sql);
	}

	public function mostrar($idcarousel){
		$sql="SELECT * FROM carousel WHERE idcarousel='$idcarousel'";
		return ejecutarConsultaSimpleFila($sql);
	}

	public function listar(){
		$sql="SELECT * FROM carousel ORDER BY idcarousel";
		return ejecutarConsulta($sql);
	}

	public function listar_web(){
		$sql="SELECT * FROM carousel WHERE estado = '0' ORDER BY idcarousel";
		return ejecutarConsulta($sql);
	}

	public function eliminar($idcarousel){
		$sql = "DELETE FROM carousel WHERE idcarousel = '$idcarousel'";
		return ejecutarConsulta($sql);
	}

	public function desactivar($idcarousel){
		$sql = "UPDATE carousel SET estado='1' WHERE idcarousel = '$idcarousel'";
		return ejecutarConsulta($sql);
	}

	public function activar($idcarousel){
		$sql = "UPDATE carousel SET estado='0' WHERE idcarousel = '$idcarousel'";
		return ejecutarConsulta($sql);
	}

	public function nombreFoto($idcarousel){
        $sql = "SELECT foto FROM carousel WHERE idcarousel='$idcarousel'";
        return ejecutarConsulta($sql);
    }

}
?>
