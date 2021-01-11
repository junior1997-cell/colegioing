<?php
require '../config/conexion.php';

class Mgaleria
{

    public function __construct()
    {

    }

    public function insertar($titulo, $descripcion, $foto)
    {
        $sql = "INSERT INTO galeria (titulo,descripcion,foto) VALUES ('$titulo','$descripcion','$foto')";
        return ejecutarConsulta($sql);
    }

    public function editar($idgaleria, $titulo, $descripcion, $foto)
    {
        $sql = "UPDATE galeria SET titulo='$titulo',foto='$foto', descripcion='$descripcion' WHERE idgaleria='$idgaleria'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($idgaleria)
    {
        $sql = "SELECT * FROM galeria WHERE idgaleria='$idgaleria'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar()
    {
        $sql = "SELECT * FROM galeria ORDER BY idgaleria";
        return ejecutarConsulta($sql);
    }

    /*public function listar_web(){
    $sql="SELECT * FROM galeria WHERE estado = '0' ORDER BY idgaleria";
    return ejecutarConsulta($sql);
    }*/

    public function eliminar($idgaleria)
    {
        $sql = "DELETE FROM galeria WHERE idgaleria = '$idgaleria'";
        return ejecutarConsulta($sql);
    }

    public function desactivar($idgaleria)
    {
        $sql = "UPDATE galeria SET estado='1' WHERE idgaleria = '$idgaleria'";
        return ejecutarConsulta($sql);
    }

    public function activar($idgaleria)
    {
        $sql = "UPDATE galeria SET estado='0' WHERE idgaleria = '$idgaleria'";
        return ejecutarConsulta($sql);
    }

    public function nombreFoto($idgaleria)
    {
        $sql = "SELECT foto FROM galeria WHERE idgaleria='$idgaleria'";
        return ejecutarConsulta($sql);
    }

}
