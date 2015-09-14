<?php

  session_start();
	include ('conexion2.php');

//---------------------------------------------------------------------------------------------------------------------------------------------
  if ( $conect ) {
    if ( isset($_SESSION['usuario']) ) {
      $dependencia  = strtoupper("'".$_POST['dependencia']."'");
      $asunto       = strtoupper("'".$_POST['asunto']."'");
      $descripcion  = strtoupper("'".$_POST['descripcion']."'");
      $correo       = strtolower("'".$_POST['correo']."'");
      $telefono     = strtoupper("'".$_POST['telefono']."'");

//---------------------------------------------------------------------------------------------------------------------------------------------

      $query = "INSERT INTO solicitudes 
      (usuario
      ,correo
      ,telefono
      ,dependencia
      ,asunto
      ,descripcion
      ,estatus) VALUES 
        (".$_SESSION['usuario'].",".$correo.",".$telefono.",".$dependencia.",".$asunto.",".$descripcion.",0)";
    
      mysql_query($query) or die(mysql_error());
      mysql_close($conect);

      $msj = array( "result" => 1 );
    }else {
      $msj = array( "result" => 0 );
    }
  }
  header('Content-Type:text/json');
  echo json_encode($msj);
?>
