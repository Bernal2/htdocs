<?php
    session_start();
    if(isset($_POST["nombre"])){
        if($_POST["nombre"] == "adri" && $_POST["password"] == "2066"){
            $_SESSION["usuario"]="adri";
            header("location:secreta.php");

        } else {
            $error = "El usuario o la contraseña no son correctos";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if(isset($error)){
            echo "<p style='color: red;'>$error</p>";
        }

    ?>
    <form action="" method="post">
        <br>Nombre: <input type="text" name="nombre">
        <br>Contraseña: <input type="password" name="password">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>