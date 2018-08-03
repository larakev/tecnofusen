<?php

$destino = "info@tecnofusen.com";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
$resul = mail($destino,$asunto,$contenido);

    if($resul) {
        print "<script>alert(\"Mensaje enviado exitosamente.\");window.location='http://www.tecnofusen.com';</script>";
    }else {
        print "<script>alert(\"Ha ocurido un error\");window.location='http://www.tecnofusen.com';</script>";
    }

?>
