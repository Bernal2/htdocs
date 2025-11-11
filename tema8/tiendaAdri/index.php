<!doctype html>
<html lang="es">
<head>
    <title>Mi Mega Super Tienda Pro</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />
</head>

    <body class="bg-light">
    <header class="bg-dark text-white text-center py-4 mb-4 shadow">
        <h1>🛒 Mi Mega Super Tienda Pro</h1>
        <p class="mb-0">Los mejores productos al mejor precio</p>
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

    <footer class="bg-dark text-white text-center py-3 mt-5">
        © 2025 Mi Mega Super Tienda Pro — Los mejores relojes del mercado
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
