<?php

require('../../../../includes/db.php');

$id = $_GET['id'];

$query = "DELETE FROM nivel WHERE id_nivel = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>