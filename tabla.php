<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $ingles = ["Hello", "One", "Two", "Three"];
    $spanish = ["Hola", "Uno", "Dos", "Tres"];

    echo "<table>";
    for($i=0; $i<4; $i++){
        echo "<tr>";
        echo "<td>";
        echo $ingles[$i];
        echo "</td>";
        echo "<td>";
        echo $spanish[$i];
        echo "</td>";
        echo "</tr>";

    }
    echo "</table>";


    ?>

    <table style="border: 1px solid black">
        <tr>
            <td>Hello</td>
            <td>Hola</td>
        </tr>
        <tr>
            <td>One</td>
            <td>Uno</td>
        </tr>
        <tr>
            <td>Two</td>
            <td>Dos</td>
        </tr>
        <tr>
            <td>Three</td>
            <td>Tres</td>
        </tr>
    </table>


</body>
</html>