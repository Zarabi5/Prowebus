<?php

require('../../../../includes/db.php');

$id = $_GET['id'];

$query = "DELETE FROM estatus WHERE id_estatus = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>