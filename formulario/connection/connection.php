<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "Mi_Primera_Pagina_Web_US";
$connection = mysqli_connect($hostname, $username, $password, $database);
if (!$connection){
    die( "Conexión Fallida " . mysqli_connect_error());
}
?>