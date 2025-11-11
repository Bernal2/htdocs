<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cálculo del salario semanal</h1>
    <form action="" method="post">
      <br>Lunes: <input type="number" name="lunes" />
      <br>Martes: <input type="number" name="martes" />
      <br>Miercoles: <input type="number" name="miercoles" />
      <br>Jueves: <input type="number" name="jueves" />
      <br>Viernes: <input type="number" name="viernes" />
      <input type="submit" value="Enviar" />
    </form>

    <?php
    if(isset($_POST["lunes"])){

    $lunes = $_POST["lunes"];
    $martes = $_POST["martes"];
    $miercoles = $_POST["miercoles"];
    $jueves = $_POST["jueves"];
    $viernes = $_POST["viernes"];

    $totalHoras = $lunes + $martes + $miercoles + $jueves + $viernes;
    $salario = $totalHoras * 12;

    echo "<h2>El salario semanal es de $salario €";

    }

    ?>
</body>
</html>