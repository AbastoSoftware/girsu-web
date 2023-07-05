<?php
$nombre = $_POST['contactsFormNameFirstName'];//'Juan Manuel';
$apellido = $_POST['contactsFormNameLastName'];//'Pescio';//
$rol = $_POST['contactsFormNameJobTitle'];//'Desarrollador';//
$entidad = $_POST['contactsFormNameCompany'];//'AS SRL';//
$email = $_POST['contactsFormNameWorkEmail'];//'juanmp012@gmail.com';//
$mensaje = $_POST['contactsFormNameDetails'];//'AEGAG  aeAG Agea';//

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
    echo 'Gracias por su mensaje. Nos pondremos en contacto pronto.';
} else {
    // Hubo un error al enviar el correo
    echo 'Ocurrió un error al enviar el mensaje. Por favor, inténtelo de nuevo más tarde.';
}
?>
