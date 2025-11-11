<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php
        $nombres =["patatas", "lechugas", "tomates"];
        $precios = [3,2,5];

        echo "<div class='row'>";
        for($i=0; $i<count($nombres); $i++){
            $auxNombre = $nombres[$i];
            $auxPrecio = $precios[$i];
            echo "<div class='col-6'>";
            echo "<img src='img/$auxNombre.jpg'>";
            echo "<p>$auxNombre</p>";
            echo "<p>{$precios[$i]}</p>";
            echo "</div>";
        }
        echo "</div>";
    ?>
    </div>
</body>
</html>