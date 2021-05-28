<?php
error_reporting(0);
$nombre = $_POST['nombre'];
$correo_electronico= $_POST['email'];
$mensaje = $_POST['comentarios'];
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje" . $_POST['comentarios'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'jgallagaa@gmail.com';
$asunto = 'Mensaje nuevo';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'mensaje enviado correctamente';

?>