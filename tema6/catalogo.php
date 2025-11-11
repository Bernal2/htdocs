<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Catálogo de ropa</h1>
    <?php
        $nombres = ["Camisa floral", "Pantalón pirata", "Shorts pinzas", "Calcetines"];
        $imagenes = ["camisa.jpg", "pantalon.jpg", "shorts.jpg", "calcetines.jpg"];
        $precios = [39.90, 55.50, 19.90, 9.99];

        echo "<table>";
        $numeroColumnas = 4;
        for($i=0; $i<count($nombres); $i++){

            if($i % $numeroColumnas == 0){
                echo "<tr>";
            }

            //echo "<img src='img/" . $imagenes[$i] . "' height='50'>";
            echo "<td style= 'text-align: center;'>";
            echo "<img src='img/{$imagenes[$i]}' height='50'>";
            echo "<h3 style='margin: 40px'> {$nombres[$i]}</h3>";
            echo "<h2> {$precios[$i]}</h2>";
            echo "</td>";

            if($i % $numeroColumnas == $numeroColumnas -1){
                echo "</tr>";
            }
        }
        echo "</table>";
    ?>
</body>
</html>