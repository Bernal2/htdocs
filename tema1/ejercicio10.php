<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Triangulo lleno

    for($i=0; $i<9; $i++){
        for($ii=0; $ii<$i+1; $ii++){
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>";

    //Cuadrado lleno
    for($i=0; $i<9; $i++){
        for($ii=0; $ii<20; $ii++){
            echo "*";
        }
        echo "<br>";
        
    }

    echo "<br>";

    //Rectangulo lleno
    for($i=0; $i<9; $i++){
        for($ii=0; $ii<50; $ii++){
            echo "*";
        }
        echo "<br>";
        
    }
    

    ?>
</body>
</html>