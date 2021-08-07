<?php

$connect = mysqli_connect('localhost','root','','pro');

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["telophon"]) && isset($_POST["address"])){

    $m_name = mysqli_real_escape_string($connect,$_POST["name"]);
    $m_email = mysqli_real_escape_string($connect,$_POST["email"]);
    $m_tel = mysqli_real_escape_string($connect,$_POST["telophon"]);
    $m_address = mysqli_real_escape_string($connect,$_POST["address"]);

     $sql = "insert into tbl_member(m_name,m_email,m_tel,m_address) values('$m_name','$m_email','$m_tel','$m_address')";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}else{
    echo 'error';
}