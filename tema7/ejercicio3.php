<?php
session_start();
//Lo que pone abajo en el name es lo que se pone a continuación en el post (numero)
    if(isset($_POST["numero"])){
        $numero = $_POST["numero"];
        if(!isset($_SESSION["suma"])){
            $_SESSION["suma"] = $numero;
            $_SESSION["contador"] = 1;
        } else{
            $_SESSION["suma"] += $numero;
            $_SESSION["contador"]++;
        }
        if($_SESSION["suma"] > 1000){
            $media = $_SESSION["suma"] / $_SESSION["contador"];
            $contador = $_SESSION["contador"];
            $suma = $_SESSION["suma"];
            $_SESSION["suma"] = 0;
            $_SESSION["contador"] = 0;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Suma 1000</h1>

    <form action="" method="post">
    <input type="number" name="numero">
    <input type="submit" value= "Enviar">
    
    <?php
    //Si se ha calculado la media, la imprimo
    if(isset($media)){
        echo "<p>La media es $media, la suma es $suma y la cantidad de numeros es $contador </p>";
    }
    ?>
</body>
</html>