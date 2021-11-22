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

	
	$query1= " SELECT * FROM tbl_product as p 
	INNER JOIN tbl_type  as t ON p.type_id = t.type_id 
	ORDER BY p.p_id ASC" or die("Error:" . mysqli_error());
	$result1 = mysqli_query($conn,$query1 )or die("Error in query: $query1 ".mysqli_error());
	$row = mysqli_fetch_array($result1);
	$content = "";
		 

	if (mysqli_num_rows($result1) > 0) {
		$i = 1;
					
			
		while($row = mysqli_fetch_assoc($result1)) {
			$content .= '<tr style="border:1px solid #000;">
				
				<td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$row['p_code'].'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$row['type_name'].'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row['p_name'].'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center; "  >'.$row['p_detail'].'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row['p_quantity'].'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.number_format($row['p_price'],2).'</td>
				
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


<h5 style="text-align:left"><img src="../../images/tee.png" width=150px >
 <h2 style="text-align:center">รายงานข้อมูลสินค้า</h2>
 <h3 style="text-align:right"><font size = "3">




<table id="bg-table" width="100%" style="border-collapse: collapse;font-size:12pt;margin-top:8px;">
    <tr style="border:1px solid #000;padding:4px;">
        
		<td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="10%">รหัสสินค้า</td>
		<td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="10%">ประเภทสินค้า</td>
		<td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="10%">สินค้า</td>
		<td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="8%">รายละเอียดสินค้า</td>
		<td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="8%">จำนวนสินค้า</td>
		<td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">ราคาสินค้า(บาท)</td>


        
    </tr>

</thead>



	<tbody>';

$end = "</tbody>;
</table>";


$mpdf->WriteHTML($head);


$mpdf->WriteHTML($content);

$mpdf->WriteHTML($end);



$mpdf->Output();

