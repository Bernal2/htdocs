<?php
    $usuario = "root";
    $password = "2066";
    $basededatos = "mibasededatos";
    $conexion = new mysqli("localhost", $usuario, $password, $basededatos);
    if($conexion -> connect_errno) {
        die("error de conexión: " . $conexion->connect_error);
    }

    
    $sql = "create table if not exists clientes(";
        $sql .= "id int auto_increment,";
        $sql .= "nombre varchar(50) not null,";
        $sql .= "ciudad varchar(50) null,";
        $sql .= "primary key (id))";
        $conexion->query($sql);

        $sql = "CREATE TABLE IF NOT EXISTS facturas(";
        $sql .= "id int auto_increment PRIMARY KEY,";
        $sql .= "fecha date,";
        $sql .= "numero int,";
        $sql .= "id_cliente int,";
        $sql .= "FOREIGN KEY (id_cliente) REFERENCES clientes(id));";
        $conexion->query($sql);