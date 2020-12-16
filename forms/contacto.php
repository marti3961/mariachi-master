<?php
// Varios destinatarios
//$para  = 'aidan@example.com' . ', '; // atención a la coma
//$para .= 'wez@example.com';
$para = $_POST['name'];
$mensaje_user = $_POST['email'];
$mensaje_message = $_POST['message'];

// título
$titulo = $_POST['subject'];

// mensaje
$mensaje = '
<html>
<head>
  <title>Alguien te escribio</title>
</head>
<body>
   Titulo : '. $titulo .' <br/>
   Cliente :'. $para .'<br/>
   Correo : '.$mensaje_user  .'<br/>
   Mensaje : '. $mensaje_message .'
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Mariachi Mexico Magico <mariachimexmagic@example.com>'."\r\n";
$cabeceras .= 'From: Contacto <contacto@yunop.com' . "\r\n";

// Enviarlo
mail('mariachimexmagic@gmail.com', $titulo, $mensaje, $cabeceras);
?>