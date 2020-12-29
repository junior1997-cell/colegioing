<?php
require '../config/conexion.php';

Class MEmpresa{

  public function __construct(){}

  public function insertar($nombre,$lema,$descripcion,$mision,$vision,$valores,$politica,$servicios){
    $sql="INSERT INTO empresa (nombre,lema,descripcion,mision,vision,valores,politica,servicios) VALUES ('$nombre','$lema','$descripcion','$mision','$vision','$valores','$politica','$servicios')";
    return ejecutarConsulta($sql);
  }

  public function editar($nombre,$lema,$descripcion,$mision,$vision,$valores,$politica,$servicios){
    $sql="UPDATE empresa SET	nombre='$nombre',lema='$lema', descripcion='$descripcion', mision='$mision', vision='$vision', valores='$valores', politica='$politica', servicios='$servicios'  WHERE idempresa='1'";
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
