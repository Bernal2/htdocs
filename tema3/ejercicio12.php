<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Examen</h1>
    <form action="" method="post">
        <p>¿Por qué se pone en el action las comillas solas?</p>
        <input type="radio" name="p1" value="Porque si">Porque si
        <input type="radio" name="p1" value="Porque así se envía el formulario a la misma página">Porque así se envía el formulario a la misma página
        <input type="radio" name="p1" value="Porque me apetece">Porque me apetece

        <p>¿Es lo mismo Java que JavaScript?</p>
        <input type="radio" name="p2" value="Si">Si
        <input type="radio" name="p2" value="De vez en cuando">De vez en cuando
        <input type="radio" name="p2" value="No">No

        <input type="submit" value="Enviar" />

    </form>

    <?php
        

    if(isset($_POST["p1"])){

    $p1 = $_POST["p1"];
    $p2 = $_POST["p2"];
    $puntos = 0;
    
    if($p1=="Porque así se envía el formulario a la misma página"){
        $puntos += 5;
    } 

    if($p2== "No"){
        $puntos += 5;
    } 


    echo "Tu nota es $puntos";

    
    }
        ?>
</body>
</html>