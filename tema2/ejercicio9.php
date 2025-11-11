<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cálculo del volumen de un cono</h1>
    <form action="" method="post">
      <br>Altura: <input type="number" name="altura" />
      <br>Radio: <input type="number" name="radio" />
      <input type="submit" value="Enviar" />
    </form>

    <?php
    if(isset($_POST["altura"], $_POST["radio"])){

    $altura = $_POST["altura"];
    $radio = $_POST["radio"];

    $volumen = 3.1415 * $radio * $radio * $altura * (1/3);

    echo "<h2>El volumen del cono es de $volumen";

    }

    ?>
</body>
</html>