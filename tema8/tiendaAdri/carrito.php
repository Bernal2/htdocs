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
            <h2>Mi MegaSuperTiendaPro</h2>
        </header>
        <main>
            <div class="container">
                <h1>Carrito de la compra</h1>
                <?php
                    session_start();
                    //Ahora sí necesito conectar con la base de datos
                    require_once("conexion.php");
                    //Compruebo si existe la variable de sesión carrito
                    if(isset($_SESSION["carrito"])){      
                        $carrito = $_SESSION["carrito"];

                        $consulta = "SELECT * FROM productos WHERE ";
                        //Construyo una consulta para que me devuelva todos los productos cuyo id esté en el carrito
                        foreach($carrito as $clave=>$valor){
                            $consulta .= " id=$clave OR";
                        }
                        //Quito el OR final que me sobra
                        $consulta = substr($consulta, 0, -3);
                        $resultado = $conexion->query($consulta);
                        $total = 0;
                        while($fila = $resultado->fetch_assoc()){
                            echo "<img src='{$fila["imagen"]}' style='width:50px'>{$fila['id']}.";
                            echo "{$fila['nombre']}........ {$carrito[$fila["id"]]} x {$fila["precio"]}€ <br>";
                            $total += $carrito[$fila["id"]] * $fila["precio"];
                        }
                        echo "<h2>Total.....$total €";

                                        
                    }else{
                        echo "el carrito está vacío";
                    }
                ?>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
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
