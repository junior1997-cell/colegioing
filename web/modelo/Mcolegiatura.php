<?php
require '../config/conexion.php';

Class Mcolegiatura{

  public function __construct(){}

  public function insertar($mordinario,$mtemporal,$mvitalico,$sespecializacion,$ctemporal,$cdepartamental){
    $sql="INSERT INTO colegiatura (mordinario,mtemporal,mvitalico,sespecializacion,ctemporal,cdepartamental)VALUES ('$mordinario','$mtemporal','$mvitalico','$sespecializacion','$ctemporal','$cdepartamental')";
    return ejecutarConsulta($sql);
  }

  public function editar($mordinario,$mtemporal,$mvitalico,$sespecializacion,$ctemporal,$cdepartamental){
    $sql="UPDATE colegiatura SET	mordinario='$mordinario',mtemporal='$mtemporal', mvitalico='$mvitalico', sespecializacion='$sespecializacion', ctemporal='$ctemporal', cdepartamental='$cdepartamental'   WHERE idcolegiatura='1'";
    return ejecutarConsulta($sql);
  }

  public function mostrar(){
    $sql="SELECT * FROM colegiatura WHERE idcolegiatura='1'";
    return ejecutarConsultaSimpleFila($sql);
  }

  public function listar(){
    $sql="SELECT * FROM colegiatura ORDER BY idcolegiatura";
    return ejecutarConsulta($sql);
  }


}

?>
