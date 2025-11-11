<?php
require_once("conexion.php");
session_start();

if(isset($_POST["nombre"]) && isset($_POST["password"])){
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];

    //Si el nombre lleva una arroba, es un email y consulto los email
    if(str_contains($nombre, "@")){
        $consulta = "SELECT * FROM users WHERE email='$nombre' AND password='$password'";
    } else {
        //Si el nombre no lleva arroba, comparo con los username
        $consulta = "SELECT * FROM users WHERE username='$nombre' AND password='$password'";
    }

    //Completo la consulta a la base de datos
    $resultado = $conexion->query($consulta);
    
    //Si hay algún registro que tenga ese nombre y ese password
    if($resultado && $resultado->num_rows > 0){
        //Recupero los datos del usuario
        $fila = $resultado->fetch_assoc();
        $_SESSION["idUsuario"] = $fila["id"];
        $_SESSION["logged"] = true;
        header("location:index.php");
        exit;
    } else {
        header("location:login.php?error=1");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Vinted</title>
</head>
<body>
    <h1>Formulario de Login</h1>

    <?php
        if(isset($_GET["msj"]) && $_GET["msj"] == "registrado"){
            echo "<p>Ya estás registrado, ahora entra en la aplicación</p>";
        }

        if(isset($_GET["msj"]) && $_GET["msj"] == "vender"){
            echo "<p>Para poder vender tienes que estar registrado</p>";
        }

        if(isset($_GET["error"]) && $_GET["error"] == 1){
            echo "<p>El nombre de usuario o la contraseña son incorrectos</p>";
        }
    ?>

    <form action="" method="post">
        <input type="text" name="nombre" placeholder="Escribe el nombre del usuario o email">
        <input type="password" name="password" placeholder="Escribe la contraseña">
        <button type="submit">Entrar</button>
    </form>

    <p><a href="registro.php">Ir al registro</a></p>
</body>
</html>
