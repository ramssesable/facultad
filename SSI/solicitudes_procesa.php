<?php
	session_start();
	include ('conexion2.php');

//---------------------------------------------------------------------------------------------------------------------------------------------

	$sql 		= 'SELECT usuario,correo,telefono,dependencia,asunto,descripcion,estatus,fecha_solicitud FROM solicitudes WHERE usuario='.$_SESSION['usuario'];
	$result 	= mysql_query($sql);
	$arreglo 	= mysql_fetch_array($result);
	mysql_close($conect);
	if ( !$arreglo > 0)
		$arreglo_solicitudes = array("result" => 0);
	else {
		$arreglo_solicitudes = array("result" => 1); 
		$data = array();

		$fila = array();
		for ($i = 0; $i <= mysql_num_fields($result)-1; $i ++) {
			$fila[mysql_field_name($result, $i)] = $arreglo[$i];
		}
		array_push($data, $fila);

		while($arreglo 	= mysql_fetch_array($result)) {
			$fila = array();
			for ($i = 0; $i <= mysql_num_fields($result)-1; $i ++) {
				$fila[mysql_field_name($result, $i)] = $arreglo[$i];
			}
			array_push($data, $fila);
		}
		$arreglo_solicitudes['data'] = $data;
	}


	header('Content-Type:text/json');
	echo json_encode($arreglo_solicitudes);
?>