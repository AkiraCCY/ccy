<?php 
include ('condb.php');
$m_id = $_GET['id'];

$sql = " UPDATE tbl_product_detail set
        d_status = 'จัดส่งเรียบร้อย'
        WHERE d_status = 'กำลังจัดส่ง' and member_id = '$m_id'";
        $query	= mysqli_query($con,$sql) or die ("Error in query:$sql " . mysqli_error($con));




        if( $query){
            echo "<script type='text/javascript'>";
            echo "alert('ขอบคุณที่ทำการแจ้งสถานะ');";
            echo "window.location = 'product_status.php'; ";
            echo "</script>";
            }
            else{
            echo "<script type='text/javascript'>";
            echo "alert('เกิดข้อผิดพลาดโปรดลองใหม่อีกครั้ง');";
            echo "</script>";
          }
?>
