<?php
    session_start();
    $_SESSION["logged"]=false;
    $_SESSION["id"]=0;
    $_SESSION["username"]="";
    session_destroy();
    header("location: login.php");