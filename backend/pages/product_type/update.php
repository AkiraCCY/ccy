<?php

$connect = mysqli_connect('localhost','root','','pro');

if(isset($_POST["type_code"]) && isset($_POST["type_name"]) ){

    $type_code = mysqli_real_escape_string($connect,$_POST["type_code"]);
    $type_name = mysqli_real_escape_string($connect,$_POST["type_name"]);
    

     $sql = "Update tbl_type SET type_code = '$type_code', type_name = '$type_name' WHERE type_id =" .$_POST["id"] ;
   

    mysqli_query($connect,$sql);
  
    mysqli_close($connect);

}else{
    echo 'error';
}