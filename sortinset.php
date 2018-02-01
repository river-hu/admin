<?php
include("db2.php");

$sort = $_POST['sort'] ;


foreach( $sort as $v){

    $id = $v["sort_id"];
    $name = $v["sort_name"];

    $sql = "UPDATE `shop_sort` SET `sort_name`='$name' WHERE `sort_id`=$id";
    $list = one($sql,$db);
}









?>