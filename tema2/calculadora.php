<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Escribe dos números para saber su suma</h1>
    <form action="" method="post">
      <input type="number" name="op1" />
      <input type="number" name="op2" />
      <input type="submit" value="Enviar" />
    </form>

    <?php
    if(isset($_POST["op1"]) && isset($_POST["op2"])){

    $op1 = $_POST["op1"];
    $op2 = $_POST["op2"];

    $suma = $op1 + $op2;

    echo "La suma de $op1 y $op2 es $suma";

    }

    ?>
</body>
</html>