<?php
  $dependencia 	= $_POST['dependencia'];
  $asunto 		= $_POST['asunto'];
  $descripcion 	= $_POST['descripcion'];
  $correo 		= $_POST['correo'];
  $telefono 	= $_POST['telefono'];

  // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
  $email_to = "ramssesable13@gmail.com";
  //$email_to = "claudia@uabc.edu.mx";
  $email_subject = "Solicitud de servicios informáticos";

  $email_message = "Detalles solicitud:\n\n";
  $email_message .= "Dependencia: " . $dependencia . "\n";
  $email_message .= "Asunto: " . $asunto . "\n";
  $email_message .= "descripción: " . $descripcion . "\n";
  $email_message .= "telefono / Extención: " . $telefono . "\n\n";


  // Ahora se envía el e-mail usando la función mail() de PHP
  $headers = 'From: '.$correo."\r\n".
  'Reply-To: '.$correo."\r\n".
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, utf8_decode($email_message), $headers);

  echo "¡El formulario se ha enviado con éxito!";
?>