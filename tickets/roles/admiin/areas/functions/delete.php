<?php

require('../../../../includes/db.php');

$id = $_GET['id'];

$query = "DELETE FROM area WHERE id_area = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>