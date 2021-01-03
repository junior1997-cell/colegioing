<?php
require '../config/conexion.php';

class MTuristicos
{

    public function __construct()
    {

    }

    public function insertar($titulo, $descripcion, $foto1, $foto2)
    {
        $sql = "INSERT INTO " .
            "turisticos (titulo,descripcion,foto1,foto2,estado) " .
            "VALUES ('$titulo','$descripcion','$foto1','$foto2','0')";
        return ejecutarConsulta($sql);
    }

    public function editar($idturisticos, $titulo, $descripcion, $foto1, $foto2)
    {
        $sql = "UPDATE turisticos SET " .
            "titulo='$titulo',descripcion='$descripcion',foto1='$foto1',foto2='$foto2' " .
            "WHERE idturisticos='$idturisticos'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($idturisticos)
    {
        $sql = "SELECT * FROM turisticos WHERE idturisticos='$idturisticos'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar()
    {
        $sql = "SELECT * FROM turisticos ORDER BY idturisticos";
        return ejecutarConsulta($sql);
    }

    /*public function listar_web(){
    $sql="SELECT * FROM turisticos WHERE estado = '0' ORDER BY idturisticos";
    return ejecutarConsulta($sql);
    }*/

    public function nombreFoto($idturisticos, $numFoto)
    {
        $sql = "SELECT foto" . $numFoto . " FROM turisticos WHERE idturisticos='$idturisticos'";
        return ejecutarConsulta($sql);
    }

    public function eliminar($idturisticos)
    {
        $sql = "DELETE FROM turisticos WHERE idturisticos = '$idturisticos'";
        return ejecutarConsulta($sql);
    }

    public function desactivar($idturisticos)
    {
        $sql = "UPDATE turisticos SET estado='1' WHERE idturisticos = '$idturisticos'";
        return ejecutarConsulta($sql);
    }

    public function activar($idturisticos)
    {
        $sql = "UPDATE turisticos SET estado='0' WHERE idturisticos = '$idturisticos'";
        return ejecutarConsulta($sql);
    }

}
