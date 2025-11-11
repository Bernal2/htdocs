<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Multiplicador</h1>
    <form action="" method="post">
        <input type="number" name="numeroTabla">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if(isset($_POST["numeroTabla"])){
        $numeroTabla=$_POST["numeroTabla"];
    
 
        echo "<table border='1'>";
        for($numero=1;$numero<11;$numero++){
            $resultado = $numero*$numeroTabla;
            echo"<tr><td>$numeroTabla</td> <td>X</td> <td>$numero</td> <td>=</td> <td style='text-align: right;'>$resultado</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>