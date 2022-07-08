<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$empresa = $_POST['empresa'];
$message = $_POST['message'];
$pais = $_POST['pais'];
$ciudad = $_POST['ciudad'];

$email_from = 'CONTACTO ESTUDIO PUNTO Y LINEA';

$email_subject = "New Form Submission";

$email_body = "Nombre: $name.\n".
    "Correo: $visitor_email.\n".
    "Empresa: $empresa.\n".
    "pais: $pais.\n".
    "Ciudad: $ciudad.\n".
    "Mensaje: $message.\n";


$to = "contacto@estudiopuntoylinea.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply To: $visitor_email \r\n";

mail($to,email_subject,$email_body,$headers);

header("Location: contacto.html");



?>