<?php
    //Una función a la que se le pasa una palabra y devuelve la letra por la que empieza. 
    function letraEmpieza($cadena){
        return substr($cadena, 0, 1);
    }

    //Una función a la que se le pasan 3 números y devuelve el intermedio, descartando el mayor y el menor. 
    // function numeroIntermedio($n1, $n2, $n3){
    //     $resultado = $n1;

    //     //Si n2 es menor que n1 y es mayor que n3, n2 está en medio
    //     //Si n2 es mayor que n1 y n2 es menor que n3, también n2 está en medio
    //     if(($n1>$n2 && $n3<$n2) || ($n1<$n2 && $n3>$n2)){
    //         $resultado = $n2;
    //     }

    //     if(($n1>$n3 && $n2<$n3) || ($n1<$n3 && $n2>$n3)){
    //         $resultado = $n3;
    //     }

    //     return $resultado;
    // }

    //Misma forma para sacar el número intermedio
    function intermedioArray($n1, $n2, $n3){
        $aux = [$n1, $n2, $n3];
        sort($aux);
        return $aux[1];
    }


    //Se pasan una palabra y un número. La función devuelve true si la longitud de la palabra es mayor que el número y false si es menor. 
    function compruebaLongitud($palabra, $numero){
        return strlen($palabra)>$numero;
    }


    //Una función que se le pasan dos números y nos dice cúal está en medio. Por ejemplo: enMedio(3, 7) devuelve 5.  
    function numeroEnMedio($n1, $n2){
        return intval(($n1+$n2)/2);
    }
?>