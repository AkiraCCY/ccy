
<?php
session_start();

include_once('condb.php');

include_once('navbar.html')
 
 error_reporting( error_reporting() & ~E_NOTICE );
 $add =$_GET['add'];


 $m_id = $_SESSION['member_id'];





	if(isset($_GET["action"])){

			if($_GET["action"] == "delete"){

				$sql ="DELETE FROM tbl_product_detail WHERE member_id ='$m_id' AND p_id='$_GET[id]' and d_status ='cart'";
				$query01 = mysqli_query($con,$sql) or die ("Error in query: $sql " . mysqli_error());





			}


	}


	
 ?>
 <link rel="stylesheet"  href="footer.css">
  <div class="col-md-2">
     
     <?php include('menu.php'); ?>
     </div>
   </br>
<!DOCTYPE html>
<html>
	<head>
    <link rel="stylesheet" href="style.css">
	</head>
	<body>
		
	
		<div class="container">
			
			<?php
				$query = "SELECT * FROM tbl_product_detail as d
				INNER JOIN tbl_product as p ON d.p_id = p.p_id
				INNER JOIN tbl_member as m ON d.member_id = m.member_id
                WHERE d.member_id = $m_id and d_status = 'cart'";
				$result = mysqli_query($con, $query)or die ("Error in query: $query " . mysqli_error());
				$row = mysqli_fetch_array($result);
				
	
				
				// if($row == 'Array') {

				
				
				?>


			<div class="col-md-4">
				
			</div>
			<?php
				
				
			?>
			<div style="clear:both"></div>
			<br />
			<h3>&nbsp;&nbsp;ตะกร้าสินค้า</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
					<th style="width:10px;text-align:center;">รูปสินค้า</th>
						<th style="width:30px">ชื่อสินค้า</th>
						<th style="width: 10px;text-align: right;">จำนวน</th>
						<th style="width: 20px;text-align: right;">ราคา (บาท)</th>
						<th style="width: 20px;text-align: right;">รวมราคา (บาท)</th>
						<th style="width:13%">ลบเลยก็แล้วกัน!</th>
						
					</tr>
					<?php

						foreach ($result as $row_pro){
							

						
								$sum = $row_pro['d_quantity'] * $row_pro['p_price'];

						
							// echo $pp;
							?>
							 
					<tr>	
					<td><img src="backhome/p_img/<?php echo $row_pro['p_img']?> " name="img"  value= "<?php echo $row0['p_img']?> "width="90" height="60"></a>
						</td>	
						<td><?php echo $row_pro["p_name"]; ?></td>
						
						<td align="right"><?php echo $row_pro['d_quantity']?></td>
						<td align="right"><?php echo number_format($row_pro["p_price"], 2); ?></td>
						<td align="right"><?php echo number_format($sum, 2);?></td>
						<td align="center"><a href="cart.php?action=delete&id=<?php echo $row_pro["p_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							
							
							$total =  $total + $sum;
							// $total = $total + $row_pro["d_total"];
						}
					?>
					<tr>
						<td colspan="4" align="right">Total</td>
						<td align="right"><?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<tr>
					<td colspan="2" style="text-align: left;">
                                <a class="btn btn-warning goback"href="index_member.php">
                                        <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                        เลือกซื้อสินค้าต่อ
                                </a>
                                </td>
						<td colspan="2" align="right"></td>
						
						
						<td align="right"><a class="btn btn-primary" href="cart_add_db.php?total=<?php echo $total ?>" role="button">ชำระสินค้า</a></td>

						
					</tr>
				
					<?php
					
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	
	</body>
</html>
<?php  
	
		
	
// 	else{
// 		?>
<!-- // <hr>
// 	<table class="table table-striped table-bordered table-hover">
//     						<td colspan="10"  align="center">ไม่มีสินค้าอยู่ในตะกร้า</td>	 -->
						
// 						<br />   <br />   <br />   <br /> 	
// 					</table><br />   <br />   <br />   <br />
// 					<!-- <hr> -->
<!-- 		
		 <!-- -->
					
  
</div> -->
<!-- <form action="cart.php?action=remove&id=$productid" method="post" class="cart-items">
                    <div class="border rounded">
                        <div class="row bg-white">
                            <div class="col-md-3 pl-0">
                                <img src=$productimg alt="Image1" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h5 class="pt-2">$productname</h5>
                                <small class="text-secondary\">Seller: dailytuition</small>
                                <h5 class="pt-2">$$productprice</h5>
                                <button type="submit" class="btn btn-warning">Save for Later</button>
                                <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
                            </div>
                            <div class="col-md-3 py-5\">
                                <div>
                                    <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus"></i></button>
                                    <input type="text" value="1" class="form-control w-25 d-inline">
                                    <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
 -->
<!-- 

 <?php
$testarray=array(
   (object)array('id'=>1, 'name'=>'stockname1', 'packing'=>1),
   
);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test Button inc-dec</title>
<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
<script src="asset/js/jquery-1.11.3.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$('.qty-minus').click(function(){
		var pkg = parseInt($(this).data('package'));
		var qty = $(this).parent().find('.span1').eq(0);
		var val = parseInt($(qty).val());
		if(val<pkg){
			$(qty).val(0);
		}else{
			$(qty).val(val - pkg);
		}
	});
	$('.qty-plus').click(function(){
		var pkg = parseInt($(this).data('package'));
		var qty = $(this).parent().find('.span1').eq(0);
		var val = parseInt($(qty).val());
		$(qty).val(val + pkg);	
	});
});
</script>
</head>
<body>
<div class="container">
<form>
<?php foreach($testarray as $row):?>
	<div class="row">
	<label><?=$row->name?></label>

	<button type="button" class="qty-minus btn btn-danger" data-package="<?=$row->packing?>"><i class="fas fa-minus"></i></button>
	<input type="text" name="txtQua[<?=$row->id?>]" class="span1 input-number" value="0" readonly>

	<button type="button" class="qty-plus btn btn-success" data-package="<?=$row->packing?>"><i class="fas fa-plus"></i></button>
	</div>
<?php endforeach;?>
</form>
</div>
</body>
</html> -->