<?php
require '../config/conexion.php';

class MHistoria
{

    public function __construct()
    {}

    public function insertar($reseña_historia, $himno)
    {
        $sql = "INSERT INTO historia (reseña_historia,himno)
        		VALUES ('$reseña_historia','$himno')";
        return ejecutarConsulta($sql);
    }

    public function editar($reseña_historia, $himno)
    {
        $sql = "UPDATE historia
        		SET	reseña_historia='$reseña_historia',
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

    // ====================================== MODELO DECANO =======================================
    public function listarDecano()
    {
        $sql = "SELECT * FROM decano ORDER BY id_decano DESC" ;
        return ejecutarConsulta($sql);
    }
    public function mostrardecano($id_decano){
        $sql="SELECT * FROM decano WHERE id_decano='$id_decano'";
        return ejecutarConsulta($sql);
    }
    public function insertarDecano($decano_periodo,$decano_nom_ape,$decano_profesion,$decano_cip){
        $sql="INSERT INTO decano (decano_periodo,decano_nom_ape,decano_profesion,decano_cip) 
                     VALUES ('$decano_periodo','$decano_nom_ape','$decano_profesion','$decano_cip')";
        return ejecutarConsulta($sql);

    }
    public function editarDecano($id_decano,$decano_periodo,$decano_nom_ape,$decano_profesion,$decano_cip){
        $sql="UPDATE decano 
        SET decano_periodo='$decano_periodo',
            decano_nom_ape='$decano_nom_ape',
            decano_profesion='$decano_profesion',
            decano_cip='$decano_cip' 
        WHERE id_decano='$id_decano'";
        return ejecutarConsulta($sql);
    }

    public function activar_decano($id_decano){
        $sql="UPDATE decano set estado_decano = '0' WHERE id_decano='$id_decano'";
        return ejecutarConsulta($sql);
    }

    public function desactivar_decano($id_decano){
        $sql="UPDATE decano set estado_decano = '1' WHERE id_decano='$id_decano'";
        return ejecutarConsulta($sql);
    }

}
