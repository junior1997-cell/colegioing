<?php
require '../config/conexion.php';

class MDirectiva
{

    public function __construct()
    {}

    // ====================================== ..:: MODELO DIRECTIVA ::.. =======================================
    // ====================================== LISTAR DIRECTIVA PARA LA TABLA =======================================
    public function listarDirectiva()
    {
        $sql = "SELECT * FROM directiva d, tipodirectiva td
        WHERE d.id_tipo_directiva = td.id_td
        ORDER BY id_directiva DESC";
        return ejecutarConsulta($sql);
    }
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

}
