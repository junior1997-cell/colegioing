<?php
if (strlen(session_id()) < 1) {
    session_start();
}

require_once '../modelo/Mrequisito_coleg.php';

$requisito = new MRequisito();

$op = $_GET["op"];
switch ($op) {
    case 'actualizar':
		$nombre_requisito = $_POST["nombre_requisito"];
        $hoy = getdate ( );
        $fecha = $hoy['year'].'-'.$hoy['mon'].'-'.$hoy['mday'].' '.$hoy['hours'].':'.$hoy['minutes'].':'.$hoy['seconds'];

        $rspta = $requisito->editar($nombre_requisito,$fecha);
        echo $rspta;
        //2021-02-23 15:55:58
       
		// $tsa = ['histori'=>$nombre_requisito,'fecha'=>$hoy];
		// echo json_encode( $tsa );
        
        break;

    case 'mostrar':
        $rspta = $requisito->mostrar();
        echo json_encode($rspta);
        break;    
}
