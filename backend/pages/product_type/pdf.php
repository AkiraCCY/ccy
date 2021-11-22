<?php

	//เรียกใช้ไฟล์ autoload.php ที่อยู่ใน Folder vendor
	require_once __DIR__ . '../../vendor/autoload.php';
	
	//ตั้งค่าการเชื่อมต่อฐานข้อมูล
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pro";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	mysqli_set_charset($conn, "utf8");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	
	$query1= "SELECT * FROM tbl_type";
	$result1 = mysqli_query($conn,$query1 )or die("Error in query: $query1 ".mysqli_error());
	$row = mysqli_fetch_array($result1);
	$content = "";
		 

	if (mysqli_num_rows($result1) > 0) {
		$i = 1;
					
			
		while($row = mysqli_fetch_assoc($result1)) {
			$content .= '<tr style="border:1px solid #000;">
				
				<td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$row['type_code'].'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$row['type_name'].'</td>
			
			</tr>';
			
			
		}
	}
	

	mysqli_close($conn);
	
	$mpdf = new \Mpdf\Mpdf();

$head = '
<style>
	body{
		font-family: "Garuda";//เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
	}
</style>



 <h2 style="text-align:center">รายงานประเภทสินค้า</h2>
 <h3 style="text-align:right"><font size = "3">

 


<h5 style="text-align:left"><img src="../../images/tee.png" width=150px >


<table id="bg-table" width="100%" style="border-collapse: collapse;font-size:12pt;margin-top:8px;">
    <tr style="border:1px solid #000;padding:4px;">
	<td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="50%">รหัสประเภท</td>
		<td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="50%">ประเภทสินค้า</td>
	

        
    </tr>

</thead>



	<tbody>';

$end = "</tbody>;
</table>";



$mpdf->WriteHTML($head);

$mpdf->WriteHTML($content);

$mpdf->WriteHTML($end);



$mpdf->Output();

