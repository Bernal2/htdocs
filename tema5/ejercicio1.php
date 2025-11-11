<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Alumnos desordenada</h1>
    <?php
$alumnos = ["Ana", "Luis", "Carlos", "María", "Sofía"];
echo "<ul>";
foreach ($alumnos as $alumno) {
    echo "<li>$alumno</li>";
}
echo "</ul>";
?>

</body>
</html>