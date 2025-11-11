<?php
  session_start();
  if(!(isset($_SESSION["logged"]) && $_SESSION["logged"])){
    header("location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de relojes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="text-primary">Lista de relojes</h2>
      <a href="insertar.php" class="btn btn-success">Insertar nuevo reloj</a>
      <a href="cerrarsesion.php">Cierra sesión</a>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <?php
      include "../conexion.php";

      $sql = "SELECT * FROM productos;";
      $resultado = $conexion->query($sql);

      while ($fila = $resultado->fetch_assoc()) {
        echo "<div class='col'>";
        echo "  <div class='card h-100 shadow-sm'>";
        echo "    <img src='../" . $fila["imagen"] . "' class='card-img-top' alt='Imagen de " . $fila["nombre"] . "'>";
        echo "    <div class='card-body'>";
        echo "      <h5 class='card-title'>" . $fila["nombre"] . "</h5>";
        echo "      <p class='card-text'>" . $fila["descripcion"] . "</p>";
        echo "      <p class='card-text fw-bold'>Precio: " . $fila["precio"] . " €</p>";
        echo "    </div>";
        echo "    <div class='card-footer d-flex justify-content-between'>";
        echo "      <a href='modificar.php?id=" . $fila["id"] . "' class='btn btn-primary btn-sm'>Modificar</a>";
        echo "      <a href='eliminar.php?id=" . $fila["id"] . "' class='btn btn-danger btn-sm' onclick='return confirmarEliminacion()'>Eliminar</a>";
        echo "    </div>";
        echo "  </div>";
        echo "</div>";
      }
      ?>
    </div>
  </div>

  <script>
    function confirmarEliminacion() {
      return confirm("¿Estás seguro de que quieres eliminar este reloj?");
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
