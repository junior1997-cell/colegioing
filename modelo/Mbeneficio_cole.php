<?php
require '../config/conexion.php';

class Mbeneficio_cole
{

    public function __construct()
    {

    }

    public function insertarDoc($titulo,$documento)
    {
        $sql = "INSERT INTO doc_benficio_cole (titulo,documento) VALUES ('$titulo','$documento')";
        return ejecutarConsulta($sql);
    }

    public function editarDoc($idbeneficio,$titulo,$documento)
    {
       $sql = "UPDATE doc_benficio_cole SET titulo='$titulo', documento='$documento' WHERE idbeneficio='$idbeneficio'";
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

    public function editarserv_sociales($servicios_sociales,$iss_cip,$derechobenef,$actualidad,$important)
    {
        $sql = "UPDATE info_beneficio_cole
        		SET	servicios_sociales='$servicios_sociales',
        		integran_iss_cip='$iss_cip',
        		derechos_iss_cip='$derechobenef',
        		serv_act='$actualidad',
        		inportantes='$important',
        		WHERE idInfobc='1'";
        return ejecutarConsulta($sql);
    }

    /**
    * ==========================
    * FIN LISTAR INSTITUTO DE SERVICIOS SOCIALES
    * ==========================
    */

}
