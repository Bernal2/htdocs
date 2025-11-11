<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>
    <h1 class="display-1 text-center">Catálogo Emporio Armani</h1>
    <br><br>
    <div class="container">
    <?php
        $nombres = ["Camisa floral", "Pantalón pirata", "Shorts pinzas", "Calcetines Navidad"];
        $imagenes = ["camisa.jpg", "pantalon.jpg", "shorts.jpg", "calcetines.jpg"];
        $precios = [39.90, 55.50, 19.90, 9.99];
        $descripcion = ["Una camisa de flores bonita", "Un pantalón pirata cómodo y básico", "Unos shorts negros útiles.", "Unos calcetines de algodón."];

        echo "<div class='row'>";

        for($i=0; $i<count($nombres); $i++){
            echo "<div class='col-4 text-center'>";
            echo "<img src='img/{$imagenes[$i]}' height='200'>";
            echo "<h5> {$nombres[$i]}</h5>";
            echo "<p class='text-secondary'> {$descripcion[$i]}</p>";
            echo "<h2 class='text-danger'> {$precios[$i]} <span style='font-size: 24px'>€</span></h2>";

            echo "</div>";
        }
        echo "</div>";

    ?>
    
    </div>
</body>
</html>