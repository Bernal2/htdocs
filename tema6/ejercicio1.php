<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Números capicúas</h1>
    <?php
    

    function esCapicua($n) {
        $miArray = str_split($n); //está haciendo un array con los numeros

        //inicialmente es capicua y empiezo por la posicion 0
        $esCapicua = true;
         
        $posicion=0;

        //Si en algún momento no coincide algún número, ya no es capicua y acabo el bucle
        while($esCapicua && $posicion<= sizeof($miArray)/2){
            //En el primer paso, comparo la posición 0 del array con la última
            //En las sucesivas, la segunda con la penúltima, la tercera con la antepenúltima
            if($miArray[$posicion] != $miArray[sizeof($miArray) - 1 - $posicion]){
                $esCapicua = false;
            }
            $posicion++;
        }
        return $esCapicua;
    }


    $numero = 1234442;

    if(esCapicua($numero)){
        echo "El número $numero es capicua";
    } else {
        echo "El número $numero no es capicua";
    }
    

    $numero = 230032;
    
    if(esCapicua($numero)){
        echo "<br>El número $numero es capicua";
    } else {
        echo "<br>El número $numero no es capicua";
    }
    ?>
</body>
</html>