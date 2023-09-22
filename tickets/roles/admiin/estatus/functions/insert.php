<?php

// exclusivo para testeas recibimiento de datos del form
//print_r($_POST);

require('../../../../includes/db.php');

$nombre = $_POST['nombre'];

$query = "INSERT INTO estatus (nombre_estatus) VALUES ('$nombre')";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");


?>