<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opiniones de clientes</title>
</head>
<body>
    <?php include "conexion.php"; ?>

    <h1>Selecciona tu opinión</h1>

    <form action="opiniones.php" method="POST">
        <label for="nombre">Tu nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>

        <button type="submit" name="opinion" value="feliz">
            <img src="img/carafeliz1.png" width="50" height="50">
        </button>

        <button type="submit" name="opinion" value="regular">
            <img src="img/cararegular.png" width="50" height="50">
        </button>

        <button type="submit" name="opinion" value="enfadado">
            <img src="img/caraenfado.png" width="50" height="50">
        </button>
    </form>

</body>
</html>
