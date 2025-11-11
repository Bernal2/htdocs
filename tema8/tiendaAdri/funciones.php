<?php   
    function calcularCantidadCarrito(){
        $cantidad = 0;
        //Comprobamos si existe la variable de sesión carrito
        if(isset($_SESSION["carrito"])){       
            $carrito = $_SESSION["carrito"];  
            //"Recorro" todas las posiciones del array $carrito y voy sumando las cantidades y acumulo en $cantidad      
            foreach($carrito as $clave=>$valor){
                $cantidad += $valor;
            }                                
        }
        return $cantidad;
    }

    function escribirCantidadCarrito(){
        echo "<a href='carrito.php'><span style='font-size:40px'>🛒</span> (" . calcularCantidadCarrito() . ")</a>";
    }