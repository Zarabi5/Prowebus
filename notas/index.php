<!DOCTYPE html>
<html>
<head>
	<title>Notas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Notas</h1>

		<!-- Formulario para agregar una nueva nota -->
		<form action="actions/add.php" method="POST">
			<label for="nota">Nueva nota:</label>
			<input type="text" name="nota" id="nota" required>
			<button type="submit">Agregar</button>
		</form>

		<!-- Lista de notas existentes -->
		<ul class="notas">
			<?php
			require('connection/connection.php');

			$query = "SELECT * FROM nota";
			$resultado = mysqli_query($connection, $query);

			while ($fila = mysqli_fetch_array($resultado)) {
				echo "<li>{$fila['nombre_columna']} <a href='actions/delete.php?id={$fila['id']}'>Eliminar</a></li>";
			}

			mysqli_close($connection);
			?>
		</ul>
	</div>
</body>
</html>
