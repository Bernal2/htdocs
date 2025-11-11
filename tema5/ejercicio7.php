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

foreach ($imagenes as $img) {
    echo "<img src='$img' alt='$img'><br>";
}
?>

</body>
</html>