<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabla de Países y Capitales</h1>
    <?php
    $paises=["Espana", "Italia", "Rusia", "Portugal", "Argentina"];
    $capitales=["Madrid", "Roma", "Moscu", "Lisboa", "Buenos Aires"];
    
        echo "<table border='1'>";
    echo "<tr><th>Países</th> <th>Capitales</th> <tr>";

    for($i=0; $i<sizeof($paises); $i++){
        echo "<tr><td>" . $paises[$i] . "</td><td>" . $capitales[$i] . "</td></tr>";
    }
    ?>
</body>
</html>