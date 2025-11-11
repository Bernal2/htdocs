<?php
    $usuario = "root";
    $password = "2066";
    $basededatos = "mibdtienda";
    $conexion = new mysqli("localhost", $usuario, $password, $basededatos);
    if($conexion -> connect_errno){
        die("error de conexión: " . $conexion->connect_error);
    }

     $sql = "create table if not exists productos(";
         $sql .= "id int auto_increment,";
         $sql .= "nombre varchar(50) not null,";
         $sql .= "descripcion text null,";
         $sql .= "precio DECIMAL null,";
         $sql .= "imagen varchar(50),";
         $sql .= "primary key (id))";
         $conexion->query($sql);

    $conexion->query("CREATE TABLE IF NOT EXISTS users(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        create_at DATETIME DEFAULT CURRENT_TIMESTAMP)"
        );

    $resultado=$conexion->query("SELECT * FROM users");
    if(!$resultado->fetch_object()){
        $conexion->query("INSERT INTO users values(null, 'Javi', '123', null)");
        $conexion->query("INSERT INTO users values(null, 'Adri', '123', null)");
    }
 
    