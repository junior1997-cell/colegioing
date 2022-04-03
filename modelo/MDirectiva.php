<?php
require '../config/conexion.php';

class MDirectiva
{

    public function __construct()
    {}

    // ====================================== ..:: MODELO DIRECTIVA ::.. =======================================

    // ====================================== MOSTRAR PARA EDITAR DIRECTIVA =======================================
    public function mostrarDirectiva($id_directiva)
    {
        $sql = "SELECT * FROM directiva d, tipodirectiva td WHERE id_directiva='$id_directiva' AND td.id_td = d.id_tipo_directiva";
        return ejecutarConsulta($sql);
    }
    // ====================================== INSERTAR DIRECTIVA =======================================
    public function insertarDirectiva($cip_directiva, $cargo_directiva, $miembro_directiva, $correo_directiva, $id_tipo_directiva)
    {
        $sql = "INSERT INTO directiva (cip_directiva, cargo_directiva, miembro_directiva, correo_directiva, id_tipo_directiva)
                     VALUES ('$cip_directiva', '$cargo_directiva', '$miembro_directiva', '$correo_directiva', '$id_tipo_directiva')";
        return ejecutarConsulta($sql);

    }
    public function editarDirectiva($id_directiva, $cip_directiva, $cargo_directiva, $miembro_directiva, $correo_directiva, $id_tipo_directiva)
    {
        $sql = "UPDATE directiva
        SET cip_directiva='$cip_directiva',
            cargo_directiva='$cargo_directiva',
            miembro_directiva='$miembro_directiva',
            correo_directiva='$correo_directiva',
            id_tipo_directiva='$id_tipo_directiva'
        WHERE id_directiva = '$id_directiva' ";
        return ejecutarConsulta($sql);
    }

    public function activar_directiva($id_directiva)
    {
        $sql = "UPDATE directiva set estado_directiva = '0' WHERE id_directiva='$id_directiva'";
        return ejecutarConsulta($sql);
    }

    public function desactivar_directiva($id_directiva)
    {
        $sql = "UPDATE directiva set estado_directiva = '1' WHERE id_directiva='$id_directiva'";
        return ejecutarConsulta($sql);
    }

    // ====================================== LISTAR DIRECTIVA DEPARTAMEBTAL=======================================
    public function listarDirectivaDepartamental()
    {
        $sql = "SELECT * FROM directiva d, tipodirectiva td
        WHERE d.id_tipo_directiva = td.id_td AND td.id_td = 1 and d.estado_directiva = 0
        ORDER BY id_directiva DESC";
        return ejecutarConsulta($sql);
    }

    public function Historial_DirectivaDepartamental()
    {
        $sql = "SELECT * FROM directiva d, tipodirectiva td
        WHERE d.id_tipo_directiva = td.id_td AND td.id_td = 1 and d.estado_directiva = 1
        ORDER BY id_directiva DESC";
        return ejecutarConsulta($sql);
    }

    // ====================================== MOSTRAR TABLA DIRECTIVA "AGRONOMO" =======================================

    public function listarDirectivaAgronomo()
    {
        $sql = "SELECT * FROM directiva d, tipodirectiva td
        WHERE d.id_tipo_directiva = td.id_td AND td.id_td = 2 and d.estado_directiva = 0
        ORDER BY id_directiva DESC";
        return ejecutarConsulta($sql);
    }

    public function Historial_listarDirectivaAgronomo()
    {
        $sql = "SELECT * FROM directiva d, tipodirectiva td
        WHERE d.id_tipo_directiva = td.id_td AND td.id_td = 2 and d.estado_directiva = 1
        ORDER BY id_directiva DESC";
        return ejecutarConsulta($sql);
    }
    // ====================================== MOSTRAR TABLA DIRECTIVA "AMBIENTAL" =======================================

    public function listarDirectivaAmbiental()
    {
        $sql = "SELECT * FROM directiva d, tipodirectiva td
        WHERE d.id_tipo_directiva = td.id_td AND td.id_td = 3 and d.estado_directiva = 0
        ORDER BY id_directiva DESC";
        return ejecutarConsulta($sql);
    }

    public function Historial_listarDirectivaAmbiental()
    {
        $sql = "SELECT * FROM directiva d, tipodirectiva td
        WHERE d.id_tipo_directiva = td.id_td AND td.id_td = 3 and d.estado_directiva = 1
        ORDER BY id_directiva DESC";
        return ejecutarConsulta($sql);
    }

    // ====================================== MOSTRAR TABLA DIRECTIVA "INDUSTRIAL" =======================================

    public function listarDirectivaIndustrial()
    {
        $sql = "SELECT * FROM directiva d, tipodirectiva td
        WHERE d.id_tipo_directiva = td.id_td AND td.id_td = 4 and d.estado_directiva = 0
        ORDER BY id_directiva DESC";
        return ejecutarConsulta($sql);
    }

    public function Historial_listarDirectivaIndustrial()
    {
        $sql = "SELECT * FROM directiva d, tipodirectiva td
        WHERE d.id_tipo_directiva = td.id_td AND td.id_td = 4 and d.estado_directiva = 1
        ORDER BY id_directiva DESC";
        return ejecutarConsulta($sql);
    }

    // ====================================== MOSTRAR TABLA DIRECTIVA "CIVIL" =======================================

    public function listarDirectivaCivil()
    {
        $sql = "SELECT * FROM directiva d, tipodirectiva td
        WHERE d.id_tipo_directiva = td.id_td AND td.id_td = 5 and d.estado_directiva = 0
        ORDER BY id_directiva DESC";
        return ejecutarConsulta($sql);
    }

    public function Historial_listarDirectivaCivil()
    {
        $sql = "SELECT * FROM directiva d, tipodirectiva td
        WHERE d.id_tipo_directiva = td.id_td AND td.id_td = 5 and d.estado_directiva = 1
        ORDER BY id_directiva DESC";
        return ejecutarConsulta($sql);
    }

    public function count_directiva($id_directiva )
    {
        $sql = "SELECT COUNT(id_directiva ) as id_directiva FROM directiva WHERE estado_directiva = '$id_directiva' and id_tipo_directiva = 1";
        return ejecutarConsultaSimpleFila($sql);
    }

}
