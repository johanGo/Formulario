<?php
    $destinatario= 'johansebastiangonzalezormaza@gmail.com';
    $nombre = $_POST['nombre'];
    $asunto =$_POST['asunto'];
    $mensaje=$_POST['mensaje'];
    $email=$_POST['email'];

    $header = "Enviado desde la pagina de la Peluqueria Natural Lokk";
    $mensajeCompleto = $mensaje . "\nAtentamente:" . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>slert('correo enviado successfully')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000) </script>";


?>