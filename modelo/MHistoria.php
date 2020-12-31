<?php
require '../config/conexion.php';

class MHistoria
{

    public function __construct()
    {}

    public function insertar($reseña_historia, $decano_periodo_gestion, $himno)
    {
        $sql = "INSERT INTO historia (reseña_historia,decano_periodo_gestion,himno)
        		VALUES ('$reseña_historia','$decano_periodo_gestion','$himno')";
        return ejecutarConsulta($sql);
    }

    public function editar($reseña_historia, $decano_periodo_gestion, $himno)
    {
        $sql = "UPDATE historia
        		SET	reseña_historia='$reseña_historia',
        		decano_periodo_gestion='$decano_periodo_gestion',
        		himno='$himno'
        		WHERE id='1'";
        return ejecutarConsulta($sql);
    }

    public function mostrar()
    {
        $sql = "SELECT * FROM historia WHERE id='1'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listar()
    {
        $sql = "SELECT * FROM historia ORDER BY id";
        return ejecutarConsulta($sql);
    }

}
