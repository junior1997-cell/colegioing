<?php
require '../config/conexion.php';

class Mbeneficio_cole
{

    public function __construct()
    {

    }

    public function insertarDoc($nombre_doc, $documento)
    {
        $sql = "INSERT INTO doc_benficio_cole (nombre_doc,documento) VALUES ('$nombre_doc','$documento')";
        return ejecutarConsulta($sql);
    }

    public function editarDoc($idbeneficio, $nombre_doc, $documento)
    {
        $sql = "UPDATE doc_benficio_cole
        SET nombre_doc='$nombre_doc', documento='$documento'
        WHERE idbeneficio='$idbeneficio'";
        return ejecutarConsulta($sql);
    }

    public function mostrarDoc($idbeneficio)
    {
        $sql = "SELECT * FROM doc_benficio_cole  WHERE idbeneficio='$idbeneficio'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listarDoc()
    {
        $sql = "SELECT * FROM doc_benficio_cole";
        return ejecutarConsulta($sql);
    }

    public function nombredocumento($idbeneficio)
    {
        $sql = "SELECT documento FROM benficio_cole WHERE idbeneficio='$idbeneficio'";
        return ejecutarConsulta($sql);
    }

    /**
     * ==========================
     * LISTAR  y actualizar INSTITUTO DE SERVICIOS SOCIALES
     * ==========================
     */
    public function serv_sociales()
    {
        $sql = "SELECT * FROM info_beneficio_cole WHERE idInfobc='1'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function editarserv_sociales($servicios_sociales, $integran_iss_cip, $derechos_iss_cip, $serv_act, $importantes)
    {
        $sql = "UPDATE info_beneficio_cole
                SET servicios_sociales='$servicios_sociales',
                    integran_iss_cip='$integran_iss_cip',
                    derechos_iss_cip='$derechos_iss_cip',
                    serv_act='$serv_act',
                    importantes='$importantes'
                WHERE idInfobc='1'";
        return ejecutarConsulta($sql);
    }

    public function editar($coordenadas, $direccion, $email, $telefono)
    {
        $sql = "UPDATE info_beneficio_cole SET    coordenadas='$coordenadas',direccion='$direccion', email='$email', telefono='$telefono'  WHERE idcontactanos='1'";
        return ejecutarConsulta($sql);
    }

}
