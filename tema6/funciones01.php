<?php
function bartSimpson(){
    for($i=0; $i<10; $i++){
        echo "No volveré a lanzarle misiles tierra-aire al profesor<br>";
    }
}


function bartSimpsonConEsteroides($numeroDeVeces){
    for($i=0; $i<$numeroDeVeces; $i++){
        echo "No volveré a lanzarle misiles tierra-aire al profesor<br>";
    }
}


function bartSimpsonPremioNobel($numeroDeVeces, $frase){
    for($i=0; $i<$numeroDeVeces; $i++){
        echo "$frase<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Repetición de frase</h1>
    <?php
    bartSimpson();
    echo "<br>";
    echo "<br>";
    bartSimpsonConEsteroides(20);
    echo "<br>";
    echo "<br>";
    bartSimpsonPremioNobel(30, "No volveré a lanzarle misiles tierra-aire al profesor");
    ?>
</body>
</html>