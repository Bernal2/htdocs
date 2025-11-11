<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adivina el número entre el 1 y el 10</h1>
    <?php
    //Si aún no han enviado el formulario, inicializo el secreto y el número de intentos
    if(!isset($_POST["numero"])){
        //Pongo los intentos a cero y creo un nuevo secreto aleatorio
        $secreto = random_int(1, 10);
        $numIntentos=0;
        
    } else {
        //Leo el secreto del formulario y el número de intentos
        $secreto = $_POST["secreto"];
        $numIntentos = $_POST["numIntentos"];
        $numero = $_POST["numero"];
        //Incremento el número de intentos
        $numIntentos++;

        //Si el número que ha escrito coincide con el secreto, ha acertado y vuelta a empezar
        if($secreto == $_POST["numero"]){
            echo "Eres un vidente, has acertado el número en $numIntentos intentos. Sigue jugando.";
            $secreto=random_int(1, 10);
            $numIntentos = 0;
            
        } else {
            echo "Has fallado, vuelve a intentarlo.";
            if($secreto < $numero){
                echo "El número a adivinar es menor";
            } else {
                echo "El número a adivinar es mayor";
            }
        }
    }
        

    ?>

    <form action="" method="post">
        <input type="number" name="numero">
        <input type="hidden" name="numIntentos" value="<?php echo $numIntentos ?>">
        <input type="hidden" name="secreto" value="<?php echo $secreto ?>">
        <input type="submit" value="Enviar">
        
    </form>
</body>
</html>