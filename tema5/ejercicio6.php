<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sede de los últimos 5 Eurobaskets y su campeón</h1>

    <?php
$eurobasket = ["Alemania 2022" => "España", "Turquía 2017"  => "Eslovenia", "Francia 2015"  => "España", "Lituania 2011" => "España", "Polonia 2009"  => "España"];

foreach ($eurobasket as $sede => $campeon) {
    echo "<p><span style='color:black'>$sede</span>: <span style='color:green;'>$campeon</span></p>";
}
?>

</body> 
</html>