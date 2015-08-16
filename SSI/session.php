<?php
  session_start();

  if (isset($_SESSION['usuario'])) {
  	$msj = array( "result" => 1 );
  }else {
  	$msj = array( "result" => 0 );
  }
  header('Content-Type:text/json');
  echo json_encode($msj);
?>