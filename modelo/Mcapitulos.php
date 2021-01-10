<?php
require '../config/conexion.php';

class Mcapitulos
{

    public function __construct()
    {

    }

    public function insertar($titulo, $descripcion, $foto)
    {
        $sql = "INSERT INTO capitulos (titulo,descripcion,foto) VALUES ('$titulo','$descripcion','$foto')";
        return ejecutarConsulta($sql);
    }

    public function editar($idcapitulos, $titulo, $descripcion, $foto)
    {
        $sql = "UPDATE capitulos SET titulo='$titulo',foto='$foto', descripcion='$descripcion' WHERE idcapitulos='$idcapitulos'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($idcapitulos)
    {
        $sql = "SELECT * FROM capitulos WHERE idcapitulos='$idcapitulos'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar()
    {
        $sql = "SELECT * FROM capitulos ORDER BY idcapitulos";
        return ejecutarConsulta($sql);
    }

    /*public function listar_web(){
    $sql="SELECT * FROM capitulos WHERE estado = '0' ORDER BY idcapitulos";
    return ejecutarConsulta($sql);
    }*/

    public function eliminar($idcapitulos)
    {
        $sql = "DELETE FROM capitulos WHERE idcapitulos = '$idcapitulos'";
        return ejecutarConsulta($sql);
    }

    public function desactivar($idcapitulos)
    {
        $sql = "UPDATE capitulos SET estado='1' WHERE idcapitulos = '$idcapitulos'";
        return ejecutarConsulta($sql);
    }

    public function activar($idcapitulos)
    {
        $sql = "UPDATE capitulos SET estado='0' WHERE idcapitulos = '$idcapitulos'";
        return ejecutarConsulta($sql);
    }

    public function nombreFoto($idcapitulos)
    {
        $sql = "SELECT foto FROM capitulos WHERE idcapitulos='$idcapitulos'";
        return ejecutarConsulta($sql);
    }

}
