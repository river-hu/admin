<?php
include("db2.php");

$sort = $_POST['sort'] ;
$title = $_POST['title'];
$des = $_POST['des'] ;
$url = $_POST['url'] ;
$price = $_POST['price'];

$sql = "SELECT * FROM `shop` WHERE `sort_id`=$sort ORDER BY `ord` DESC";
$list = m($sql,$db);
$ord =$list[0]["ord"]+1; 
$filetype = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);

$extension = end($temp);
$file_img='img/'.$sort.$ord.".".$extension;
$header=$_SERVER['DOCUMENT_ROOT'].'/shops/'.$file_img;

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& in_array($extension, $filetype)){
    if ($_FILES["file"]["error"] > 0)
    {
        echo "错误：: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
    
    move_uploaded_file($_FILES["file"]["tmp_name"],$header);

    
    $sql = "INSERT INTO `shop`( `sort_id`, `title`, `des`, `url`, `pic`, `price`, `ord`) VALUES ($sort,'$title','$des','$url','$file_img','$price','$ord')";
    $list = m($sql,$db);
    

    }

}






?>