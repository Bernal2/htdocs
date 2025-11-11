<?php
    session_start();
    if(!(isset($_SESSION["logged"]) && $_SESSION["logged"])){
        header("location:login.php");
    }
?>
<?php
    include "../conexion.php";
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $sql = "DELETE FROM productos WHERE id=$id";
        $conexion->query($sql);
        header("location:index.php");
    }