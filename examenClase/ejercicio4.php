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
        <div class="row">
            <div class= "col">
                <h1 style="text-align: center;">Zapatillas Clásicas y Retro</h1>
                <p style="text-align: center;">En una época en la que vivimos un torbellino de colaboraciones y nuevos modelos, las zapatillas retro y clásicas siguen ocupando un lugar importante en el corazón, y las colecciones, de los sneakerheads. Algunas de ellas llevan varias décadas en el mercado y se han convertido en aunténticos símbolos culturales de nuestro tiempo.</p>
                <hr>
                <?php

                    $nombres = ["Zapatillas Adidas", "Zapatillas Nike", "Zapatillas Puma", "Zapatillas Adidas"];
                    $enlaces = ["www.adidas.es", "www.nike.com", "www.puma.com", "www.adidas.es"];
                    $imagenes = ["Zapatillas1.jpg", "Zapatillas2.jpg", "Zapatillas3.jpg", "Zapatillas4.jpg"];
                    $precios = [150, 200, 240, 240];

                    echo "<div class='row'>";
                    
                    for($i=0; $i<count($nombres); $i++){

            
                    echo "<div class='col-3'>";
                    echo "<img src='img/{$imagenes[$i]}' height='300'>";
                    echo "<p><a href='{$enlaces[$i]}'> {$nombres[$i]} </a> </p>";
                    echo "<h3>{$precios[$i]}</h3>";
                    echo "</div>";

                    
                }
            echo "</div>";



            ?>
            </div>
        </div>
    </div>
    
    
</body>
</html>