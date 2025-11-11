<?php
    if(isset($_POST["color"])){
        $color = $_POST["color"];
    }


    if (isset($_POST["color"])) {
        $color = $_POST["color"];
            setcookie("color", $color, time() + 3*24*3600);
    } else if (isset($_COOKIE["color"])) {
        $color = $_COOKIE["color"];

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $color; ?>;">
    <h1>Mi página de colores</h1>
    <p>Elige un color de fondo</p>
 
    <form action="" method="post">
        <select name="color">
            <option value="#ACACAC"
            <?php
                if(isset($color) && $color=="#ACACAC"){
                    echo "selected";
                }
            ?>
            >Gris</option>
            <option value="#e2e598"
            <?php
                if(isset($color) && $color=="#e2e598"){
                    echo "selected";
                }
            ?>
            >peru</option>
            <option value="#e598c1"
            <?php
                if(isset($color) && $color=="#e598c1"){
                    echo "selected";
                }
            ?>
            >rosa</option>
               
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>