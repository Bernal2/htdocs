<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $alumnos = ["Ángela", "Jaime", "Javi", "David", "Alejandro", "Crsitian"];

        shuffle($alumnos);

        foreach($alumnos as $clave => $valor){
            echo "<br>$valor";
        }
        ?>
</body>
</html>