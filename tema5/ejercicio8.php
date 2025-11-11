<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$imagenes = ["img1.jpg", "img2.jpg", "img3.jpg", "img4.jpg", "img5.jpg"];

echo "<table border= solid black 1px>";
foreach ($imagenes as $img) {
    echo "<tr>";
    echo "<td><img src='$img' alt='$img'></td>";
    echo "<td>$img</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>