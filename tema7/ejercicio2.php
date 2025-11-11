<?php
    session_start();
    if(isset($_POST["numero"])){
        $numero = $_POST["numero"];
        if($numero>0){
            $mediaImpares = $_SESSION["acumulaImpares"] / $_SESSION["cuentaImpares"];
            $cuentaImpares = $_SESSION["cuentaImpares"];
            $maximoPar = $_SESSION["maximoPar"];
            $cuentaNumeros = $_SESSION["cuentaNumeros"];
            session_destroy();
            // unset($_SESSION["acumulaImpares"]);
            // unset($_SESSION["cuentaImpares"]);
            // unset($_SESSION["maximoPar"]);
            // unset($_SESSION["cuentaNumeros"]);


        }else{
            if(!isset($_SESSION["cuentaNumeros"])){
                $_SESSION["cuentaNumeros"]=1;
                
            } else{
                $_SESSION["cuentaNumeros"]++;
            }

            if(!isset($_SESSION["cuentaImpares"]) && $numero % 2 != 0){
                $_SESSION["cuentaNumeros"]=1;
                $_SESSION["acumulaImpares"]=$numero;
            } else if(isset($_SESSION["cuentaNumeros"]) && numero % 2 != 0){
                $_SESSION["cuentaNumeros"]++;
                $_SESSION["acumulaImpares"] += $numero;
            }

            if(!isset($_SESSION["maximoPar"]) && $numero % 2 == 0){
                $_SESSION["maximoPar"] = $numero;
            } else if($numero % 2 == 0 && $numero > $_SESSION["maximoPar"]){
                $_SESSION["maximoPar"] = $numero;
            }
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="numero">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($mediaImpares)){
            echo "El total de números es $cuentaNumeros";
            echo "<br>La cantidad de numeros impares es $cuentaImpares y la media es $mediaImpares";
            echo "<br>El máximo Par es $maximoPar";
        }

?>
</body>
</html>