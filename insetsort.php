<?php
include("db2.php");
$id = $_GET["id"];
$name = $_GET["name"];

$sql = "INSERT INTO `shop_sort`(`sort_id`, `sort_name`) VALUES ($id,'$name')";

$r = one($sql,$db);






?>