<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
        if(isset($_POST["numero"])){
            $numero = $_POST["numero"];
            $rango = $_POST["rango"];
            $diferencia = $rango - $numero;
            $intentos = $_POST["intentos"] + 1;
            $diferenciaTotal = abs($_POST["diferenciaTotal"]) + abs($diferencia);
            $diferenciaMedia = $diferenciaTotal / $intentos;
            
            if($numero == $rango){

            echo "Has acertado el número. El valor del rango es $numero";

        } else {
            
            echo "Has fallado por $diferencia";
        }

        echo "<br>LLevas $intentos intentos y una diferencia total de $diferenciaTotal. Tu diferencia media es $diferenciaMedia";

    } else {
        $intentos =0;
        $diferenciaTotal = 0;
    }

    ?>

    <h1>Dime qué número está en la barra entre el 1 y el 100</h1>
    <form action="" method="post">
        <input type="number" name="numero">
        <input type="range" name="rango" min="1" max="100" value="<?php echo random_int(1, 100) ?>">
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>">
        <input type="hidden" name="diferenciaTotal" value="<?php echo $diferenciaTotal; ?>">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>