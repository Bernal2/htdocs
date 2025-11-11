<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar clientes</title>
</head>
<body>
    <?php
        include "conexion.php";

        if(isset($_GET["id"])){
            $id = $_GET["id"];

            $sql = "SELECT * FROM clientes WHERE id=$id;";

            $resultado = $conexion->query($sql);

            $fila = $resultado->fetch_assoc();

            $nombre = $fila["nombre"];
            $ciudad = $fila["ciudad"];


        }
        if(isset($_POST["nombre"])){
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $ciudad = $_POST["ciudad"];

            $sql = "UPDATE clientes SET nombre = '$nombre', ciudad='$ciudad' WHERE id=$id;";
            $conexion->query($sql);
            header("location:listarclientes.php");
        }
    ?>

    <form action="" method="post">
        <input type="text" name="id" value="<?php echo $id;?>" readonly>
        <input type="text" name="nombre" value="<?php echo $nombre;?>">
        <input type="text" name="ciudad" value="<?php echo $ciudad;?>">
        <button type="submit">Enviar</button>


    </form>
    
</body>
</html>