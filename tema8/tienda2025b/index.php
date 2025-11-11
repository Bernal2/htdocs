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
            <h1>Mi MegaSuperTiendaPro</h1>
            <?php
                session_start();
                require_once "funciones.php";
                escribirCantidadCarrito();                
            ?>
        </header>
        <main>
            <div class="container">
            <div class="row">
            <?php
                include "conexion.php";

                $sql = "select * from productos";
                $resultado = $conexion->query($sql);

                while($fila=$resultado->fetch_assoc()){
                    $auxId = $fila["id"];
                    $auxNombre = $fila["nombre"];
                    $auxDescripcion = $fila["descripcion"];
                    $auxPrecio = $fila["precio"];
                    $auxImagen = $fila["imagen"];

                    echo "<div class='col'>";

                    echo "<div class='card' style='width: 18rem;'>";
                    echo "<img src='$auxImagen' class='card-img-top' alt='$auxNombre'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>$auxNombre</h5>";
                    echo "<p class='card-text'>$auxDescripcion <br> <mark style='font-weight: bold;'> $auxPrecio € </mark></p>";
                    echo "<a href='detalle.php?id=$auxId' class='btn btn-primary'>Comprar</a></div></div>";

                    echo "</div>";
                }

            ?>
            </div>
            </div>
        </main>
        <footer>
            Esta es la tienda de los mejores ...
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
