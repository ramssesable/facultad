<?php
	session_start();
	include ('conexion2.php');

//---------------------------------------------------------------------------------------------------------------------------------------------

	$clave = $_POST['clave'];
	//$clave = 11111;

//---------------------------------------------------------------------------------------------------------------------------------------------

	$query 		= 'SELECT clave,nombre,rol_id FROM usuarios WHERE clave='.$clave.'';
	$return 	= mysql_query($query);
	$arreglo 	= mysql_fetch_array($return);

	mysql_close($conect);

	if ($arreglo > 0) {
		$_SESSION['usuario'] = $arreglo[0];
		$_SESSION['nombre'] = $arreglo[1];
		$_SESSION['usuario_rol'] = $arreglo[2];
		$result = array("result" => 1);
		header('Content-Type:text/json');
		echo json_encode($result);
	}else {
		$result = array("result" => 0);
		header('Content-Type:text/json');
		echo json_encode($result);
	}
?>