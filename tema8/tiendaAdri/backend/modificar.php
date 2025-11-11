<?php
  session_start();
  if(!(isset($_SESSION["logged"]) && $_SESSION["logged"])){
    header("location:login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        include "../conexion.php";

        if(isset($_GET["id"])){
            $id = $_GET["id"];

            $sql = "SELECT * FROM productos WHERE id=$id;";

            $resultado = $conexion->query($sql);

            $fila = $resultado->fetch_assoc();

            $nombre = $fila["nombre"];
            $descripcion = $fila["descripcion"];         
            $precio = $fila["precio"];
            $imagen = $fila["imagen"];   
        }

        if(isset($_POST["nombre"])){
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $descripcion = $_POST["descripcion"];         
            $precio = $_POST["precio"];
            $imagen = $_POST["imagen"]; 

            $sql = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio=$precio, imagen='$imagen' WHERE id=$id;";
            $conexion->query($sql);
            header("location:index.php");
        }
    ?>

    <form action="" method="post" class="p-3 border rounded" style="max-width: 400px; margin: auto;">
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" id="id" name="id" class="form-control" value="<?php echo $id;?>" readonly>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $nombre;?>">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" value="<?php echo $descripcion;?>">
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" id="precio" name="precio" class="form-control" value="<?php echo $precio;?>">
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="text" id="imagen" name="imagen" class="form-control" value="<?php echo $imagen;?>">
    </div>
    <button type="submit" class="btn btn-primary w-100">Enviar</button>
</form>
     
</body>
</html>