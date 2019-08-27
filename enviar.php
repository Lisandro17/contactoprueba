<?php

$destino = "lisandrodiomedes@gmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$contenido = "nombre" . $nombre . "\ncorreo" . $correo . "\ntelefono" . $telefono . "\nmensaje" . $mensaje;
mail($destino, "Contenido", $contenido);
header('location:saludo.html'); 
?>