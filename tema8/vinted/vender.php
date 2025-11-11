<?php
    session_start();
    require_once "conexion.php";
    if(!isset($_SESSION["logged"])){
        header("location:login.php?msj=vender");
    }

    if(isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];
        $categoria = $_POST["categoria"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];
        //El id del usuario vendedor lo recupero de la variable de sesión a la que le he dado el valor en login.php
        $vendedor = $_SESSION["idUsuario"];
        //$_FILES de imagen porque el control del tipo file del formulario se llama imagen
        $imagen = date("Y-m-d - H-i-s"). "-" .$_FILES['imagen']['name'];
        $file_loc = $_FILES['imagen']['tmp_name'];
        move_uploaded_file($file_loc, "uploads/". $imagen);

        $sql = "INSERT INTO productos (nombre, descripcion, precio, categoria, imagen, vendedor, vendido)";
        $sql .= " VALUES ('$nombre', '$descripcion', $precio, '$categoria', '$imagen', $vendedor, 0);";

        $conexion->query($sql);
    }

?>

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
                <h2> <a href="index.php">Comprar</a></h2>
            </div>
        
            <div class="col-7 text-center">
                <h1>Mercadillo</h1>
            </div>
            <div class="col-2">
                <h2>Vender</h2>
            </div>
        </div>
            
        </header>
        <main class="container">
            <h3>Añade aquí tus artículos para darlos a conocer y venderlos rápido</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">

                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" rows="4" cols="60" class="form-control" id="descripcion"></textarea>

                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" name="precio" id="precio" class="form-control">

                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" name="imagen" id="imagen" class="form-control" accept="image/*">

                <label for="categoria" class="form-label">Categoría</label>
                <select class="form-select" name="categoria" id="categoria">
                    <option>Ropa</option>
                    <option>Electrónica</option>
                </select>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <hr>

            <?php
                $vendedor = $_SESSION["idUsuario"];
                $sql = "SELECT * FROM productos WHERE vendedor=$vendedor;";

                $resultado = $conexion->query($sql);

                while($fila = $resultado->fetch_assoc()){
                    $imagen = $fila["imagen"];
                    $imagen = substr($imagen, 0, 4) == "http" ? $imagen : "uploads/" . $imagen;
                    $idArticulo = $fila["id"];
                    echo "<div class='row'>";
                    echo "<div class='col-1'><img src='$imagen' class='img-fluid'></div>";

                    if($fila["vendido"]){
                        echo "<div class='col-6 text-seconadry'> {$fila['nombre']} </div> ";
                    } else{
                        echo "<div class='col-6'> <a href='modificar.php?id=$idArticulo'> {$fila['nombre']} </a> </div> ";
                    }
                    
                    echo "</div>";
                }
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
