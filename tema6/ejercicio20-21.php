<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function aleatorios5($minimo, $maximo){
            $miArray = [];
            for($i=0; $i<5; $i++){
                $miArray[] = random_int($minimo, $maximo);
            }
            return $miArray;
        }

        function minimo($miArray){
            $minimo = $miArray[0];
            for($i=1; $i<sizeof($miArray); $i++){
                if($miArray[$i] < $minimo){
                    $minimo = $miArray[$i];
                
                }
            }
            return $minimo;
        }

        function maximo($miArray){
            $maximo = $miArray[0];
            for($i=1; $i<sizeof($miArray); $i++){
                if($miArray[$i] > $maximo){
                    $maximo = $miArray[$i];
                
                }
            }
            return $maximo;
        }

        function posMinimo($miArray){
            $minimo = $miArray[0];
            $posicion=0;
            for($i=1; $i<sizeof($miArray); $i++){
                if($miArray[$i] < $minimo){
                    $minimo = $miArray[$i];
                    $posicion = $i;
                
                }
            }
            return $posicion;
        }

        function encontrar($miArray, $numero){
            $posicionEnLaQueSeEncuentra = -1;
            for($i=0; $i < sizeof($miArray); $i++){
                if($miArray[$i] == $numero){
                    $posicionEnLaQueSeEncuentra = $i;
                }
            }
            return $posicionEnLaQueSeEncuentra;

        }

        $numeros = [3, 34, 53, 2, 78, -4, 89];
        $minimo = minimo($numeros);
        $posicionMinimo = posMinimo($numeros);

        echo "<p>El mínimo es $minimo y está en la posicion $posicionMinimo</p>"


        encontrar($numeros, 2);
    ?>
</body>
</html>