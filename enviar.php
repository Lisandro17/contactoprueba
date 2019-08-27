<?php

$destino = "lisandrodiomedes@gmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$contenido = "nombre" . $nombre . "\ncorreo" . $correo . "\ntelefono" . $telefono . "\nmensaje" . $mensaje;
header('location:index.html'); 
mail($destino, "Contenido", $contenido);
?>