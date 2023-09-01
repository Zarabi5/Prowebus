<?php


require('../connection/connection.php');

$id = $_GET['id'];

$query = "DELETE FROM usuario WHERE id_usuario = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>