<?php
    session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafetera</title>
</head>
<body>
    <h1>Elige tu café</h1>
    <?php
        $bebidas = ["cafe1.jpg", "cafe2.jpg", "te.jpg"];
        $nombres = ["Café", "Chocolate", "Infusiones"];
        echo "<table>";
        for($i = 0; $i < count($bebidas); $i++){
            $aux = $nombres[$i];
            //echo "<tr><td>{$cafes[$i]} <img src= 'img/{$cafes[$i]}'></td></tr>";
            echo "<tr><td>";
            echo "{$nombres[$i]} <img src= 'img/{$bebidas[$i]}' style ='width: 60px'>"; 
            echo "<p><button><a href='ejercicio5Segundo.php?tipo=$aux'>Pedir</a></button></p>";
            echo "</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>