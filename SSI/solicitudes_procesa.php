<?php
	session_start();
	include ('conexion2.php');

//---------------------------------------------------------------------------------------------------------------------------------------------


	$sql 		= 'SELECT usuario,correo,telefono,dependencia,asunto,descripcion,estatus FROM solicitudes WHERE usuario=11111';
	$result 	= mysql_query($sql);
	if ( !mysql_fetch_array($result) > 0)
		$arreglo_solicitudes = array("result" => 0);
	else {
		$arreglo_solicitudes = array("result" => 1); 
		$data = array();

		while($arreglo 	= mysql_fetch_array($result)) {
			$fila = array();
			for ($i = 1; $i <= mysql_num_fields($result); $i ++) {
				array_push($fila, $arreglo[$i]);
			}
			array_push($data, $fila);
			echo "$arreglo[0] $arreglo[1] $arreglo[2] $arreglo[3] $arreglo[4] $arreglo[5] $arreglo[6] <br>";
		}
	}
		
	/*if ($arreglo > 0) {

		

		//$arreglo_solicitudes=array("result" => 1,"data" => array(array("nombre" => "Ramon", "edad" => 25),array("nombre" => "Ramsses", "edad" => 23)));
		//header('Content-Type:text/json');
		//echo json_encode($arreglo_prueba);
	}else {
		echo "Le falto mas caldo";
	}*/


?>