<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digitator</h1>
    <form action="" method="post">
        <input type="number" name="numero">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if(isset($_POST["numero"])){
        $numero = abs($_POST["numero"]);
        $numeroOriginal = $numero;
        $numeroDigitos = 1;
        while($numero >1 ){
            $numero = $numero / 10;
            if($numero>1){
                $numeroDigitos++;
            }
        }
        echo "El numero de dígitos del $numeroOriginal es $numeroDigitos";

        $cadenaNumero = "" . abs($_POST["numero"]);
        $numeroDigitos = strlen($cadenaNumero);

        echo "<br>El numero de dígitos del $numeroOriginal es $numeroDigitos";
    }
    ?>
</body>
</html>