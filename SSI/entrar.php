<?php
	session_start();
	include ('conexion2.php');

//---------------------------------------------------------------------------------------------------------------------------------------------

	$clave = $_POST['clave'];
	//$clave = 11111;

//---------------------------------------------------------------------------------------------------------------------------------------------

	$query 		= 'SELECT clave,nombre FROM usuarios WHERE clave='.$clave.'';
	$return 	= mysql_query($query);
	$arreglo 	= mysql_fetch_array($return);


	if ($arreglo > 0) {
		$_SESSION['usuario'] = $arreglo[0];
		$_SESSION['nombre'] = $arreglo[1];
		$result = array("result" => 1);
		header('Content-Type:text/json');
		echo json_encode($result);
	}else {
		$result = array("result" => 0);
		header('Content-Type:text/json');
		echo json_encode($result);
	}
?>