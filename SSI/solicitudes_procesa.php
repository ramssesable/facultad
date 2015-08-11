<?php
	session_start();
	include ('conexion2.php');

//---------------------------------------------------------------------------------------------------------------------------------------------


	$sql 		= 'SELECT usuario,correo,telefono,dependencia,asunto,descripcion,estatus FROM solicitudes WHERE usuario=11111';
	$result 	= mysql_query($sql);
	$arreglo 	= mysql_num_rows($result);
	echo $arreglo;
	// $arreglo 	= mysql_fetch_array($result);

	

	/*if ($arreglo > 0) {

		$bolRegresa = odbc_exec($conect, $sql);

		$numFila = 0;
		while(odbc_fetch_row($bolRegresa)){
			$arrDatoColumna = array();
			$arrNombreCampos = array();
			for ($i = 1; $i <= odbc_num_fields($bolRegresa); $i ++){
			      if ($numFila == 0) {
					 // pone los nombres de columnas (campos) del arreglo una por una
			         array_push($arrNombreCampos, odbc_field_name($bolRegresa, $i));
				  }
				     // Pone los valores de cada columna 
				     array_push($arrDatoColumna, odbc_result($bolRegresa, $i));
			}
			// Solo lo hace una vez, es el nombre total de las columnas de la tabla
			if ($numFila == 0) {
			 array_push($this->arrResultado, $arrNombreCampos );   
			}

			// Contador de fila del arreglo
			$numFila++;

			// Inserta la filacompleta  al arreglo arrResultado
			array_push($this->arrResultado, $arrDatoColumna); 
		}

		echo $arreglo[0]."<br>";
		echo $arreglo[1]."<br>";
		echo $arreglo[2]."<br>";
		echo $arreglo[3]."<br>";
		echo $arreglo[0][0]."<br>";
		echo $arreglo[0][1]."<br>";
		echo $arreglo[0][2]."<br>";
		echo $arreglo[0][3]."<br>";
		echo $arreglo[0][4]."<br>";
		//$campoUsuario = $arreglo[][]
		//$arreglo_solicitudes=array("result" => 1,"data" => array(array("nombre" => "Ramon", "edad" => 25),array("nombre" => "Ramsses", "edad" => 23)));
		//header('Content-Type:text/json');
		//echo json_encode($arreglo_prueba);
	}else {
		echo "Le falto mas caldo";
	}*/
?>