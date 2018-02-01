<?php

include("db2.php");


if($_POST["id"]=='1'){
    $sql = "select * from shop";
}else{
    $sql = "select * from shop_sort";
}

$list = m($sql,$db);


echo json_encode($list);











?>