<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/PaginaPulse/view/php/mail.php');

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $fechaNacimiento = $_POST['fecha-nacimiento'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];

    $to = 'contactopulse02@gmail.com'; 
    $toName = 'Nosotros';
    $subject = $nombre . ' ' . $apellido . ' ';
    $body = "
        <h2>Nuevo mensaje de contacto</h2>
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Apellido:</strong> $apellido</p>
        <p><strong>Fecha de nacimiento:</strong> $fechaNacimiento</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Consulta o Propuesta:</strong> $consulta</p>
    ";

    $mailResult = sendMail($to, $toName, $subject, $body);
    if ($mailResult === true) {
        echo "<script>
            alert('Mensaje enviado correctamente.');
            window.location.href = '../../index.html';
        </script>";
    } else {
        echo "<script>
            alert('No se pudo enviar el mensaje. Error: $mailResult');
            window.location.href = '../../index.html';
        </script>";
    }
}
