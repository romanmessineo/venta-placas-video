<?php

$nombre = $_POST["Nombre"];
$mail = $_POST["Correo"];
$mensaje = $_POST["mensaje"]

/* $mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje .= "Su e-mail es" . $mail . " \r\n";
$mensaje .= "Mensaje" . $_POST["mensaje"] . " \r\n"; */
/* $mensaje .= "Enviado el" .$nombre . date("d/m/y" . time()); */

$destinatario = "messineoroma@gmail.com";
$asunto = "Este mail fue enviado desde Monkybits";

$mensaje="
             De: ".$nombre."
             Mensaje: ".$mensaje."
             Email: ".$mail."
             ";

mail($destinatario, $sunto, utf8_decode($mensaje), $header));

header("location:index.html");
 

?>