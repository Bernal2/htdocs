<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombres=["María", "Benito", "Juan", "Rosa", "Francisca"]; 

    $apellidos=["Sánchez Martínez", "López Pérez", "García Jover", "Mora Tus", "Salta Martínez"]; 


    echo "<table border='1'>";
    echo "<tr><th>Nombres</th> <th>Apellidos</th> <tr>";

    for($i=0; $i<sizeof($nombres); $i++){
        echo "<tr><td>" . $nombres[$i] . "</td><td>" . $apellidos[$i] . "</td></tr>";
    }
    echo "</table>";


    ?>
</body>
</html>