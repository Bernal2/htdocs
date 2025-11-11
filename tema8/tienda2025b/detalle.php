<?php
    session_start();
    if(isset($_GET["id"])){
        include "conexion.php";
        $id=$_GET["id"];

        $sql = "SELECT * FROM productos WHERE id=$id";
        $resultado = $conexion->query($sql);
        $fila = $resultado->fetch_assoc();

        $nombre = $fila["nombre"];
        $descripcion = $fila["descripcion"];         
        $precio = $fila["precio"];
        //$imagen = $fila["imagen"]; 
        $auxImagen = $fila["imagen"];
        $auxImagen = (substr($auxImagen,0,4) == "http") ? $auxImagen : "img/$auxImagen";        
    }
    if(isset($_POST["idarticulo"])){
        //Si no existe la variable de sesión "carrito", la creo como un array vacío  
        if(!isset($_SESSION["carrito"])){                      
            $_SESSION["carrito"] = [];            
        }
        //leo la variable de sesión del carrito. Seguro que ya existe porque más arriba
        //la he creado si no existía. Es un array asociativo en el que pongo el id y la cantidad
        $carrito = $_SESSION["carrito"];      
        //Leo los valores que el usuario ha escrito en el formulario  
        $idArticulo = $_POST["idarticulo"];
        $cantidad = $_POST["cantidad"];

        //Si en el carrito ya hay una cantidad de este artículo, incremento esa cantidad        
        if(isset($carrito[$idArticulo])){
            $carrito[$idArticulo] += $cantidad;
        //Si el artículo aún no está en el carrito lo añado
        }else{
            $carrito[$idArticulo] = $cantidad;
        }
        //Actualizo la variable de sesión con los nuevos datos
        $_SESSION["carrito"] = $carrito;
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $nombre;?></title>
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

            <?php
                require_once "funciones.php";
                escribirCantidadCarrito();                
            ?>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <?php
                        echo "<div class='col-4'><img src='$auxImagen' class='img-fluid' alt='$nombre'></div>";
                        echo "<div class='col-4'><h1>$nombre</h1><p>$descripcion</p></div>";
                        echo "<div class='col-4 text-center' style='border: solid 1px grey;'><h2>$precio €</h2>";
                        echo "<form action='' method='post'>";
                        echo "<input type='hidden' name='idarticulo' value='$id'>";
                        echo "<input type='hidden' name='nombre' value='$nombre'>";
                        echo "<input type='hidden' name='imagen' value='$auxImagen'>";
                        echo "<input type='number' name='cantidad' value='1'>";
                        echo "<button type='submit'>Carrito</button></form></div>";
                    ?>
                </div>
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
