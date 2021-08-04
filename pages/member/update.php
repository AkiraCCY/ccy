<?php

$connect = mysqli_connect('localhost','root','','pro');

if(isset($_POST["m_name"]) && isset($_POST["m_email"]) && isset($_POST["m_tel"]) && isset($_POST["m_address"])){

    $m_name = mysqli_real_escape_string($connect,$_POST["m_name"]);
    $m_email = mysqli_real_escape_string($connect,$_POST["m_email"]);
    $m_tel = mysqli_real_escape_string($connect,$_POST["m_tel"]);
    $m_address = mysqli_real_escape_string($connect,$_POST["m_address"]);

     $sql = "Update tbl_member SET m_name = '$m_name', m_email = '$m_email', ";
     $sql .= " m_tel = '$m_tel', m_address = '$m_address' WHERE member_id = ".$_POST["id"];

    mysqli_query($connect,$sql);
  
    mysqli_close($connect);

}else{
    echo 'error';
}