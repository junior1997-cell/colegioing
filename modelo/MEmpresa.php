<?php
require '../config/conexion.php';

Class MEmpresa{

  public function __construct(){}

  public function insertar($nombre,$descripcion,$mision,$vision,$valores){
    $sql="INSERT INTO empresa (nombre,descripcion,mision,vision,valores) VALUES ('$nombre','$descripcion','$mision','$vision','$valores')";
    return ejecutarConsulta($sql);
  }

  public function editar($nombre,$descripcion,$mision,$vision,$valores){
    $sql="UPDATE empresa SET	nombre='$nombre', descripcion='$descripcion', mision='$mision', vision='$vision', valores='$valores'  WHERE idempresa='1'";
    return ejecutarConsulta($sql);
  }

  public function mostrar(){
    $sql="SELECT * FROM empresa WHERE idempresa='1'";
    return ejecutarConsultaSimpleFila($sql);
  }

  public function listar(){
    $sql="SELECT * FROM empresa ORDER BY idempresa";
    return ejecutarConsulta($sql);
  }


}

?>
