<?php
    include("db2.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM `shop` WHERE id=$id";
    one($sql,$db);












?>