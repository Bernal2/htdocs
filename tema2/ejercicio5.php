<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dime la base y la altura y te digo el area del rectangulo</h1>
    <form action="" method="post">
      <input type="number" name="base" />
      <input type="number" name="altura" />
      <input type="submit" value="Enviar" />
    </form>

    <?php
    if(isset($_POST["base"]) && isset($_POST["altura"])){

    $base = $_POST["base"];
    $altura = $_POST["altura"];

    $area = $base * $altura;

    echo "El área del rectángulo es de $area";

    }

    ?>
</body>
</html>