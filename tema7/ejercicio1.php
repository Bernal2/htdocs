<?php
session_start();
 
// Si me envían un número desde el formulario
if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];
 
    // Si aún no existe la variable de sesión suma, la creo con el valor número
    if (!isset($_SESSION["suma"])) {
        $_SESSION["suma"] = $numero;
        $_SESSION["cantidadNumeros"] = 1;
 
    // Si ya existe la variable de sesión suma
    } else {
        // Si me han enviado un número positivo, sigo sumando y contando
        if ($numero > 0) {
            $_SESSION["suma"] += $numero;
            $_SESSION["cantidadNumeros"]++;
 
        // Si envían un número negativo o cero, calculo la media
        } else {
            $media = $_SESSION["suma"] / $_SESSION["cantidadNumeros"];
            // Reinicio las variables para un nuevo cálculo
            $_SESSION["suma"] = 0;
            $_SESSION["cantidadNumeros"] = 0;
        }
    }
}
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media de números</title>
</head>
<body>
    <h1>Envía números para hacer la media</h1>
    <h3>Para parar, envía un número negativo o cero</h3>
 
    <form action="" method="post">
        Manda un número: <input type="number" name="numero" required>
        <input type="submit" value="Enviar">
    </form>
 
    <?php
    // Si se ha calculado la media, la imprimo
    if (isset($media)) {
        echo "<p>La media es $media</p>";
    }
    ?>
</body>
</html>