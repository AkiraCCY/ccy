<meta charset="UTF-8">
<?php
    
$ems1= $_GET['id'];
include('condb.php'); 

$sql = "UPDATE tbl_order_detail SET  
o_status='รายการสั่งซื้อถูกยกเลิก'

WHERE o_id = $ems1";
$result2 = mysqli_query($con, $sql) or die ("Error in query: $sql" . mysqli_error());

$sql1 = "UPDATE tbl_product_detail SET  
d_status='รายการสั่งซื้อถูกยกเลิก'
WHERE d_status='อยู่ในระหว่างการตรวจสอบ' and o_id = $ems1";

$result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error());

if($result1){
    echo "<script type='text/javascript'>";
    // echo "alert('Drop Order Succesfuly');";
    echo "window.location = 'status.php' ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Update again');";
    echo "</script>";
  }
?>
