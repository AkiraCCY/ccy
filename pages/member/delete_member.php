<?php

$con=mysqli_connect("localhost","root","","pro") or die("Error: ".mysqli_error($con));
mysqli_query($con, "SET NAME 'utf8'");
date_default_timezone_set('Asia/bangkok');

$member_id = $_POST["id"];

//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา

$sql = "DELETE FROM tbl_member WHERE member_id='$member_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
?>