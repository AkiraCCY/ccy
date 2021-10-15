<?php
//1. เชื่อมต่อ database:
include('../../condb.php');  error_reporting( error_reporting() & ~E_NOTICE ); //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง 
$query = "
SELECT * FROM tbl_product as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
ORDER BY p.p_id DESC" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>

<script>    
$(document).ready(function() {
    $('#example1').DataTable( {
      "aaSorting" :[[0,'DESC']],
    "lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
    
  });
} );
</script>

<table border="2" class="display table table-bordered" id="example1" align="center"  >
<thead>
  <tr class="info">    
  <th width="10%">รหัสสินค้า</th>
  <th width="15%">ประเภท</th>
  <th width="40%">ชื้อสินค้า</th> 
  <th width="16%">ราคาสินค้า (บาท)</th> 
  <th width="20%">รูปสินค้า</th>
  <th width="20%">จำนวนสินค้า</th>
  <th width="15%">แก้ไข</th>
  <th width="15%">ลบ</th>

</tr>
</thead>
                
<?php while ($row =  mysqli_fetch_assoc($result)) { ?>
  <tr >
      <td><?php echo $row["p_code"]; ?></td>
      <td><?php echo $row["type_name"]; ?></td>
      <td><?php echo $row["p_name"]; ?></td>
      <td><?php echo number_format($row["p_price"]); ?> บาท</td>
      <td ><img src="../../p_img/<?php echo $row ['p_img']?>" width="150" height="120"></td>
      <td ><?php echo $row["p_quantity"]; ?></td>
      
      <td><a href="product.php?act=edit&ID=<?php echo $row ['p_id']; ?>" class="btn btn-warning btn-sm"> edit </a> </td>
      <td><a href="product_del_db.php?ID=<?php echo $row['p_id']; ?>" class='btn btn-danger btn-sm'  onclick="return confirm('ยันยันการลบ')">ลบ</a> </td>
    </tr>
    <?php }  ?>
  
    
  </table> 

