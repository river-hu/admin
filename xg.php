<?php
$sql=mysqli_connect("127.0.0.1","root","root","student");
$off=$_POST["off"];
$xnum=$_POST["xnum"];
$num=$_POST["num"];
$name=$_POST["name"];
$age=$_POST["age"];
$sex=$_POST["sex"];
$score=$_POST["score"];
$filetype = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$file_img='upload/'.$num.".".$extension;
$header=$_SERVER['DOCUMENT_ROOT'].'/frameset/'.$file_img;
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

    $sqli1="UPDATE `students` SET `num`=$num,`name`='$name',`age`=$age,`sex`=$sex,`score`=$score,`src`='$file_img' WHERE `num`=$xnum" ;       
    $ree=mysqli_query($sql,$sqli1);
    echo $file_img;
    $off=false;

    }

}

?>