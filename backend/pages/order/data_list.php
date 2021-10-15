<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="dd.css">
<?php

include('../../condb.php');



$query = "SELECT * FROM tbl_order_detail as O
			
                INNER JOIN tbl_member as m ON o.member_id = m.member_id
               
                WHERE o.o_status = 'กำลังจัดส่ง' or o.o_status = 'รายการสั่งซื้อถูกยกเลิก'";
                $result1 = mysqli_query($con,$query )or die("Error in query: $query ".mysqli_error());
                $row = mysqli_fetch_array($result1);
?>
<hr>

<table border="2" class="display table table-bordered" id="example1" align="center"  >
<thead>
 
<tr>
                                    <th>รายชื่อลูกค้า</th>
                                    <th>วันเวลาที่สั่งซื้อ</th>
                                    <th width="250px">เลข EMS</th>
                                    <th width="250px">สถานที่จัดส่ง</th>
                                    <th width="250px">  ตรวจสอบหลักฐานการโอน</th>
                                    <th width="160px">สถานะสินค้า</th>
                                   
                                </tr>

</tr>
</thead>
                
<?php   do { 
  
  if($row["o_status"] == 'รายการสั่งซื้อถูกยกเลิก'){   ?>
  <tr >
      <td style=" color: #ff0000;"><?php echo $row["m_name"]; ?></td>
      <td style=" color: #fa8072;"><?php echo $row["timesave"]; ?></td>
      <td style=" color: #ff0000;text-align: center;"><h1>ยกเลิก</h1></td>
      <td style=" color: #fa8072;" ><?php echo $row["o_address"]; ?></td>
      <td><div class="w3-row-padding">
  <div class="w3-container w3-third">
  <img id="myImg" src="../../d_img/<?php echo $row['o_img']?> " name="myImg" style="width:90px;height=60px ;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity"></td>
    <td><a href ="data_check.php?act=show&id=<?php echo $row ['o_id'];?> " class="btn btn-warning btn-sm" style="width:120px;height:30px"> ยืนยัน </a> </td>
         
  <?php } else{    ?>
    <tr >
      <td><?php echo $row["m_name"]; ?></td>
      <td><?php echo $row["timesave"]; ?></td>
      <td><?php echo $row["o_ems"]; ?></td>
      <td><?php echo $row["o_address"]; ?></td>
      <td><div class="w3-row-padding">
  <div class="w3-container w3-third">
  <img id="myImg" src="../../d_img/<?php echo $row['o_img']?> " name="myImg" style="width:90px;height=60px ;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity"></td>
    <td><a href ="data_check.php?act=show&id=<?php echo $row ['o_id'];?> " class="btn btn-warning btn-sm" style="width:120px;height:30px"> ยืนยัน </a> </td>
         

  <?php } ?>


    <?php } while ($row =  mysqli_fetch_assoc($result1)); ?>
   
  
    
  </table> 
                        

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  

}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>


<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:100%">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
