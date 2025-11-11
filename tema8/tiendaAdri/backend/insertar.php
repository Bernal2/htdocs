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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm p-4">
            <h2 class="text-center mb-4">Registrar Reloj</h2>

            <form action="" method="post" class="row g-3">
                <div class="col-md-3">
                    <input type="text" name="nombre" class="form-control" placeholder="Escribe el modelo" required>
                </div>
                <div class="col-md-3">
                    <input type="text" name="descripcion" class="form-control" placeholder="Escribe la descripcion" required>
                </div>
                <div class="col-md-3">
                    <input type="text" name="precio" class="form-control" placeholder="Escribe el precio" required>
                </div>
                <div class="col-md-3">
                    <input type="text" name="imagen" class="form-control" placeholder="Escribe la imagen" required>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary px-4">Enviar</button>
                </div>
            </form>

            <div class="text-center mt-4">
                <a href="index.php" class="btn btn-outline-secondary">Lista relojes</a>
            </div>
        </div>
    </div>
<?php
        include "../conexion.php";

        if(isset($_POST["nombre"])){
            $nombre = $_POST["nombre"];
            $descripcion = $_POST["descripcion"];
            $precio = $_POST["precio"];
            $imagen = $_POST["imagen"];

            $sql = "INSERT INTO productos (nombre, descripcion, precio, imagen) VALUES ('$nombre', '$descripcion', $precio, '$imagen');";
            $conexion->query($sql);
     
    //  $sql = "INSERT INTO productos (nombre, descripcion, precio, imagen) VALUES
    //     ('Garmin Forerunner 55', 'Reloj GPS para correr con métricas básicas y diseño ligero.', 189.99, 'img/forerunner55.jpg'),
    //     ('Garmin Forerunner 255', 'Reloj multideporte con GPS avanzado y métricas de rendimiento.', 349.99, 'img/forerunner255.jpg'),
    //     ('Garmin Forerunner 965', 'Reloj premium con pantalla AMOLED y funciones avanzadas.', 649.99, 'img/forerunner965.jpg'),
    //     ('Garmin Fenix 7', 'Reloj GPS multideporte con carga solar y materiales resistentes.', 749.99, 'img/fenix7.jpg'),
    //     ('Garmin Fenix 7S', 'Versión compacta del Fenix 7 ideal para muñecas pequeñas.', 699.99, 'img/fenix7s.jpg'),
    //     ('Garmin Fenix 7X', 'Versión extendida con batería de mayor duración y linterna integrada.', 899.99, 'img/fenix7x.jpg'),
    //     ('Garmin Instinct 2', 'Reloj resistente con GPS y diseño militar.', 329.99, 'img/instinct2.jpg'),
    //     ('Garmin Instinct 2 Solar', 'Versión solar del Instinct 2 para aventuras prolongadas.', 399.99, 'img/instinct2solar.jpg'),
    //     ('Garmin Epix 2', 'Reloj premium con pantalla AMOLED y mapas multideporte.', 949.99, 'img/epix2.jpg'),
    //     ('Garmin Venu 2', 'Smartwatch con pantalla AMOLED y funciones de salud avanzadas.', 379.99, 'img/venu2.jpg'),
    //     ('Garmin Venu 3', 'Versión mejorada con mejor batería y seguimiento del sueño.', 449.99, 'img/venu3.jpg'),
    //     ('Garmin Venu Sq 2', 'Smartwatch económico con pantalla cuadrada AMOLED.', 269.99, 'img/venusq2.jpg'),
    //     ('Garmin Vivoactive 4', 'Reloj GPS con seguimiento de salud y entrenamiento diario.', 299.99, 'img/vivoactive4.jpg'),
    //     ('Garmin Approach S12', 'Reloj de golf con más de 42,000 campos precargados.', 209.99, 'img/approachs12.jpg'),
    //     ('Garmin Approach S70', 'Reloj premium para golfistas con pantalla AMOLED.', 699.99, 'img/approachs70.jpg'),
    //     ('Garmin Edge 530', 'Ciclocomputador GPS con métricas de rendimiento avanzadas.', 299.99, 'img/edge530.jpg'),
    //     ('Garmin Edge 540', 'Nueva generación con mejor conectividad y pantalla más clara.', 349.99, 'img/edge540.jpg'),
    //     ('Garmin Edge 840', 'Ciclocomputador con pantalla táctil y mapas avanzados.', 449.99, 'img/edge840.jpg'),
    //     ('Garmin Edge 1040', 'El ciclocomputador más completo con carga solar.', 749.99, 'img/edge1040.jpg'),
    //     ('Garmin HRM-Pro', 'Sensor de frecuencia cardíaca con conectividad dual ANT+ y Bluetooth.', 129.99, 'img/hrmpro.jpg'),
    //     ('Garmin HRM-Dual', 'Sensor de frecuencia cardíaca compatible con ANT+ y Bluetooth.', 79.99, 'img/hrmdual.jpg'),
    //     ('Garmin HRM-Fit', 'Sensor cardíaco diseñado para mujeres, ajuste en sujetador deportivo.', 99.99, 'img/hrmfit.jpg');
    //     ";
    //     $conexion->query($sql);
         }
    ?>    
</body>
</html>