<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include "libreria.php";

        echo letraEmpieza("Cualquier cosa");

        echo intermedioArray(1, 2, 3) . "<br>";
        echo intermedioArray(1, 3, 2) . "<br>";
        echo intermedioArray(2, 1, 3) . "<br>";
        echo intermedioArray(2, 3, 1) . "<br>";
        echo intermedioArray(3, 2, 1) . "<br>";
        echo intermedioArray(3, 1, 2) . "<br>";

        echo compruebaLongitud("perro", 2);
        echo compruebaLongitud("perro", 20);

        echo numeroEnMedio(33, 22). "<br>";

    ?>
</body>
</html>