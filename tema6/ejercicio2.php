<?php
function esPrimo($n) {
$esPrimo = true;
for ($i = 2; $i < $n; $i++) {
if ($n % $i == 0) {
$esPrimo = false;
}
}

if (($n == 0) || ($n == 1)) {
$esPrimo = false;
}
return $esPrimo;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Primo</title>
</head>
<body>
    <h1>Devuelve si el número es primo o no</h1>
    <?php
    if(esPrimo(98) == true){
        echo "Es primo el 98";
    } else{
        echo "No es primo el 98";
    }
    ?>
</body>
</html>