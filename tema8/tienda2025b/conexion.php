<?php
    $usuario="root";
    $password="2066";
    $basededatos="tienda25";
    $conexion = new mysqli("localhost", $usuario, $password, $basededatos);    
    if ($conexion->connect_errno) {
        die("error de conexión: " . $conexion->connect_error);
    }

    $sql = "create table if not exists productos(";
    $sql .= "id int auto_increment,";
    $sql .= "nombre varchar(255) not null,";
    $sql .= "descripcion text null,"; 
    $sql .= "precio decimal(10,2) not null,";
    $sql .= "imagen varchar(255) null,";
    $sql .= "primary key (id));";
    $conexion->query($sql);

    //Si no existe, creamos la tabla
    $conexion->query("CREATE TABLE IF NOT EXISTS users(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP)"
    );

    //Si no hay registros, añadimos 2
    $resultado=$conexion->query("SELECT * FROM users");
    if(!$resultado->fetch_object()){
        $conexion->query("INSERT INTO users values (null, 'Benito', '1234', null)");
        $conexion->query("INSERT INTO users values (null, 'Julia', '5678', null)");
    }
