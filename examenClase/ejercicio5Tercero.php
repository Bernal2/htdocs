<?php
    session_start();
    $eleccion1 = $_SESSION["eleccion"];
    $eleccion2 = $_GET["subtipo"];
    $_SESSION["eleccion"] = $eleccion2;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Elección de azúcar</h1>

    <form action="cuarta.php" method="post">
        <input type="radio" name="azucar" value="nada">Nada<br>
        <input type="radio" name="azucar" value="medio">Medio<br>
        <input type="radio" name="azucar" value="mucho">Mucho<br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>