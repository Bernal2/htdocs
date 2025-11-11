<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $semana=["Lunes"=> "ES", "Martes"=>"IA", "Miercoles"=>"EC", "Jueves" => "EC", "Viernes" =>"D"];
    // Por si quiero hacer el horario completo
    // $semana=["Lunes"=> ["ES", "ES", "DI", "DI", "DI", "DI"], "Martes" => ["df","df","df","df","df","df",]]
    ?>
    <form action="" method="post">
        <select name="dia">
            <?php
             foreach($semana as $clave => $valor){
                echo"<option>$clave</option>";
                }
            ?>
        </select>
        <input type="submit" value="enviar">
    </form>
    <?php
        if(isset($_POST["dia"])){
            $dia = $_POST["dia"];
            $asignatura = $semana[$dia];
            echo "<h3>El $dia tenemos $asignatura a primera hora</h3>";
        }
    ?>
</body>
</html>