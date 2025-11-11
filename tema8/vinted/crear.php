<?php
    if(isset($_POST['submit'])){
        $nombreFichero = date("Y-m-d - H-i-s"). "-" .$_FILES['imagen']['name'];
        //Leo la ubicación temporal del archivo para después dejarlo en la carpeta
        $file_loc = $_FILES['imagen']['tmp_name'];
        //movemos el archivo a la carpeta deseada
        move_uploaded_file($file_loc, "uploads/".$nombreFichero);
    }

?>