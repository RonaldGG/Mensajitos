<?php
//DIGICEL, S.A. de C.V.

function Digicel_Nombre() {
  return "Digicel:Live";
}

function Digicel_Enviar($telefono,$mensaje,$firma) {
$headers = 'From: digicel@digimensajes.com' . "\r\n" .
    'Reply-To: digicel@digimensajes.com' . "\r\n";
$to = "503".$telefono."@digimensajes.com";
$subject = $firma;
$body = $mensaje;
if (mail($to, $subject, $body, $headers)) {
  return true;
 } else {
  return false;
 }
}
?>
