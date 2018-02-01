<?php

$db=mysqli_connect("127.0.0.1","root","root","shop");


function m($sql,$db){
    $re=mysqli_query($db,$sql);

    $list=mysqli_fetch_all($re,MYSQLI_ASSOC);

    return $list;

}
function one($sql,$db){

    $re=mysqli_query($db,$sql);
    $list = null;
    if($re!=1){
        $list=mysqli_fetch_assoc($re);

    }
    
    return $list;
    
}


?>