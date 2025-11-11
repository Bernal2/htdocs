<?php
$usuario = "root";
$password = "2066";
$basededatos = "vinted";
$conexion = new mysqli("localhost", $usuario, $password, $basededatos);
if($conexion->connect_errno){
    die("Error de conexión: " . $conexion->connect_error);
}

// Primero crear la tabla USERS
$conexion->query("CREATE TABLE IF NOT EXISTS users(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    create_at DATETIME DEFAULT CURRENT_TIMESTAMP
)");

// Luego crear la tabla PRODUCTOS (que depende de USERS)
$sql = "CREATE TABLE IF NOT EXISTS productos(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NULL,
    precio DECIMAL(8,2),
    vendedor INT,
    vendido boolean,
    categoria VARCHAR(255),
    imagen VARCHAR(255),
    CONSTRAINT fk_vendedor FOREIGN KEY (vendedor) REFERENCES users(id)
)";
$conexion->query($sql);

// Insertar usuario admin si no existe
$resultado = $conexion->query("SELECT * FROM users");
if(!$resultado->fetch_object()){
    $conexion->query("INSERT INTO users VALUES (NULL, 'admin', '123', 'admin', 'adribergar2@gmail.com', NULL)");
}
?>
