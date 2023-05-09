<?php
// Recoge los datos del formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$asunto = $_POST['subject'];
$mensaje = $_POST['message'];

// Construye el mensaje de correo electrónico
$destinatario = 'contacto@gonzalo.pro';
$asunto = $asunto;
$mensaje_correo = "De: $nombre <$email>\r\n" .
				  "Mensaje: $mensaje\r\n";

// Envía el correo electrónico
mail($destinatario, $asunto, $mensaje_correo);

// Redirige al usuario a una página de confirmación
header('Location: ./confirmacion.html');
?>
