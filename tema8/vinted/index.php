<!doctype html>
<html lang="en">
    <head>
        <title>Mercadillo</title>
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
        <header class="container">
            <div class="row">
            <div class="col-2";>
                <h2>Comprar</h2>
            </div>
        
            <div class="col-7 text-center">
                <h1>Mercadillo</h1>
            </div>
            <div class="col-2">
                <h2> <a href="vender.php">Vender</a></h2>
            </div>
        </div>
            
        </header>
        <main class="container">
            <?php
                session_start();
                if(isset($_SESSION["idUsuario"])){
                    $idUsuario = $_SESSION["idUsuario"];
                $sql = "SELECT * FROM productos WHERE vendedor != $idUsuario;";
                } else{
                    $sql = "SELECT * FROM productos";
                    echo "<div class='text-center style ='font-size: 50px; border:1px dotted grey;'>Regístrate para vender y comprar.<br>";
                    echo "<a href='registro.php'>Registro</a><br><a href='login.php'>Login</a></div>";
                }
                require_once "conexion.php";
                $resultado = $conexion->query($sql);

                echo "<div class='row'>";
                while($fila = $resultado->fetch_assoc()){
                    echo "<div class='col-3'>";
                    $imagen = $fila["imagen"];
                    $imagen = substr($imagen, 0, 4) == "http" ? $imagen : "uploads/" . $imagen;
                    echo "<img src='$imagen' class='img-fluid'>";
                    $nombre = $fila["nombre"];
                    echo "<p>$nombre</p>";
                    echo "<p>{$fila['precio']}</p>";
                    echo "</div>";
                }
                echo "</div>";
                
            ?>
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
