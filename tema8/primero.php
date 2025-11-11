<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "conexion.php";
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

        // $sql = "INSERT INTO clientes (nombre, ciudad) VALUES ('Ángela', 'Murcia');";
        // $conexion->query($sql);
        // $sql = "INSERT INTO clientes (nombre, ciudad) VALUES ('Nati', 'Murcia');";
        // $conexion->query($sql);
        // $sql = "INSERT INTO clientes (nombre, ciudad) VALUES ('Adrián', 'Murcia');";
        // $conexion->query($sql);

        $sql = "UPDATE clientes SET nombre='Ángela Vega' WHERE nombre='Ángela';";
        $conexion->query($sql);
        $sql = "UPDATE clientes SET nombre='Nati Alarcos' WHERE nombre='Nati';";
        $conexion->query($sql);
        $sql = "UPDATE clientes SET nombre='Adrián Bernal' WHERE nombre='Adrián';";
        $conexion->query($sql);

    ?>    
</body>
</html>