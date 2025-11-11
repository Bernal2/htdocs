<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabla de Alumnos y sus Notas</h1>
    <?php
    $alumnos = ["Ana", "Luis", "Carlos", "María", "Sofía"];
    $notas=[5, 4, 7, 8, 10];

    echo "<table border='1'>";
    echo "<tr><th>Alumno</th> <th>Notas</th> <tr>";

    for($i=0; $i<sizeof($alumnos); $i++){
        echo "<tr><td>" . $alumnos[$i] . "</td><td>" . $notas[$i] . "</td></tr>";
    }


    ?>

</body>
</html>