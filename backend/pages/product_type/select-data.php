<?php

$connect = mysqli_connect('localhost','root','','pro');

$sql = "select * from tbl_type where type_id = ".$_POST["id"];
$rs = mysqli_query($connect,$sql);

while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
    $arr[] = $row;
}

echo json_encode($arr);

mysqli_free_result($rs);
mysqli_close($connect);
// $mysqli->query() or die ( $mysqli->error );
?>