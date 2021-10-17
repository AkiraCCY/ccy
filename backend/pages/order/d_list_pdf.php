<?php
 include('../../link.php');
$id = $_GET['id'];
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

	
	$query1= "SELECT * FROM tbl_product_detail as d
	INNER JOIN tbl_product as p ON d.p_id = p.p_id
	INNER JOIN tbl_member as m ON d.member_id = m.member_id
	INNER JOIN tbl_order_detail as o ON d.o_id = o.o_id
	WHERE d.o_id = $id";
	$result1 = mysqli_query($conn,$query1 )or die("Error in query: $query1 ".mysqli_error());
	$row1 = mysqli_fetch_array($result1);

	$query = "SELECT * FROM tbl_product_detail as d
	INNER JOIN tbl_product as p ON d.p_id = p.p_id
	INNER JOIN tbl_type as t ON p.type_id = t.type_id
	INNER JOIN tbl_member as m ON d.member_id = m.member_id
	INNER JOIN tbl_order_detail as o ON d.o_id = o.o_id
	WHERE d.o_id = $id";
	$result = mysqli_query($conn,$query )or die("Error in query: $query ".mysqli_error());
    $content = "";
    
   

	if (mysqli_num_rows($result) > 0) {
		$i = 1;
		while($row = mysqli_fetch_assoc($result)) {
			$content .= '<tr style="border:1px solid #000;">
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$i.'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;" >'.$row['p_code'].'</td>
			
				<td style="border-right:1px solid #000;padding:3px;"  >'.$row['p_name'].'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row['d_quantity'].'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:right;"  >'.number_format($row['p_price'],2).'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:right;"  >'.number_format($row['d_total'],2).'</td>
			</tr>';
			$i++;
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



 <h2 style="text-align:center">ใบเสร็จรับเงิน</h2>
 <h3 style="text-align:right"><font size = "3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <br>เลขที่เอกสาร : '.$row1['o_code'].'  <br>
วันที่ : '.$row1['timesave'].' </font></h3>

<h5 style="text-align:left"><img src="../../images/tee.png" width=150px ><br>
<br>ที่ตั้งร้าน : อยู่ที่บ้านเลยที่ 279 หมู่ 13 ตำบลจอหอ อําเภอเมือง จังหวัดนครราชสีมา 30000 
<br>เลขประจำตัวผู้เสียภาษีอากร : 3065005899
<br>เบอร์โทร : 0819766698
</h5>

<h5 style="text-align:left">ชื่อลูกค้า :&nbsp;'.$row1['m_name'].'  <br> ที่อยู่ :&nbsp;'.$row1['o_address'].'<br>
E-mail :'.$row1['o_email'].'<br>
เบอร์โทร :'.$row1['o_tal'].'
  </h5>


<table id="bg-table" width="100%" style="border-collapse: collapse;font-size:12pt;margin-top:8px;">
    <tr style="border:1px solid #000;padding:4px;">
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;"   width="10%">ลำดับ</td>
		<td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">รหัสสินค้า</td>
	
		<td  width="45%" style="border-right:1px solid #000;padding:4px;text-align:center;">&nbsp;ชื่อสินค้า</td>
		<td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">จำนวน (ชิ้น)</td>
		<td  style="border-right:1px solid #000;padding:4px;text-align:center;"  width="15%">ราคา (บาท)</td>
        <td  style="border-right:1px solid #000;padding:4px;text-align:center;" width="15%">ราคารวม (บาท)</td>
    </tr>

</thead>



	';

$end = "</tbody>;
</table>";
$ems= 50;
$emss= $row1['o_total'] - $ems;
$c = $emss + $ems;
$total =  
'<h3 style="text-align:right"><font size = "3">รวมราคาสินค้า : '.number_format($emss,2).' บาท 
<br>ค่าจัดส่ง : '.number_format($ems,2).' บาท
<br>รวมราคาสุทธิ : '.number_format($c,2).' บาท </h3><br><br><br><br><br>

  
<div class="footer">

<h3 style="text-align:center; color: #000000">ขอบคุณที่อุตหนุนครับ<br>Thank You </h3>

<hr>
  
</div>';


$mpdf->WriteHTML($head);

$mpdf->WriteHTML($content);

$mpdf->WriteHTML($end);

$mpdf->WriteHTML($total);

$mpdf->Output();

