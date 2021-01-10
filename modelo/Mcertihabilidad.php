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
    public function listarcosto($id){
        $sql = "SELECT * FROM montoscertif  ORDER BY idmontos WHERE idCertifhabilidad='$id'";
        return ejecutarConsulta($sql);

     }

    /*public function listar_web(){
    $sql="SELECT * FROM certifhabilidad WHERE estado = '0' ORDER BY idcertifhabilidad";
    return ejecutarConsulta($sql);
    }*/

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
