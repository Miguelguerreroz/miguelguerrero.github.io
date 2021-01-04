<?php
    // This is the email thar will recive the message
    $destinatario = 'miguelguerrero882@gmail.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];
    

    $header = "Enviado desde mi portafolio";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $mensaje, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script>setTimeOut(\"\lacation.href='index.html'\", 1000)</script>";

?>