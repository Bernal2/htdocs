<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
 
</head>
<body>
    <div class="container">
        <h2><a href="segundo.php">Insertar nuevo cliente</a></h2>
    <?php
        include "conexion.php";

        $sql = "SELECT * FROM clientes;";

        $resultado = $conexion->query($sql);

        while($fila=$resultado->fetch_assoc()){
            echo "<div class='row'>";
            echo "<div class='col-1'>". $fila["id"] . "</div>";
            echo "<div class='col-3'>". $fila["nombre"] . "</div>";
            echo "<div class='col-3'>". $fila["ciudad"] . "</div>";
            echo "<div class='col-1'><a href='modificar.php?id=" . $fila["id"] . "'>Modificar</a></div>";
            echo "<div class='col-1'><a href='eliminar.php?id=" . $fila["id"] . "' onclick='return confirmarEliminar()'>Eliminar</a></div>";
            echo "</div>";
        }


    ?>
    </div>
    <script>
        function confirmarEliminar(){
            return confirm("¿Estás seguro de que quieres eliminar este usuario?");
        }
    </script>
</body>
</html>