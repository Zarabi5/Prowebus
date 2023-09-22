<?php
require("./connection/connection.php");

$query = "SELECT * FROM usuario";

$ejecutar = mysqli_query($connection, $query);

$contador = 1;

while ($fila = mysqli_fetch_array($ejecutar)) {

    ?>
    <tr>
        <td>
            <?php echo $contador; ?>
        </td>
        <td>
            <?php echo $fila[ 'nombre' ]; ?>
        </td>
        <td>
            <?php echo $fila[ 'email' ]; ?>
        </td>
        <td>
            <?php echo $fila[ 'tel' ]; ?>
        </td>
        <td><a href="./function/update.php">editar</a></td>
        <td><a href="./function/delete.php?id=<?php echo $fila[ 'id_usuario' ]; ?>">eliminar</a></td>
    </tr>
    <?php $contador++;
} ?>