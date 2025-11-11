<?php
    function inverso($frase){
        $arrayCadena = explode(" ", $frase);
        for($i = sizeof($arrayCadena) -1; $i>=0; $i--){
            echo $arrayCadena[$i] . " ";
        }
    }

    function inversoConEsteroides($frase){
        $arrayCadena = explode(" ", $frase);
        $arrayADevolver = [];
        for($i = sizeof($arrayCadena) -1; $i>=0; $i--){
            //echo $arrayCadena[$i] . " ";
            $arrayADevolver[] = $arrayCadena[$i];
            return $arrayADevolver;
        }
    }


    function inversoConEsteroidesCadena($frase){
        $arrayCadena = explode(" ", $frase);
        $cadenaADevolver = " ";

        for($i = sizeof($arrayCadena) -1; $i>=0; $i--){
            //echo $arrayCadena[$i] . " ";
            $cadenaADevolver = $cadenaADevolver . $arrayCadena[$i] . " ";
            
        }
        return $cadenaADevolver;
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
    <?php

    //puerto por defecto de http es el 21 
        $cadena = "Esta sí ha sido una mañana productiva";
        $arrayCadena = explode(" ", $cadena);
        for($i = sizeof($arrayCadena) -1; $i>=0; $i--){
            echo $arrayCadena[$i] . " ";
        }

        inverso("Dábale arroz a la zorra el abad");

        $miArray = inversoConEsteroides("Cualquier tiempo pasado fue anterior");
        foreach($miArray as $palabra){
            echo "$palabra ";
        }
        echo inversoConEsteroidesCadena("Solo los genios somos modestos");
    ?>
</body>
</html>