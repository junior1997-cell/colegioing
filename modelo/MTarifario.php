<?php
require '../config/conexion.php';

class MTarifario
{

    public function __construct()
    {}

    // ====================================== ..:: MODELO docnorma ::.. =======================================
    // ====================================== LISTAR docnorma PARA LA TABLA =======================================
    public function listarTarifario()
    {
        $sql = "SELECT * FROM tarifario
        ORDER BY id_tarifario DESC";
        return ejecutarConsulta($sql);
    }
    // ====================================== MOSTRAR PARA EDITAR docnorma =======================================
    public function mostrarTarifario($id_tarifario)
    {
        $sql = "SELECT * FROM tarifario
                WHERE id_tarifario='$id_tarifario' ";
        return ejecutarConsulta($sql);
    }
    // ====================================== INSERTAR docnorma =======================================
    public function insertarTarifario($doc_tarifario, $nombre_tarifario)
    {
        $sql = "INSERT INTO tarifario (doc_tarifario, nombre_tarifario)
                     VALUES ('$doc_tarifario', '$nombre_tarifario')";
        return ejecutarConsulta($sql);

    }
    public function editarTarifario($id_tarifario, $doc_tarifario, $nombre_tarifario)
    {
        $sql = "UPDATE tarifario
        SET doc_tarifario='$doc_tarifario',
        nombre_tarifario='$nombre_tarifario'           
        WHERE id_tarifario = '$id_tarifario' ";
        return ejecutarConsulta($sql);
    }

    public function activarDocnorma($id_tarifario)
    {
        $sql = "UPDATE tarifario set estado_doc = '0' WHERE id_tarifario='$id_tarifario'";
        return ejecutarConsulta($sql);
    }

    public function desactivarDocnorma($id_tarifario)
    {
        $sql = "UPDATE tarifario set estado_doc = '1' WHERE id_tarifario='$id_tarifario'";
        return ejecutarConsulta($sql);
    }

}
