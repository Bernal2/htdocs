<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="nombre" placeholder="Dime el nombre">
    <input type="text" name="ciudad" placeholder="Dime la ciudad">
    <button type="submit">Enviar</button>
</form>
<h2><a href="listarclientes.php">Lista de clientes</a></h2>
    <?php

        include "conexion.php";

        if(isset($_POST["nombre"])){
            $nombre = $_POST["nombre"];
            $ciudad = $_POST["ciudad"];

            $sql = "INSERT INTO clientes (nombre, ciudad) VALUES ('$nombre', '$ciudad');";
            $conexion->query($sql);
        }
        
        

    ?>    
</body>
</html>