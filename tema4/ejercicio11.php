<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Haz una tablita de cuadrados y cubos de un número</h1>
    <form action="" method="post">
        <input type="number" name="numero">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if(isset($_POST["numero"])){
        $numero=$_POST["numero"];
    
        echo "<br><table border='1'>";
        echo "<tr><th style= 'padding:10px'>Número</th><th style= 'padding:10px'>Cuadrado</th><th style= 'padding:10px'>Cubo</th></tr>";

        for($i=0; $i<=5; $i++){
            $n = $numero + $i;
            $cuadrado = $n*$n;
            $cubo = pow($n, 3);
            echo"<tr><td style='text-align:center'>$n</td> <td style='text-align:center'>$cuadrado</td> <td style='text-align:center'>$cubo</td></tr>";
        }
        echo "</table>";

    }
    
    ?>
</body>
</html>