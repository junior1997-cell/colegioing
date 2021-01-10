<?php
if (strlen(session_id()) < 1) {
    session_start();
}

require_once '../modelo/MDirectiva.php';

$directiva = new MDirectiva();

$id_directiva       = isset($_POST["id_directiva"]) ? limpiarCadena($_POST["id_directiva"]) : "";
$cip_directiva      = isset($_POST["cip_directiva"]) ? limpiarCadena($_POST["cip_directiva"]) : "";
$cargo_directiva    = isset($_POST["cargo_directiva"]) ? limpiarCadena($_POST["cargo_directiva"]) : "";
$miembro_directiva  = isset($_POST["miembro_directiva"]) ? limpiarCadena($_POST["miembro_directiva"]) : "";
$correo_directiva   = isset($_POST["correo_directiva"]) ? limpiarCadena($_POST["correo_directiva"]) : "";
$id_tipo_directiva  = isset($_POST["id_tipo_directiva"]) ? limpiarCadena($_POST["id_tipo_directiva"]) : "";
$id_tipo_directiva2 = isset($_POST["id_tipo_directiva2"]) ? limpiarCadena($_POST["id_tipo_directiva2"]) : "";

$op = $_GET["op"];
switch ($op) {
    case 'guardaryeditar':
        // $id_directiva      = "";
        // $cip_directiva     = "hola";
        // $cargo_directiva   = "que";
        // $miembro_directiva = "monse";
        // $correo_directiva  = "hola@gmail";
        // $id_tipo_directiva = "1";
        // var_dump($cip_directiva, $cargo_directiva, $miembro_directiva, $correo_directiva, $id_tipo_directiva);die;
        if (empty($id_directiva)) {
            // ==================================INSERTAR UNA DIRECTIVA NUEVA===================
            $rspta = $directiva->insertarDirectiva($cip_directiva, $cargo_directiva, $miembro_directiva, $correo_directiva, $id_tipo_directiva);
            echo $rspta;
        } else {
            if (!empty($id_tipo_directiva)) {
                $id_tipo_directiva2 = $id_tipo_directiva;
            }
            // ==================================EDITAR UNA DIRECTIVA EXISTENTE===============
            $rspta = $directiva->editarDirectiva($id_directiva, $cip_directiva, $cargo_directiva, $miembro_directiva, $correo_directiva, $id_tipo_directiva2);
            echo $rspta;
        }
        break;

    case 'listarDirectiva':
        $rspta = $directiva->listarDirectiva();
        //Vamos a declarar un array
        $data = array();
        $id   = 0;
        // var_dump($rspta); die;
        while ($reg = $rspta->fetch_object()) {
            $id++;
            $data[] = array(
                "0" => $id,
                "1" => $reg->cip_directiva,
                "2" => $reg->cargo_directiva,
                "3" => $reg->miembro_directiva,
                "4" => $reg->correo_directiva,
                "5" => $reg->nombre_td,
                "6" => ($reg->estado_directiva == 0) ? '<center><span class="label bg-green">&nbsp;&nbsp;&nbsp;&nbsp;Activado&nbsp;&nbsp;&nbsp;&nbsp;</span></center>' : '<center><span class="label bg-red">Deshabilitado</span></center>',
                "7" => ($reg->estado_directiva) ? '
                <center>
                    <button class="btn btn-warning btn-xs" onclick="mostrarDirectiva(' . $reg->id_directiva . ')">
                        <i class="fa fa-edit"></i>
                    </button>' . '
                    <button class="btn btn-success btn-xs" onclick="activar_directiva(' . $reg->id_directiva . ')">
                        <i class="fa fa-check-circle"></i>
                    </button>
                </center>' : '
                <center>
                <button class="btn btn-warning btn-xs" onclick="mostrarDirectiva(' . $reg->id_directiva . ')">
                    <i class="fa fa-edit"></i>
                </button>' . '
                <button class="btn btn-danger btn-xs" onclick="desactivar_directiva(' . $reg->id_directiva . ')">
                    <i class="fa fa-trash"></i>
                </button>',

            );
        }
        $results = array(
            "sEcho"                => 1, //Información para el datatables
            "iTotalRecords"        => count($data), //enviamos el total registros al datatable
            "iTotalDisplayRecords" => count($data), //enviamos el total registros a visualizar
            "aaData"               => $data);
        echo json_encode($results);
        break;

    case 'mostrarDirectiva':
        // $a= $_GET["a"];
        $iddirectiva = $_POST["iddirectiva"];
        $rspta       = $directiva->mostrarDirectiva($iddirectiva);
        //Codificar el resultado utilizando json
        // var_dump($rspta); die;
        $data = array();
        while ($reg = $rspta->fetch_object()) {
            $data[] = array(
                "id_directiva"       => $reg->id_directiva,
                "cip_directiva"      => $reg->cip_directiva,
                "cargo_directiva"    => $reg->cargo_directiva,
                "miembro_directiva"  => $reg->miembro_directiva,
                "correo_directiva"   => $reg->correo_directiva,
                "id_tipo_directiva"  => $reg->nombre_td,
                "id_tipo_directiva2" => $reg->id_tipo_directiva,
            );
        }
        echo json_encode($data);
        break;
    case 'desactivar_directiva':
        $id_directiva = $_POST["id_directiva"];
        $rspta        = $directiva->desactivar_directiva($id_directiva);
        echo $rspta;
        break;

    case 'activar_directiva':
        $id_directiva = $_POST["id_directiva"];
        $rspta        = $directiva->activar_directiva($id_directiva);
        echo $rspta;
        break;
}
