<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fila1 = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];
    $fila2 = ["E. S.", "IAG", "E. C.", "EC", "DES"];
    $fila3 = ["ES", "IAG", "EC", "EC", "DES"];
    $fila4 = ["DI", "EC", "ES", "ES", "DES"];
    $fila5 = ["DI", "DES", "SOS", "ES", "ES"];
    $fila6 = ["DI", "DI", "EMP", "ES", "EC"];
    $fila7 = ["DI", "DI", "EMP", "ES", "PROY"];

    echo "<table>";
    echo "<tr>";
    for($i=0; $i<sizeof($fila1); $i++){
        echo "<td>". $fila1[$i] . "</td>";
    }
    echo "</tr>";

    echo "<tr>";
    for($i=0; $i<5; $i++){
        echo "<td>". $fila2[$i] . "</td>";
    }
    echo "</tr>";

    echo "<tr>";
    for($i=0; $i<5; $i++){
        echo "<td>". $fila3[$i] . "</td>";
    }
    echo "</tr>";

    echo "<tr>";
    for($i=0; $i<5; $i++){
        echo "<td>". $fila4[$i] . "</td>";
    }
    echo "</tr>";

    echo "<tr>";
    for($i=0; $i<5; $i++){
        echo "<td>". $fila5[$i] . "</td>";
    }
    echo "</tr>";

    echo "<tr>";
    for($i=0; $i<5; $i++){
        echo "<td>". $fila6[$i] . "</td>";
    }
    echo "</tr>";

    echo "<tr>";
    for($i=0; $i<5; $i++){
        echo "<td>". $fila7[$i] . "</td>";
    }
    echo "</tr>";

    echo "</table>";

    ?>
</body>
</html>