<?php
require '../config/conexion.php';

class Mcapacitacion
{

    public function __construct()
    {

    }

    public function insertar($titulo, $descripcion, $fecha,$foto,$costo)
    {
        $sql = "INSERT INTO capacitaciones (titulo,descripcion,foto,fecha,costo) VALUES ('$titulo','$descripcion','$foto','$fecha','$costo')";
        
        return ejecutarConsulta($sql);
    }

    public function editar($idcapacitacion,$titulo,$descripcion,$foto,$fecha,$costo )
    {
        $sql = "UPDATE capacitaciones SET titulo='$titulo',foto='$foto', descripcion='$descripcion', fecha='$fecha', fecha='$costo' WHERE idcapacitacion='$idcapacitacion'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($idcapacitacion)
    {
        $sql = "SELECT * FROM capacitaciones WHERE idcapacitacion='$idcapacitacion'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar()
    {
        $sql = "SELECT * FROM capacitaciones ORDER BY idcapacitacion";
        return ejecutarConsulta($sql);
    }

    /*public function listar_web(){
    $sql="SELECT * FROM oplaboral WHERE estado = '0' ORDER BY idcapacitacion";
    return ejecutarConsulta($sql);
    }*/

    public function eliminar($idcapacitacion)
    {
        $sql = "DELETE FROM capacitaciones WHERE idcapacitacion = '$idcapacitacion'";
        return ejecutarConsulta($sql);
    }

    public function desactivar($idcapacitacion)
    {
        $sql = "UPDATE capacitaciones SET estado='1' WHERE idcapacitacion = '$idcapacitacion'";
        return ejecutarConsulta($sql);
    }

    public function activar($idcapacitacion)
    {
        $sql = "UPDATE capacitaciones SET estado='0' WHERE idcapacitacion = '$idcapacitacion'";
        return ejecutarConsulta($sql);
    }

    public function nombreFoto($idcapacitacion)
    {
        $sql = "SELECT foto FROM capacitaciones WHERE idcapacitacion='$idcapacitacion'";
        return ejecutarConsulta($sql);
    }

}
