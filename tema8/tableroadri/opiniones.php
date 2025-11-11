<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias por tu opinión</title>
</head>
<body>
    <?php
    include "conexion.php";

    if (isset($_POST['opinion']) && isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $opinion = $_POST['opinion'];
        $fecha = date("Y-m-d");
        $hora = date("H:i:s");

        $sql = "INSERT INTO opiniones (nombre, fecha, hora, opinion) 
                VALUES ('$nombre', '$fecha', '$hora', '$opinion')";
        $conexion->query($sql);

        echo "<h1>Gracias por su opinión, $nombre</h1>";

        $resultado = $conexion->query("SELECT opinion, COUNT(*) AS cantidad FROM opiniones GROUP BY opinion");

        echo "<h2>Recuento de opiniones:</h2>";
        echo "<ul>";
        if ($resultado->num_rows > 0) {
            echo "<ul>";
        foreach ($resultado as $fila) {
            echo "<li>{$fila['opinion']}: {$fila['cantidad']}</li>";
        }
            echo "</ul>";
        } else {
            echo "<p>No hay opiniones registradas todavía.</p>";
        }
    }
    ?>
</body>
</html>
