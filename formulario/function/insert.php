<?php
//print_r($_POST);

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

print("<br> nombre del usuario: " . $nombre . " email: " . $email . " telefono: " . $telefono );
?>