<?php
  session_start();

  $usuario = $_SESSION['usuario'];
  $nombre = $_SESSION['nombre'];

  echo $usuario;
  echo $nombre;
?>