<?php

//print_r($_POST);

require("../../../../includes/db.php");

$id = $_POST[ 'id' ];
$nombre = $_POST[ 'nombre' ];

$query = "UPDATE nivel SET nombre_nivel = '$nombre' WHERE id_nivel = $id";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>