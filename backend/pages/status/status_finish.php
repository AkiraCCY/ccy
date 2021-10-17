<meta charset="UTF-8">
<?php
$ems= $_POST['p_price'];
$ems1= $_GET['id'];
include('../../condb.php'); 

$sql = "UPDATE tbl_order_detail SET  
o_status='กำลังจัดส่ง',
o_ems='EMS: $ems'
WHERE o_id = $ems1";
$result2 = mysqli_query($con, $sql) or die ("Error in query: $sql" . mysqli_error());

$sql1 = "UPDATE tbl_product_detail SET  
d_status='กำลังจัดส่ง'
WHERE d_status='อยู่ในระหว่างการตรวจสอบ' and o_id = $ems1";

$result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error());

if($result1){
    echo "<script type='text/javascript'>";
    // echo "alert('Update Succesfuly');";
    echo "window.location = 'status.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Update again');";
    echo "</script>";
  }
?>

