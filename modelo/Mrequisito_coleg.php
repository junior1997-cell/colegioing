<?php
require '../config/conexion.php';

class MRequisito
{
    public function __construct()
    {}

   
    public function editar($nombre_requisito,$fecha)
    {
        $sql = "UPDATE requisitos_coleg
        		SET	nombre_requisito='$nombre_requisito',fecha_requisito='$fecha'
        		WHERE id_requisito='1'";
        return ejecutarConsulta($sql);
    }

    public function mostrar()
    {
        $sql = "SELECT * FROM requisitos_coleg WHERE id_requisito='1' ";
        return ejecutarConsultaSimpleFila($sql);
    }     

}
