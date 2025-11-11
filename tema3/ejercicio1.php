<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Asignatura a primera hora</h1>
    <form action="" method="post">
      <select name="dia">
        <?php
        $dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];
        for($i=0; $i<sizeof($dias); $i++){
          echo "<option>". $dias[$i]. "</option>";
        }
?>

        
        <option value="Lunes">Lunes</option>
        <option value="Martes">Martes</option>
        <option value="Miercoles">Miercoles</option>
        <option value="Jueves">Jueves</option>
        <option value="Viernes">Viernes</option>
      </select>
      
      <input type="submit" value="Enviar" />
    </form>

    <?php
    if(isset($_POST["dia"])){

    $dia = $_POST["dia"];
    
    if($dia=="Lunes"){
        $asignatura="Entorno Servidor";
    } else if($dia=="Martes"){
        $asignatura="IA Generativa";

    } else if($dia=="Miercoles"){
        $asignatura="Entorno Cliente";

    } else if($dia=="Jueves"){
        $asignatura="Entorno Cliente";

    } else if($dia=="Viernes"){
        $asignatura="App Web";

    }

    

    echo "<h2>La asignatura a primera hora del $dia es $asignatura </h2>";

    }

    ?>
</body>
</html>