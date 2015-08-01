<?php
	session_start();
	//---------------------------------------------------------------------------------------------------------------------------------------------



	$conect = mysql_connect("localhost","root","burritos");	
	if(!$conect){
		echo "No se pudo iniciar el Sistema...";
	}
	mysql_select_db("ssi",$conect);
	/*fcaMXL13*/

?>
