<?php

$db=mysql_connect("bdm186320517.my3w.com","bdm186320517","huchangjiang01");

mysql_select_db('bdm186320517_db');

mysql_query("set names utf8",$db);

function m($sql,$db){
    $re=mysql_query($sql,$db);
    //$res = mysql_query($query, $dbh);

    //$list=mysqli_fetch_all($re,MYSQLI_ASSOC);

    while($row=mysql_fetch_assoc($re)){
        $list[]=$row;
    }


    return $list;

}
function one($sql,$db){
    $re=mysql_query($db,$sql);

    $list=mysql_fetch_assoc($re);

    return $list;
    
}


?>