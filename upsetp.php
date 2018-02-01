<?php
include("db2.php");

$id = $_POST['id'];
$title = $_POST['title'];
$des = $_POST['des'] ;
$url = $_POST['url'] ;
$price = $_POST['price'];
$ord = $_POST['ord'];
 
$filetype = array("gif", "jpeg", "jpg", "png");
//print_r(empty($_FILES["file"]["name"]));
if(!empty($_FILES["file"])){
    $temp = explode(".", $_FILES["file"]["name"]);
    
    $extension = end($temp);
    $file_img='img/'.$title.$ord.".".$extension;
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
        $sql = "UPDATE `shop` SET `title`='$title',`des`='$des',`url`='$url',`price`='$price',`ord`=$ord,`pic`='$file_img' WHERE id=$id";

        $list = one($sql,$db);

        echo $file_img;
        
        
    
        }
    
    }
}else{
    $sql = "UPDATE `shop` SET `title`='$title',`des`='$des',`url`='$url',`price`='$price',`ord`=$ord WHERE id=$id";
    
    $list = one($sql,$db);
    print_r($list) ;
   
    
}







?>