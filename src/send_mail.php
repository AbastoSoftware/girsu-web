<?php
$nombre = $_POST['contactsFormNameFirstName'];
$apellido = $_POST['contactsFormNameLastName'];
$rol = $_POST['contactsFormNameJobTitle'];
$entidad = $_POST['contactsFormNameCompany'];
$email = $_POST['contactsFormNameWorkEmail'];
$mensaje = $_POST['contactsFormNameDetails'];

// Configurar el destinatario del correo electrónico
$destinatario = 'jpescio@abastosoftware.ar';
// Configurar el asunto del correo electrónico
$asunto = 'Nuevo mensaje de contacto desde Web GIRSU';

// Construir el cuerpo del correo electrónico
$cuerpo = "Nombre: $nombre $apellido\n";
$cuerpo .= "Rol/Area de trabajo: $rol\n";
$cuerpo .= "Entidad: $entidad\n";
$cuerpo .= "Correo electrónico: $email\n\n";
$cuerpo .= "Mensaje:\n$mensaje";

// Enviar el correo electrónico
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    // El correo se envió correctamente
    echo '<script>alert("Gracias por su mensaje. Nos pondremos en contacto pronto."); window.location.href = "index.html";</script>';
    exit();
} else {
    // Hubo un error al enviar el correo
    echo '<script>alert("Ocurrió un error al enviar el mensaje. Por favor, inténtelo de nuevo más tarde."); window.location.href = "custom-page-contacts.html";</script>';
    exit();
}
?>
