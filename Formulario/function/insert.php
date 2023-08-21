<?php

// exclusivo para testeas recibimiento de datos del form
print_r($_POST);

require('../connection/connection.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$query = "INSERT INTO usuario (nombre,email,tel) VALUES ('$nombre','$email','$telefono')";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

//print("<br> Nombre del usuario: " . $nombre . " email: " . $email . " tel: ". $telefono);
//echo "<br> Nombre del usuario: {$nombre} email: {$email} tel: {$telefono}";


?>