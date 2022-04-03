<?php
require '../config/conexion.php';

class Moplaboral
{

    public function __construct()
    {

    }

    public function insertar($titulo, $descripcion, $vigencia, $entidad)
    {
        $sql = "INSERT INTO oplaboral (titulo,descripcion,vigencia,entidad) VALUES ('$titulo','$descripcion','$vigencia','$entidad')";
        return ejecutarConsulta($sql);
    }

    public function editar($idoplaboral, $titulo, $descripcion, $vigencia, $entidad)
    {
        $sql = "UPDATE oplaboral SET titulo='$titulo',vigencia='$vigencia', descripcion='$descripcion', entidad='$entidad' WHERE idoplaboral='$idoplaboral'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($idoplaboral)
    {
        $sql = "SELECT * FROM oplaboral WHERE idoplaboral='$idoplaboral'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar()
    {
        $sql = "SELECT * FROM oplaboral ORDER BY idoplaboral";
        return ejecutarConsulta($sql);
    }

    /*public function listar_web(){
    $sql="SELECT * FROM oplaboral WHERE estado = '0' ORDER BY idoplaboral";
    return ejecutarConsulta($sql);
    }*/

    public function eliminar($idoplaboral)
    {
        $sql = "DELETE FROM oplaboral WHERE idoplaboral = '$idoplaboral'";
        return ejecutarConsulta($sql);
    }

    public function desactivar($idoplaboral)
    {
        $sql = "UPDATE oplaboral SET estado='1' WHERE idoplaboral = '$idoplaboral'";
        return ejecutarConsulta($sql);
    }

    public function activar($idoplaboral)
    {
        $sql = "UPDATE oplaboral SET estado='0' WHERE idoplaboral = '$idoplaboral'";
        return ejecutarConsulta($sql);
    }

    public function nombreFoto($idoplaboral)
    {
        $sql = "SELECT vigencia FROM oplaboral WHERE idoplaboral='$idoplaboral'";
        return ejecutarConsulta($sql);
    }

}
