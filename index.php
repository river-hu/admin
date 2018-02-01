<?php 
    session_start(); 
    if(!($_SESSION["off"])){
        die("<script>alert('请登录');window.top.location.replace('index.html');</script>");
         exit;
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <frameset rows="110px,*" frameborder="0">
        <frame src="lx.html"></frame>
        <frameset cols="300px,*">
            <frame src="lx2.php"></frame>
            <frame name="main" src="list.html"></frame>
        </frameset>
    </frameset>
</html>