<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Partidos y Resultados de la Última Jornada</h1>
    <?php

    $partidos = ["Espanyol - Valencia", "Athletic - Girona", "Sevilla - Villareal", "Levante - Real Madrid", "Getafe - Alaves", "Real Sociedad - Mallorca", "Atlético de Madrid - Rayo Vallecano", "Osasuna - Elche", "Real Oviedo - Barcelona"];
    $resultados = ["2-2", "1-1", "1-2", "1-4", "1-1", "1-0", "3-2", "1-1", "1-3"];

    for($i=0; $i<sizeof($partidos); $i++){
        echo "<p>" . $partidos[$i] . " " . $resultados[$i] . "</p>";
    }
    ?>
</body>
</html>