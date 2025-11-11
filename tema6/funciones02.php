<?php
    function suma($numero1, $numero3){
        $resultadoSuma = $numero1 + $numero3;
        return $resultadoSuma;
    }

    function resta($numero1, $numero3){
        $resultadoResta = $numero1 - $numero3;
        return $resultadoResta;
    }

    function multiplicacion($numero1, $numero3){
        $resultadoMultiplicacion = $numero1 * $numero3;
        return $resultadoMultiplicacion;
    }

    function division($numero1, $numero3){
        $resultadoDivision = $numero1 / $numero3;
        return $resultadoDivision;
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
    <h1>Operaciones de dos números con funciones</h1>
    <?php
        echo "<h3><br>El resultado de sumar 100 y 300 es " . suma(100,300) . "</h3><br><br>";

        $resultadoDeLaSuma = suma(37, 331);

        echo "<h3>El resultado de sumar 37 y 331 es $resultadoDeLaSuma </h3><br><br>";
        
        echo "<h3>El resultado de sumar 37 y 331 es " . suma(37, 331) . "</h3><br><br>";

        echo "<h3>El resultado de restar 37 y 331 es " . resta(37, 331) . "</h3><br><br>";

        echo "<h3>El resultado de multiplicar 37 y 331 es " . multiplicacion(37, 331) . "</h3><br><br>";

        echo "<h3>El resultado de dividir 37 y 331 es " . division(37, 331) . "</h3><br><br>";



    ?>
</body>
</html>