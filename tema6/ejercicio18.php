<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Ejercicio 18: Convertir un número decimal a binario

// Número decimal a convertir
$decimal = 42;

// Conversión con función propia
function decimalABinario($num) {
    $binario = "";
    while ($num > 0) {
        $binario = ($num % 2) . $binario;
        $num = intdiv($num, 2); // división entera
    }
    return $binario === "" ? "0" : $binario;
}

// Usando la función propia
echo "El número $decimal en binario es: " . decimalABinario($decimal) . "<br>";
    ?>
</body>
</html>