<!-- Sistena control de usuario 
formulario: 
    nombre completo
    email
    numero telefonico
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- ========== Bootstrap Icons ========== -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
    <?php
    include("./partials/navbar.html");
    ?>
  </header>
  <main>
    <div class="container h-100" style="padding-top: 4rem;">
      <div class="row justify-content-center align-item-center h-100">
        <div class="cal-12 col-sm-12 col-md-3 mb-3">
          <div class="card">
            <div class="card-body">
              <form action="./function/insert.php" method="post">
                <div class="mb-3">
                  <label class="form-label">Nombre completo</label>
                  <input name="nombre" type="text" class="form-control">
                </div>
                <div class="mb-3">
                  <label class="form-label">Correo electrónico</label>
                  <input name="email" type="email" class="form-control">
                </div>
                <div class="mb-3">
                  <label class="form-label">Teléfono</label>
                  <input name="telefono" type="number" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-9">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Emial</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
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
                          <td><a href="./view/update_form.php?id=<?php echo $fila[ 'id_usuario' ]; ?>"><i class="bi bi-pencil-square text-warning"></i></a></td>
                          <td><a href="./function/delete.php?id=<?php echo $fila[ 'id_usuario' ]; ?>"><i class="bi bi-trash2-fill text-danger"></i></a></td>
                      </tr>
                      <?php $contador++;
                  } ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
</body>

</html>