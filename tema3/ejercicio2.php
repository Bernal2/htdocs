<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Te saludo según la hora</h1>

    
    <form action="" method="post">
        Dime la hora<input type="range" id="hora" name="hora" min="0" max="23" value= "12">
      <span id="valorHora">12</span>
      
      <input type="submit" value="Enviar" />
    </form>

    <script>
        const inputHora = document.getElementById("hora");
        const valorHora = document.getElementById("valorHora");

        inputHora.addEventListener("input", function(){
            valorHora.innerText = this.value;
        });
    </script>


        <?php
        

        if(isset($_POST["hora"])){

    $hora = $_POST["hora"];
    
    if($hora>=6 && $hora <=12){
        echo "Buenos días";
    } else if(($hora>=0 && $hora<5) || ($hora>=21 && $hora<=23)){
        echo "Buenas noches";

    } else{
        echo "Buenas tardes";
    }

    

    

    }
        ?>
</body>
</html>