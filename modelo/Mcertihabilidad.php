<?php
require '../config/conexion.php';

class McertificadoH
{

    public function __construct()
    {

    }

    public function insertar($titulo, $descripcion, $foto)
    {
        $sql = "INSERT INTO certifhabilidad (titulo,descripcion,foto) VALUES ('$titulo','$descripcion','$foto')";
        return ejecutarConsulta($sql);
    }

    public function editar($idcertificadoH, $titulo, $descripcion, $foto)
    {
        $sql = "UPDATE certifhabilidad SET titulo='$titulo',foto='$foto', descripcion='$descripcion' WHERE idcertifhabilidad='$idcertificadoH'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($idcertificadoH)
    {
        $sql = "SELECT * FROM certifhabilidad WHERE idcertifhabilidad='$idcertificadoH'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar()
    {
        $sql = "SELECT * FROM certifhabilidad ORDER BY idcertifhabilidad";
        return ejecutarConsulta($sql);
    }
    // LISTAR TABLA COSTO
    public function listarcosto($id)
    {
        $sql = "SELECT * FROM montoscertif mc
                WHERE mc.idCertifhabilidad = '$id'
                ORDER BY idmontos DESC";
        return ejecutarConsulta($sql);

    }

    public function insertar_monto($idCertifhabilidad, $cost_por_obra, $monto)
    {
        $sql = "INSERT INTO montoscertif (idCertifhabilidad,cost_por_obra,monto)
                VALUES ('$idCertifhabilidad','$cost_por_obra','$monto')";
        return ejecutarConsulta($sql);
    }

    public function mostrar_edit_costo($idmontos)
    {
        $sql = "SELECT * FROM montoscertif WHERE idmontos='$idmontos'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function editar_monto($idmontos, $idCertifhabilidad, $cost_por_obra, $monto)
    {
        $sql = "UPDATE montoscertif
        SET idCertifhabilidad='$idCertifhabilidad',cost_por_obra='$cost_por_obra', monto='$monto'
        WHERE idmontos='$idmontos'";
        return ejecutarConsulta($sql);
    }
    // .................... ::::::::::: ACTIVAR COSTO ::::::::::::: ....................
    public function activar_costo($idmontos)
    {
        $sql = "UPDATE montoscertif SET estado='0' WHERE idmontos = '$idmontos'";
        return ejecutarConsulta($sql);
    }
    // ...................... ::::::: DESACTIVAR COSTO :::::::::::.................
    public function desactivar_costo($idmontos)
    {
        $sql = "UPDATE montoscertif SET estado='1' WHERE idmontos = '$idmontos'";
        return ejecutarConsulta($sql);
    }

    // ..................................................................................
    public function eliminar($idcertifhabilidad)
    {
        $sql = "DELETE FROM certifhabilidad WHERE idcertifhabilidad = '$idcertifhabilidad'";
        return ejecutarConsulta($sql);
    }

    public function desactivar($idcertifhabilidad)
    {
        $sql = "UPDATE certifhabilidad SET estado='1' WHERE idcertifhabilidad = '$idcertifhabilidad'";
        return ejecutarConsulta($sql);
    }

    public function activar($idcertifhabilidad)
    {
        $sql = "UPDATE certifhabilidad SET estado='0' WHERE idcertifhabilidad = '$idcertifhabilidad'";
        return ejecutarConsulta($sql);
    }

    public function nombreFoto($idcertifhabilidad)
    {
        $sql = "SELECT foto FROM certifhabilidad WHERE idcertifhabilidad='$idcertifhabilidad'";
        return ejecutarConsulta($sql);
    }
    /**
     * costo
     */

}
