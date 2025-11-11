<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$frase = "Dábale arroz a la zorra el abad";
$palabras = explode(" ", $frase);

foreach ($palabras as $palabra) {
    echo "<p>$palabra</p>";
}
?>

</body>
</html>