<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $op1 = $_POST["op1"];
    $op2 = $_POST["op2"];
    
    $suma = $op1 + $op2;

    echo "La suma de $op1 y $op2 es $suma";

    ?>
</body>
</html>