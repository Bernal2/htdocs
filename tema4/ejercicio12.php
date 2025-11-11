<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>La serie de Fibonacci</h1>
    

    <?php
    $numeroSerie=10;
    echo "0, 1, ";

    
        $n1 = 0;
        $n2 = 1;
        $posicion = 3;
        while($posicion<= $numeroSerie){
            //Calculo el siguiente numero de la serie sumando los dos anteriores
            $fibo = $n1 + $n2;
            //Escribo el numero
            echo "$fibo, ";
            //El nuevo numero "anterior al anterior" será el que antes era el anterior
            $n1=$n2;
            //El nuevo numero anterior sera el que antes era el de la serie
            $n2=$fibo;
            //Incremento la posicion para controlar cuando tengo que terminar
            $posicion++;
        }
        

        for($posicion=3; $posicion<=$numeroSerie; $posicion++){
            //Calculo el siguiente numero de la serie sumando los dos anteriores
            $fibo = $n1 + $n2;
            //Escribo el numero
            echo "$fibo, ";
            //El nuevo numero "anterior al anterior" será el que antes era el anterior
            $n1=$n2;
            //El nuevo numero anterior sera el que antes era el de la serie
            $n2=$fibo;

            

        }


    
        
        

    
    
    ?>
</body>
</html>