<meta charset="UTF-8">
<?php
include('../../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	$date1 = date("Ymd_His");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	$numrand = (mt_rand());
	//รับค่าไฟล์จากฟอร์ม
$p_name = $_POST['p_name1'];
$p_price = $_POST['p_price'];
$type_id = $_POST['type_id'];
$p_quantity = $_POST['p_quantity'];
$p_detail = $_POST['p_detail'];
$p_img =(isset($_POST['p_img']) ? $_POST['p_img'] :'');
$p_code = $_POST['p_code'];



$sql = "SELECT * FROM tbl_type 
WHERE type_id = '$type_id'";
$result2 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result2);

//img
	$upload=$_FILES['p_img'];
	if($upload <> '') {

	//โฟลเดอร์ที่เก็บไฟล์
	$path="p_img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	$type = strrchr($_FILES['p_img']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	$newname ='p_img'.$numrand.$date1.$type;
	$path_copy=$path.$newname;
	$path_link="p_img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	move_uploaded_file($_FILES['p_img']['tmp_name'],$path_copy);
	}
	// เพิ่มไฟล์เข้าไปในตาราง uploadfile
	
		$sql = "INSERT INTO tbl_product
		(
		p_name,
		p_price,
		type_id,
		p_code,
		p_detail,
		p_img,
		p_quantity
		)
		VALUES
		(
		'$p_name',
		'$p_price',
		'$type_id',
		'$row[type_code]-$p_code' ,
		'$p_detail',
		'$newname',
		'$p_quantity')";
		
		$result = mysqli_query($con, $sql);// or die ("Error in query: $sql " . mysqli_error());
	
	mysqli_close($con);
	// javascript แสดงการ upload file
	
	
	if($result){
echo "<script type='text/javascript'>";
echo "alert('Add Succesfuly');";
echo "window.location = 'product.php'; ";
echo "</script>";
}
else{
echo "<script type='text/javascript'>";
echo "alert('Error back to upload again');";
echo "window.location = 'product.php'; ";
echo "</script>";
}
?>