<?php
  $arreglo_prueba=array("result" => 1,"data" => array(array("nombre" => "Ramon", "edad" => 25),array("nombre" => "Ramsses", "edad" => 23)));
  header('Content-Type:text/json');
  echo json_encode($arreglo_prueba);
?>