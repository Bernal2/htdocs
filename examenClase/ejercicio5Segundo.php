<?php
    session_start();
    $eleccion = $_GET["tipo"];
    $_SESSION["eleccion"] = $eleccion;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Elige la versión de <?php echo $eleccion; ?> </h1>

    <?php

    $versiones = [
    "Chocolate" => ["Choco con leche", "Choco solo", "Choco largo"],
    "Café" => ["Café solo", "Café con leche", "Cortado"],
    "Infusiones" => ["Té", "Jengibre", "Manzanilla"]
    ];

    $imagenes = [
    "Chocolate" => ["chocoleche.jpg", "chocosolo.jpg", "chocolargo.jpg"],
    "Café" => ["cafesolo.jpg", "cafeconleche.jpg", "cortado.jpg"],
    "Infusiones" => ["te.jpg", "jengibre.jpg", "manzanilla.jpg"]
    ];


    $bebidas = $imagenes[$eleccion];
    $nombres = $versiones[$eleccion];

    echo "<table>";
        for($i = 0; $i < count($bebidas); $i++){
            $aux = $nombres[$i];
            //echo "<tr><td>{$cafes[$i]} <img src= 'img/{$cafes[$i]}'></td></tr>";
            echo "<tr><td>";
            echo "{$nombres[$i]} <img src= 'img/{$bebidas[$i]}' style ='width: 60px'>"; 
            echo "<p><button><a href='ejercicio5Tercero.php?subtipo=$aux'>Pedir</a></button></p>";
            echo "</td></tr>";
        }
        echo "</table>";



    ?>
    
</body>
</html>