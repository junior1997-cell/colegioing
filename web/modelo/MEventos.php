<?php
require '../config/conexion.php';

class Meventos
{

    public function __construct()
    {

    }

    public function insertar($titulo, $descripcion, $foto)
    {
        $sql = "INSERT INTO eventos (titulo,descripcion,foto) VALUES ('$titulo','$descripcion','$foto')";
        return ejecutarConsulta($sql);
    }

    public function editar($ideventos, $titulo, $descripcion, $foto)
    {
        $sql = "UPDATE eventos SET titulo='$titulo',foto='$foto', descripcion='$descripcion' WHERE idevento='$ideventos'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($ideventos)
    {
        $sql = "SELECT * FROM eventos WHERE idevento='$ideventos'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar()
    {
        $sql = "SELECT * FROM eventos ORDER BY idevento";
        return ejecutarConsulta($sql);
    }

    /*public function listar_web(){
    $sql="SELECT * FROM eventos WHERE estado = '0' ORDER BY ideventos";
    return ejecutarConsulta($sql);
    }*/

    public function eliminar($ideventos)
    {
        $sql = "DELETE FROM eventos WHERE idevento = '$ideventos'";
        return ejecutarConsulta($sql);
    }

    public function desactivar($ideventos)
    {
        $sql = "UPDATE eventos SET estado='1' WHERE idevento = '$ideventos'";
        return ejecutarConsulta($sql);
    }

    public function activar($ideventos)
    {
        $sql = "UPDATE eventos SET estado='0' WHERE idevento = '$ideventos'";
        return ejecutarConsulta($sql);
    }

    public function nombreFoto($ideventos)
    {
        $sql = "SELECT foto FROM eventos WHERE idevento='$ideventos'";
        return ejecutarConsulta($sql);
    }

}
