<?php
include "conexion.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "DELETE FROM clientes WHERE id=$id";
    $conexion->query($sql);
    header("location:listarclientes.php");
}