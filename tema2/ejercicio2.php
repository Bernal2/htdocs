<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dime los euros y te digo cuantas pesetas son</h1>
    <form action="" method="post">
      <input type="number" name="euros" />
      <input type="submit" value="Enviar" />
    </form>


    <?php

    if(isset($_POST["euros"])){

    $euros = $_POST["euros"];

    $pesetas = $euros * 166.386;

    echo "$euros euros son $pesetas pesetas";

    }


    ?>
</body>
</html>