<?php
  session_start();
  if(!(isset($_SESSION["logged"]) && $_SESSION["logged"])){
    header("location:login.php");
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
    include "../conexion.php";
        if(isset($_GET["id"])){
            $id = $_GET["id"];

            $sql = "DELETE FROM productos WHERE id=$id";
            $conexion->query($sql);
            header("location:index.php");
        }
        
    ?>
</body>
</html>