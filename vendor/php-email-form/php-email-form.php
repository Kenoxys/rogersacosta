<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = 'rogers1982acosta@gmail.com'; // Cambia esto por tu dirección de correo
    $subject = $_POST['subject'];
    $message = "Nombre: " . $_POST['name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Mensaje: " . $_POST['message'];

    $headers = "From: " . $_POST['email'];

    if (mail($to, $subject, $message, $headers)) {
        echo "El mensaje ha sido enviado.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>