<?php

$connect = mysqli_connect('localhost','root','','pro');

if(isset($_POST["type_code"]) && isset($_POST["type_name"])){

    $type_code = mysqli_real_escape_string($connect,$_POST["type_code"]);
    $type_name = mysqli_real_escape_string($connect,$_POST["type_name"]);
   

     $sql = "insert into tbl_type(type_code,type_name) values('$type_code','$type_name')";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}else{
    echo 'error';
}