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
    <title>Insertar producto</title>
</head>
<body>
    <form action="" method="post">
        <br><input type="text" name="nombre" placeholder="Dime el nombre">
        <br><textarea name="descripcion" rows="4" cols="40" placeholder="Escribe la descripción"></textarea>
        <br><input type="number" name="precio" step="0.01" placeholder="Introduce el precio">
        <br><input type="text" name="imagen" placeholder="Introduce la imagen">

        <br><button type="submit">Enviar</button>
    </form>

    <h2><a href="index.php">Lista de productos</a></h2>

    <?php 
        include "../conexion.php";
        if(isset($_POST["nombre"])){
            $nombre = $_POST["nombre"];
            $descripcion = $_POST["descripcion"];
            $precio = $_POST["precio"];
            $imagen = $_POST["imagen"];

            $sql = "INSERT INTO productos (nombre, descripcion, precio, imagen) ";
            $sql .= " VALUES ('$nombre', '$descripcion', $precio, '$imagen');";            
            $conexion->query($sql);
        }        
    ?>

    
</body>
</html>