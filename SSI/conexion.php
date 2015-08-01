<?php
	$conect = mysql_connect("localhost","root","fcaMXL13");	
	if(!$conect){
		echo "No se pudo iniciar el Sistema...";
	}
	mysql_select_db("ssi",$conect);
	/*fcaMXL13*/
?>
