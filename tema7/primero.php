<?php
    session_start();
    if(isset($_SESSION["contador"])){
        $_SESSION["contador"]++;
    } else{
        $_SESSION["contador"]=1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas (cutre)</title>
</head>
<body>
    <h1>Supercontador MegaPro</h1>
    <p>Número de veces que has visitado la página: <?php echo $_SESSION["contador"] ?> </p>
    <form action="reiniciar.php"><input type="submit" value="Reiniciar"></form>
    <br>
    <button><a href="reiniciar.php">Reiniciar</a></button>
</body>
</html>