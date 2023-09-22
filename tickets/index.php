<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
        <?php include 'includes/header.php'; ?>
    </header>
    <main>
        <div class="container h-100" style="padding-top: 15rem;">
            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <h2>Sistema de Tickets para la Gestión de Incidencias</h2>
                    <p>Nuestra plataforma proporciona una solución eficaz para gestionar incidencias y problemas de
                        manera organizada.</p>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                        <form action="./auth/login.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="email" placeholder="email">
                            <label>Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" placeholder="password">
                            <label>Password</label>
                        </div>

                            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    <?php // include 'includes/footer.php'; ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
            </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
            </script>
</body>

</html>