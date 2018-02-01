<?php

include("db.php");

$user = $_POST["user"];

$pass = $_POST["pass"];

$sql = "SELECT * FROM `admin` WHERE user='$user' and pass='$pass'";

$off = m($sql,$db);
if(count($off)){

    session_start();

    $_SESSION["off"]=true;

    echo "<script>location.replace('index.php')</script>";


}else{
    
    session_start();
    
    $_SESSION["off"]=false;

    echo "<script>location.replace('index.html')</script>";


}





?>