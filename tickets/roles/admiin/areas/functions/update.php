<?php

//print_r($_POST);

require("../../../../includes/db.php");

$id = $_POST[ 'id' ];
$nombre = $_POST[ 'nombre' ];

$query = "UPDATE area SET nombre_area = '$nombre' WHERE id_area = $id";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>