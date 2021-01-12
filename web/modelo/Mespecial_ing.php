<?php
require '../config/conexion.php';

Class MEspecial_ing{

  public function __construct(){}

  public function insertar($peritaje,$arbitraje,$certificacion_calidad,$asuntos_municipales){
    $sql="INSERT INTO especializacion_ing (peritaje,arbitraje,certificacion_calidad,asuntos_municipales) VALUES ('$peritaje','$arbitraje','$certificacion_calidad','$asuntos_municipales')";
    return ejecutarConsulta($sql);
  }

  public function editar($peritaje,$arbitraje,$certificacion_calidad,$asuntos_municipales){
    $sql="UPDATE especializacion_ing SET	peritaje='$peritaje',arbitraje='$arbitraje', certificacion_calidad='$certificacion_calidad', asuntos_municipales='$asuntos_municipales'  WHERE idespecializacion='1'";
    return ejecutarConsulta($sql);
  }

  public function mostrar(){
    $sql="SELECT * FROM especializacion_ing WHERE idespecializacion='1'";
    return ejecutarConsultaSimpleFila($sql);
  }

  public function listar(){
    $sql="SELECT * FROM especializacion_ing ORDER BY idespecializacion";
    return ejecutarConsulta($sql);
  }


}

?>
