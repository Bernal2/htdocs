<?php
    session_start();
    $_SESSION["contador"]=0;
    header("location:primero.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reinicio</title>
</head>
<body>
    <h1>Contador Reiniciado</h1>
    <p><a href="primero.php">Volver a la página principal</a></p>
</body>
</html>