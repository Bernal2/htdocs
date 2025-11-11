<?php
    function multiplos3($n1, $n2){
        for($i=$n1; $i<$n2; $i++){
            if($i % 3 == 0){
                echo "$i<br>";
            }
        }
    }

    function multiplos3Ar($n1, $n2){
        $numeros = [];
        for($i=$n1; $i<$n2; $i++){
            if($i % 3 == 0){
                $numeros[]=$i;
            }
        }
        return $numeros;
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
    <h1>Funciones</h1>
    <?php
    $numero1=7;
    $numero2=80;
    ?>

    <h2>Múltiplos de 3 en el rango entre <?php echo $numero1;?> y <?php echo $numero2; ?></h2>

    <?php
        multiplos3($numero1, $numero2);

        $misNumeros = multiplos3Ar($numero1, $numero2);

        foreach($misNumeros as $clave => $valor){
            echo "$valor, <br>";
        }
    ?>

    <!-- Para el examen, Hacer ejercicio que sume las cifras de un numero y te diga si es multiplo de 3. 99 es porque 18 es multiplo de 3 -->
</body>
</html>