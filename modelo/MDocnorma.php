<?php
require '../config/conexion.php';

class MDocnorma
{

    public function __construct()
    {}

    // ====================================== ..:: MODELO docnorma ::.. =======================================
    // ====================================== LISTAR docnorma PARA LA TABLA =======================================
    public function listarDocnorma()
    {
        $sql = "SELECT * FROM docnorma d, tipo_doc td
        WHERE d.idtipodoc = td.id_tipo_doc
        ORDER BY id_docnorma DESC";
        return ejecutarConsulta($sql);
    }
    // ====================================== MOSTRAR PARA EDITAR docnorma =======================================
    public function mostrarDocnorma($id_docnorma)
    {
        $sql = "SELECT * FROM docnorma d, tipo_doc td
                WHERE id_docnorma='$id_docnorma' AND td.id_tipo_doc = d.idtipodoc";
        return ejecutarConsulta($sql);
    }
    // ====================================== INSERTAR docnorma =======================================
    public function insertarDocnorma($doc_doc, $nombre_doc, $id_tipo_doc)
    {
        $sql = "INSERT INTO docnorma (doc_doc, nombre_doc, idtipodoc)
                     VALUES ('$doc_doc', '$nombre_doc', '$id_tipo_doc')";
        return ejecutarConsulta($sql);

    }
    public function editarDocnorma($id_docnorma, $doc_doc, $nombre_doc, $id_tipo_doc)
    {
        $sql = "UPDATE docnorma
        SET doc_doc='$doc_doc',
            nombre_doc='$nombre_doc',
            idtipodoc='$id_tipo_doc'
        WHERE id_docnorma = '$id_docnorma' ";
        return ejecutarConsulta($sql);
    }

    public function activarDocnorma($id_docnorma)
    {
        $sql = "UPDATE docnorma set estado_doc = '0' WHERE id_docnorma='$id_docnorma'";
        return ejecutarConsulta($sql);
    }

    public function desactivarDocnorma($id_docnorma)
    {
        $sql = "UPDATE docnorma set estado_doc = '1' WHERE id_docnorma='$id_docnorma'";
        return ejecutarConsulta($sql);
    }

    public function count_doc_norma($id_docnorma)
    {
        $sql = "SELECT COUNT(id_docnorma) as id_docnorma FROM docnorma WHERE estado_doc = '$id_docnorma' ";
        return ejecutarConsultaSimpleFila($sql);
    }

}
