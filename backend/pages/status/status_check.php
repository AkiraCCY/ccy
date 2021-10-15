<link rel="stylesheet" href="dd.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
include('../../condb.php');
include('../../link.php');
include('../../navbar.php');

$sell = $_GET['id'];

$query = "SELECT * FROM tbl_product_detail as d
				INNER JOIN tbl_product as p ON d.p_id = p.p_id
                INNER JOIN tbl_member as m ON d.member_id = m.member_id
                INNER JOIN tbl_order_detail as o ON d.o_id = o.o_id
                WHERE d.o_id = $sell";
                $result1 = mysqli_query($con,$query )or die("Error in query: $query ".mysqli_error());
                $row = mysqli_fetch_array($result1);?>
</br></br>
</style>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script>
		$(function() {
			$(".preload").fadeOut(1000, 
		function() {
			$(".content").fadeIn(200);
		});
		});
		</script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  
 
  <!-- css data table -->
   <link rel="stylesheet" href="../../vendors/datatables.net/semantic.min.css">
   <link rel="stylesheet" href="../../vendors/datatables.net/dataTables.semanticui.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  

  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
 
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <style>

</style>
</head>
<div class="">
      <div class="col-md-12">
<table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>รูปสินค้า</th>
                                    <th>สินค้า</th>
                                   
                                    <th style="text-align:center;">ราคา/หน่วย</th>
                                    <th style="width: 100px;text-align: center;">จำนวน</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                               
                                foreach ($result1 as $row0) {
                                
                                    
                                    ?>
                                    <tr>
                                        <td>
                                           
                                        <img src="../../p_img/<?php echo $row0['p_img']?> " name="img"  value= "<?php echo $row0['p_img']?> "width="90" height="60">
                                            </a>
                                        </td>
                                        <td>
                                            
                                                <?php echo $row0['p_name']; ?>
                                                <input type="hidden" name="" value="<?php echo $row0['p_id']?>"> 
                                            </a>
                                        </td>
                                        </td>
                                      

                                        <td style="text-align:right;">
                                            <?php echo number_format($row0['p_price'], 2); ?>
                                            <input type="hidden" name="" value="<?php echo $row0['p_price'];?>">
                                        </td>
                                        <td style="text-align: right;">
                                        <?php echo $row0['d_quantity']; ?>
                                            <input type="hidden" name="" value="<?php echo $row0['d_quantity']; ?>">
                                        </td>
                                       
                                    </tr>
                                    <?php
   }
 
   
?>
<td colspan="1" style=" text-align: left;">
<h4> หลักฐานการชำระเงิน </4>

   
   </td>
<td colspan="1" style=" text-align: left;">
<div class="w3-row-padding">
<div class="w3-container w3-third">
  <img id="myImg" src="../../d_img/<?php echo $row['o_img']?> " name="myImg" style="width:90px;height=60px ;cursor:pointer" 
    onclick="onClick(this)" class="w3-hover-opacity"></td>
</div>
</div>
   </td>


<td colspan="2" style=" text-align:right;">
<h5> ค่าจัดส่ง 50 บาท <br>ราคารวม 
    <?php  echo number_format($row0['o_total'], 2);  ?> </h5>   
   
   </td>
<tr>
   <td colspan="2" style=" text-align: left;">
   <form  name="addproduct" action="status_finish.php?id=<?php echo $sell ?>" method="POST" enctype="multipart/form-data"  class="form-horizontal">
<div class="col-sm-12">
<h4>เลขพัสดุ</h4>
</br>
            <input type="text"  name="p_price" class="form-control" required placeholder="กรุณาใส่เลขพัสดุ" />
          </div>
          
<td colspan="1" style=" text-align: center;">
</br>
<button type="submit" class="btn btn-success" name="btnadd"  style="width:150px;height:50px"> <h4>บันทึก</h4> </button>
<a class="btn btn-warning "href="status_drop.php?id=<?php echo $sell ?>"style="height:50px">
                                        <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                       <h4>ยกเลิกรายการ</h4>
                                </a>
</form>

<form  name="addproduct" action="pdf.php?id=<?php echo $sell ?>" method="POST" enctype="multipart/form-data"  class="form-horizontal">
<td colspan="1" style=" text-align: center;">
</br>
<button type="submit" class="btn btn-success" name="btnadd"  style="width:100%;height:50px"> <h4>พิมพ์รายละเอียดการสั่งซื้อ</h4> </button>
</br>
</form>
   </td></tr>


                            </tbody>
                        </table>
      </div>
</div>

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
