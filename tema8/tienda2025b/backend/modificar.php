<?php
    session_start();
    if(!(isset($_SESSION["logged"]) && $_SESSION["logged"])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar productos</title>
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
    
    <form action="" method="post">
        <input type="text" name="id" value="<?php echo $id;?>" readonly>
        <input type="text" name="nombre" value="<?php echo $nombre;?>">
        <textarea name="descripcion" rows="4" cols="40"><?php echo $descripcion ?></textarea>
        <input type="number" name="precio" value="<?php echo $precio;?>">
        <input type="text" name="imagen" value="<?php echo $imagen;?>">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>