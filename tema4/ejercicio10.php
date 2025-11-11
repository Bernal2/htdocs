<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcula la media de los números introducidos hasta que llegue un cero</h1>
    <?php
    if(!isset($_POST["numero"])){
        $suma=0;
        $cantidad=0;
    } else{
        if($_POST["numero"] != 0){
        $suma = $_POST["suma"] + $_POST["numero"];
        $cantidad = $_POST["cantidad"] + 1;
        } else {
            $media = $_POST["suma"] / $_POST["cantidad"];

            echo "<h2>La media es $media</h2>";
            $suma=0;
            $cantidad=0;
        }
    }
    ?>
    <form action="" method="post">
        <input type="number" name="numero">
        <input type="hidden" name="suma" value="<?php echo $suma ?>">
        <input type="hidden" name="cantidad" value="<?php echo $cantidad ?>">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>