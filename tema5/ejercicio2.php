<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Países con sus Capitales</h1>
    <?php
    $paises=["Espana", "Italia", "Rusia", "Portugal", "Argentina"];
    $capitales=["Madrid", "Roma", "Moscu", "Lisboa", "Buenos Aires"];
    
        for($i=0; $i<sizeof($paises); $i++){
            echo "<p><span style='color:black'>" . $paises[$i] . "</span> - <span style='color:red'>" . $capitales[$i] . "</span></p>";
        }
    ?>
</body>
</html>