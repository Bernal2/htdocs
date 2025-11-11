<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Examen</h1>
    <form action="" method="post">
        <br>Primer Número: <input type="number" name="primero" />
      <br>Segundo número: <input type="number" name="segundo" />
      <br>Tercer número: <input type="number" name="tercero" />

        <input type="submit" value="Enviar" />

    </form>

    <?php
    if(isset($_POST["primero"])){

    $primero = $_POST["primero"];
    $segundo = $_POST["segundo"];
    $tercero = $_POST["tercero"];
    
    if(($primero < $segundo && $primero < $tercero) && ($segundo < $tercero)){
        echo "$primero , $segundo, $tercero";
        
    } else if(($primero < $segundo && $primero < $tercero) && ($tercero < $segundo)){
        echo "$primero , $tercero, $segundo";

    } else if(($segundo < $primero && $segundo < $tercero) && ($primero < $tercero)){
        echo "$segundo , $primero, $tercero";

    } else if(($segundo < $primero && $segundo < $tercero) && ($tercero < $primero)){
        echo "$segundo , $tercero, $primero";

    } else if(($tercero < $primero && $tercero < $segundo) && ($primero < $segundo)){
        echo "$tercero , $primero, $segundo";

    } else if(($tercero < $primero && $tercero < $segundo) && ($segundo < $primero)){
        echo "$tercero , $segundo, $primero";

    } 

}

    ?>
</body>
</html>