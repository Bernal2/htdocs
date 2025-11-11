<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dime la frase y cuantas veces se repite</h1>
    <form action="" method="post">
      <br>Escribe la frase<input type="text" name="frase" />
      <br>Escribe el número<input type="number" name="numero" />
      <input type="submit" value="Enviar" />
    </form>

    <?php
    if(isset($_POST["frase"]) && isset($_POST["numero"])){

    $frase = $_POST["frase"];
    $numero = $_POST["numero"];

    for($i=0; $i<$numero; $i++){
        echo "$i- $frase" . "<br>";

    }

    

    }

    ?>
</body>
</html>