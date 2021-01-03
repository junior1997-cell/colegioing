<?php
require '../config/conexion.php';

class MPaquetes
{

    public function __construct()
    {

    }

    public function insertar($nombre, $precio, $dp, $intinerario, $incluye, $noincluye, $aclaraciones, $informacion_general, $foto1, $foto2, $foto3)
    {
        $sql = "INSERT INTO " .
            "paquetes (nombre,precio,dp,intinerario,incluye,noincluye,aclaraciones,informacion_general,foto1,foto2,foto3,estado) " .
            "VALUES ('$nombre','$precio','$dp','$intinerario','$incluye','$noincluye','$aclaraciones','$informacion_general','$foto1','$foto2','$foto3','0')";
        return ejecutarConsulta($sql);
    }

    public function editar($idpaquetes, $nombre, $precio, $dp, $intinerario, $incluye, $noincluye, $aclaraciones, $informacion_general, $foto1, $foto2, $foto3)
    {
        $sql = "UPDATE paquetes SET " .
            "nombre='$nombre',precio='$precio',dp='$dp',intinerario='$intinerario',incluye='$incluye'," .
            "noincluye='$noincluye',aclaraciones='$aclaraciones',informacion_general='$informacion_general',foto1='$foto1',foto2='$foto2',foto3='$foto3' " .
            "WHERE idpaquetes='$idpaquetes'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($idpaquetes)
    {
        $sql = "SELECT * FROM paquetes WHERE idpaquetes='$idpaquetes'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar()
    {
        $sql = "SELECT * FROM paquetes ORDER BY idpaquetes";
        return ejecutarConsulta($sql);
    }

    /*public function listar_web(){
    $sql="SELECT * FROM paquetes WHERE estado = '0' ORDER BY idpaquetes";
    return ejecutarConsulta($sql);
    }*/

    public function nombreFoto($idpaquetes, $numFoto)
    {
        $sql = "SELECT foto" . $numFoto . " FROM paquetes WHERE idpaquetes='$idpaquetes'";
        return ejecutarConsulta($sql);
    }

    public function eliminar($idpaquetes)
    {
        $sql = "DELETE FROM paquetes WHERE idpaquetes = '$idpaquetes'";
        return ejecutarConsulta($sql);
    }

    public function desactivar($idpaquetes)
    {
        $sql = "UPDATE paquetes SET estado='1' WHERE idpaquetes = '$idpaquetes'";
        return ejecutarConsulta($sql);
    }

    public function activar($idpaquetes)
    {
        $sql = "UPDATE paquetes SET estado='0' WHERE idpaquetes = '$idpaquetes'";
        return ejecutarConsulta($sql);
    }

}
