<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];



$message = "Este mensaje fue enviado por: " . $nombre . " " . $apellido . " \r\n";
$message .= "Su e-mail es: " . $correo . " \r\n";
$message .= "Telefono de contacto: " . $telefono . " \r\n";
$message .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'm_alvarez_01@outlook.com';
$asunto = 'Mensaje de Pluservice';

mail($para, $asunto, $message);

echo '<script language="javascript">alert("Mensaje enviado");window.location.href="../vistas/contacto.html"</script>';




