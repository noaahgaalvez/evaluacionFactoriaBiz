<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$datos = "Nombre: " . $nombre . "\nEmail: " . $email . "\nMensaje: " . $mensaje . "\n\n";

$archivo = "datos.txt";

if (file_put_contents($archivo, $datos, FILE_APPEND)) {
    echo "Datos guardados correctamente";
} else {
    echo "Error al guardar los datos";
}