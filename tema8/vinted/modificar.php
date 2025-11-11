<?php
session_start();
if(!isset($_SESSION["logged"])){
        header("location:login.php?msj=vender");
    }
    if(isset($_GET["id"])){
        require_once "conexion.php";
        $idArticulo = $_GET["id"];

        $sql = "SELECT * from productos where id=$idArticulo;";
        $resultado = $conexion->query($sql);

        $fila = $resultado->fetch_assoc();

        $nombre = $fila["nombre"];
        $descripcion = $fila["descripcion"];
        $precio = $fila["precio"];
        $categoria = $fila["categoria"];
        $vendedor = $fila["vendedor"];
        $imagen = $fila["imagen"];
    }

    if(isset($_POST["nombre"])){
        //Primero leo los datos del formulario
        $idArticulo = $_POST["idArticulo"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $precio = $_POST["precio"];
        $categoria = $_POST["categoria"];
        //El id del vendedor lo recupero de la variable de sesión que creé en login.php
        $vendedor = $_SESSION["idUsuario"];
        
        //Si el ususario ha insertado una nueva imagen en el formulario, la subo al servidor y genero un nombre
        //anadiendo la fecha y la hora de la subida para evitar colisiones
        if(isset($_FILES["imagen"]) && $_FILES["imagen"]["name"] != ""){
            $imagen = date("Y-m-d - H-i-s"). "-" .$_FILES['imagen']['name'];
        $file_loc = $_FILES['imagen']['tmp_name'];
        move_uploaded_file($file_loc, "uploads/". $imagen);
        } else{
            //Si el usuario no ha subido una nueva imagen, mantengo la anterior
            $imagen = $_POST["imagenActual"];
        }
        //Genero la consulta sql a partir de los datos anteriores
        $sql = "UPDATE productos SET $nombre = '$nombre', descripcion= '$descripcion', precio = $precio, categoria = '$categoria', imagen= '$imagen' vendedor = $vendedor, WHERE id=$idArticulo;";

        //Ejecuto la consulta y vuelvo a la página de venta
        require_once "conexion.php";
        $conexion->query($sql);
        header("location:vender.php");

        
    }

?>


<!doctype html>
<html lang="en">
    <head>
        <title>Modificar</title>
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
                <h2><a href="vender.php">Vender</a></h2>
            </div>
        </div>
            
        </header>
        <main class="container">
                <h3>Modificar artículo</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idArticulo" value="<?php echo $idArticulo;?>">

                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre;?>">

                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" rows="4" cols="60" class="form-control" id="descripcion"><?php echo $descripcion;?></textarea>

                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" name="precio" id="precio" class="form-control" value="<?php echo $precio;?>">

                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" name="imagen" id="imagen" class="form-control" accept="image/*">
                <input type="hidden" name="imagenActual" value="<?php echo $imagen;?>">
                <img src="uploads/<?php echo $imagen;?>" style="width: 50px">

                <label for="categoria" class="form-label">Categoría</label>
                <select class="form-select" name="categoria" id="categoria">
                    <option <?php if($categoria == "Ropa") echo "selected"; ?>>Ropa</option>
                    <option<?php if($categoria == "Electrónica") echo "selected"; ?>>Electrónica</option>
                </select>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <hr>
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
