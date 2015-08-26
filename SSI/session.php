<?php
  session_start();
  header('Content-Type: text/html; charset=utf-8');
  if (isset($_SESSION['usuario'])) {
  	$msj = array( "result" => 1 );
  	$msj['usuario'] = utf8_encode($_SESSION['nombre']);
  }else {
  	$msj = array( "result" => 0 );
  }
  header('Content-Type:text/json');
  echo json_encode($msj);
?>