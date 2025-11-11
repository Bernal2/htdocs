<?php
    require_once"conexion.php";
    if(isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        //Compruebo si el nombre o el email ya están en la base de datos
        $sql = "SELECT * FROM users WHERE username = '$nombre' or email='$email'";
        
        $resultado = $conexion->query($sql);

        //Si ya están, informo del error
        if($resultado->num_rows>0){
            header("location:registro.php?error=1");
        }

        $sql = "INSERT INTO users (username, password, email) VALUES ('$nombre', '$password', '$email')";
        $conexion->query($sql);

        header("location:login.php?msj=registrado");
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <h2>Mercadillo</h2>
        </header>
        <main class="container">
            <h1>Registro de usuarios</h1>

            <?php
                if(isset($_GET["error"])){
                    echo "El usuario o email no son válidos o ya estan registrados";
                }
            ?>
            <form action="" method="post">
                <label for="nombre" class="label-form">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" require>
                <label for="email" class="label-form">Email:</label>
                <input type="email" id="email" name="email" class="form-control" require>
                <label for="password" class="label-form">Password:</label>
                <input type="password" id="password" name="password" class="form-control" require>
                <button type="submit" class="btn">Enviar</button>
            </form>

            <p> <a href="login.php">Ir al login</a></p>
        </main>
        <footer>
            
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
