<?php

// Datos de la conexión
$host = "localhost";
$user = "usuario";
$password = "contraseña";
$database = "nombre_de_la_base_de_datos";

// Conexión a la base de datos
$connection = mysqli_connect($host, $user, $password, $database);

// Verificación de la conexión
if (!$connection) {
	die("Error de conexión: " . mysqli_connect_error());
}

?>
