<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "font-family: 'Courier New' ;">
    <?php
    

    for($i=0; $i<10; $i++){
        for($col=0; $col<$i+1; $col++){
            if($col == 0 || $col == $i || $i == 9){
            echo "*";
        } else{
            echo "&nbsp;";
        }
        
    }
    echo "<br>";
}
    ?>
</body>
</html>