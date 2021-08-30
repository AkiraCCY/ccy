<?php
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $mem_username = $_REQUEST["mem_username"];
  $mem_password = $_REQUEST["mem_password"];
  $mem_name = $_REQUEST["mem_name"];
  $mem_email = $_REQUEST["mem_email"];
  $mem_tel = $_REQUEST["mem_tel"];
  $mem_address = $_REQUEST["mem_address"];
  $mem_tb = $_REQUEST["mem_tb"];
  $mem_ap = $_REQUEST["mem_ap"];
  $mem_api = $_REQUEST["mem_api"];
  $mem_ps = $_REQUEST["mem_ps"];
  //เพิ่มเข้าไปในฐานข้อมูล

  $check = "SELECT * FROM tbl_member 
where m_user = '$mem_username' ";
$result1 = mysqli_query($con,$check) or die(mysql_error());
$num=mysqli_num_rows($result1); 
    if($num > 0)   		
    {
//ถ้ามี username นี้อยู่ในระบบแล้วให้แจ้งเตือน
         echo "<script>";
   echo "alert(' มีผู้ใช้ username นี้แล้ว กรุณาสมัครใหม่อีกครั้ง !');";
   echo "window.location='../register.php';";
         echo "</script>";

}else{
  $sql = "INSERT INTO tbl_member(m_user, m_pass, m_name, m_email, m_tel, m_address)
  VALUES('$mem_username', '$mem_password', '$mem_name', '$mem_email', '$mem_tel', '$mem_address &nbsp;&nbsp; $mem_tb &nbsp;&nbsp; $mem_ap &nbsp;&nbsp;  $mem_api &nbsp;&nbsp; $mem_ps')";
  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
  
  //ปิดการเชื่อมต่อ database
  mysqli_close($con);
  //จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Register Succesfuly');";
  echo "window.location = 'index2.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "</script>";
}}
?>