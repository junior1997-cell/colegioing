<?php
require '../config/conexion.php';

Class MContactanos{

  public function __construct(){}

  public function insertar($coordenadas,$direccion,$email,$telefono){
    $sql="INSERT INTO contactanos (coordenadas,direccion,email,telefono) VALUES ('$coordenadas','$direccion','$email','$telefono')";
    return ejecutarConsulta($sql);
  }

  public function editar($coordenadas,$direccion,$email,$telefono){
    $sql="UPDATE contactanos SET	coordenadas='$coordenadas',direccion='$direccion', email='$email', telefono='$telefono'  WHERE idcontactanos='1'";
    return ejecutarConsulta($sql);
  }

  public function mostrar(){
    $sql="SELECT * FROM contactanos WHERE idcontactanos='1'";
    return ejecutarConsultaSimpleFila($sql);
  }

  public function listar(){
    $sql="SELECT * FROM contactanos ORDER BY idcontactanos";
    return ejecutarConsulta($sql);
  }


}

?>
