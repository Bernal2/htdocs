<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include "conexion.php";

        $sql = "SELECT nombre, ciudad FROM clientes WHERE id=2";
        $resultado = $conexion->query($sql);

        $fila = $resultado ->fetch_assoc();

        $nombre = $fila["nombre"];
        $ciudad = $fila["ciudad"];

        echo "El nombre y la ciudad del usuario con id=2 es $nombre de $ciudad";


    ?>
</body>
</html>