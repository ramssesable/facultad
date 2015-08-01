<?php
	include ('conexion2.php');

//---------------------------------------------------------------------------------------------------------------------------------------------

	$usuario = $_POST['usuario'];

	$sql 		= 'SELECT * FROM usuarios WHERE no_usuario='.$usuario.'';
	$result 	= mysql_query($sql);
	$arreglo 	= mysql_fetch_array($result);

	//$result = $_SESSION['app']->db->array_result($sql);
    //echo $_SESSION['app']->dd_json_result($result);

	if ($arreglo > 0) {
		echo "Se hizo la machaca<br>";
		echo $arreglo[0];
		echo $arreglo[1];
	}else {
		echo "Le falto mas caldo";
	}
?>