<?php

$con=mysqli_connect("localhost","root","","pro") or die("Error: ".mysqli_error($con));
mysqli_query($con, "SET NAME 'utf8'");
date_default_timezone_set('Asia/bangkok');

$type_id = $_POST["id"];



$sql = "DELETE FROM tbl_type WHERE type_id='$type_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
?>