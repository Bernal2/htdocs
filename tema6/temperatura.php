<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La temperatura de las estrellas</h1>
    <?php
        function estrellas($temperatura){
            $rangos = [3699, 5199, 5999, 7499, 9999, 29999];
            $valores = ["M", "K", "G", "F", "A", "b", "0"]

            //$asociativo = [3699 => "M", ]

            $pos=0;
            while($temperatura > $rangos[$pos] && $pos<count($rangos)){
                $pos++;
            }
            return $valores[$pos];
        }

        echo estrellas(1000);
        echo "<br>" . estrellas(4000);
        echo "<br>" . estrellas(5000);
        echo "<br>" . estrellas(6000);
        echo "<br>" . estrellas(7000);

    ?>
</body>
</html>