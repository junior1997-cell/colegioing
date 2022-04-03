<?php
require '../config/conexion.php';

class Malquiler
{

    public function __construct()
    {

    }
    //**idalquiler $nombre, $descripcion, $capacidad, $direccion, $condiciones, $foto */
    public function insertar($nombre, $descripcion, $capacidad, $foto, $direccion, $condiciones)
    {
        $sql = "INSERT INTO alquiler (nombre,descripcion,foto,capacidad,direccion,condiciones) VALUES ('$nombre','$descripcion','$foto','$capacidad','$direccion','$condiciones')";

        return ejecutarConsulta($sql);
    }

    public function editar($idalquiler, $nombre, $descripcion, $capacidad, $foto, $direccion, $condiciones)
    {
        $sql = "UPDATE alquiler SET nombre='$nombre',foto='$foto', descripcion='$descripcion', capacidad='$capacidad', direccion='$direccion',condiciones='$condiciones' WHERE idalquiler='$idalquiler'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($idalquiler)
    {
        $sql = "SELECT * FROM alquiler WHERE idalquiler='$idalquiler'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar()
    {
        $sql = "SELECT * FROM alquiler ORDER BY idalquiler";
        return ejecutarConsulta($sql);
    }

    public function listar_web()
    {
        $sql = "SELECT * FROM alquiler WHERE estado = '0' ORDER BY idalquiler";
        return ejecutarConsulta($sql);
    }

    public function eliminar($idalquiler)
    {
        $sql = "DELETE FROM alquiler WHERE idalquiler = '$idalquiler'";
        return ejecutarConsulta($sql);
    }

    public function desactivar($idalquiler)
    {
        $sql = "UPDATE alquiler SET estado='1' WHERE idalquiler = '$idalquiler'";
        return ejecutarConsulta($sql);
    }

    public function activar($idalquiler)
    {
        $sql = "UPDATE alquiler SET estado='0' WHERE idalquiler = '$idalquiler'";
        return ejecutarConsulta($sql);
    }

    public function nombrefoto($idalquiler)
    {
        $sql = "SELECT foto FROM alquiler WHERE idalquiler='$idalquiler'";
        return ejecutarConsulta($sql);
    }

    public function count_alquiler($idalquiler)
    {
        $sql = "SELECT COUNT(idalquiler) as idalquiler FROM alquiler WHERE estado = '$idalquiler'";
        return ejecutarConsultaSimpleFila($sql);
    }

}
