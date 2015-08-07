<?php

	$conect = mysql_connect("localhost","root","burritos");	
	if(!$conect){
		echo "No se pudo establecer conexion...";
	}else
		mysql_select_db("ssi",$conect);
		/*fcaMXL13*/
?>
