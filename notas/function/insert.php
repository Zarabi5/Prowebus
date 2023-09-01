<?php

require('../connection/connection.php');

$id = $_POST['id'];

$query = "DELETE FROM nota WHERE id = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>
