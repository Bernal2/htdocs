<?php
    $usuario = "daw2025";
    $password = "Murcia2025";
    $basededatos = "daw2025_cesur";
    $conexion = new mysqli("localhost", $usuario, $password, $basededatos);
    if($conexion -> connect_errno){
        die("error de conexión: " . $conexion->connect_error);
    }

     $conexion->query("CREATE TABLE IF NOT EXISTS opiniones(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(50),
        fecha DATE NOT NULL,
        hora TIME NOT NULL,
        opinion TEXT NOT NULL)"
        );