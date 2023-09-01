<?php
$host = 'localhost';
$user = 'nombre_de_usuario';
$password = 'contraseña';
$database = 'nombre_de_la_base_de_datos';

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}
