
<?php
session_start();
include('condb.php');

include_once('link.php');


 




 $m_id = $_SESSION['member_id'];


include('navbar_member.php'); 


	if(isset($_GET["action"])){

			if($_GET["action"] == "delete"){

				$sql ="DELETE FROM tbl_product_detail WHERE member_id ='$m_id' AND p_id='$_GET[id]' and d_status ='cart'";
				$query01 = mysqli_query($con,$sql) or die ("Error in query: $sql " . mysqli_error());





			}


	}


	
 ?>

<?php
				$query = "SELECT * FROM tbl_product_detail as d
				INNER JOIN tbl_product as p ON d.p_id = p.p_id
				INNER JOIN tbl_member as m ON d.member_id = m.member_id
                INNER JOIN tbl_type as t ON p.type_id = t.type_id
                WHERE d.member_id = $m_id and d_status = 'cart'";
				$result = mysqli_query($con, $query)or die ("Error in query: $query " . mysqli_error());
				$row = mysqli_fetch_array($result);
				
	
				
				// if($row == 'Array') {

				
				
				?>



<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>ตะกร้าสินค้า</b></h4>
                        
                    </div>
                                       
                </div>
            </div>
             <?php include('cart_dlc.php');?>
             <br>
            <?php
$total = 0;
$item = 0;
$shipping = 50;
$total2 = 0;
                    

						foreach ($result as $row_pro){
							

						
								$sum = $row_pro['d_quantity'] * $row_pro['p_price'];
                                						
							// echo $pp;
							?>
							 <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img src="backend/p_img/<?php echo $row_pro['p_img']?> " name="img"  value= "<?php echo $row0['p_img']?> "width="90" height="60"></div>
                    <div class="col">
                        <div class="row text-muted"><?php echo $row_pro["type_name"]; ?></div>
                        <div class="row"><?php echo $row_pro["p_name"]; ?></div>
                    </div>
                    <div class="col">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                         ฿<?php echo number_format($row_pro["p_price"], 2); ?></div>
                    <div class="col"> <a href="#">-</a><?php echo $row_pro['d_quantity']?><a href="#">+</a> </div>
                    <div class="col"> <a href="cart.php?action=delete&id=<?php echo $row_pro["p_id"]; ?>"><span class="text-danger">ลบ</span></a></div>
                </div>
            </div>
            <?php
							
							
							$total =  $total + $sum;
                            $v = $row_pro['d_quantity'];
                            $item = $item + $v;
                            $total2 = $total + $shipping;

						}
					?>
                    
                        <br><br>
                        <div class="back-to-shop"><a href="index_member.php">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>คำนวนราคาสินค้า</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">จำนวน <?php echo number_format($item); ?> ชิ้น</div>
                <div class="col text-right">฿<?php echo number_format($total, 2); ?></div>
            </div>
            <form>
            <br>
                <p>การจัดส่งสินค้า</p> <select>
                    <option class="text-muted">Standard-Delivery- ฿50.00</option>
                </select>
            </form>
            <br>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">รวมราคา</div>
                <div class="col text-right">฿<?php echo number_format($total2, 2); ?></div>
            </div> 
            <br>
            <a class="btn btn-danger text-uppercase mr-2 px-4" href="payment.php?total=<?php echo $total ?>" role="button">ชำระสินค้า</a>
        </div>
    </div>
</div>

<style>

body {
    background: #ddd;
    min-height: 100vh;
    vertical-align: middle;
    display: flex;
    font-family: sans-serif;
    font-size: 0.8rem;
    font-weight: bold
}

.title {
    margin-bottom: 5vh
}

.card {
    margin: auto;
    max-width: 1500px;
    width: 90%;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 1rem;
    border: transparent
}

@media(max-width:767px) {
    .card {
        margin: 3vh auto
    }
}

.cart {
    background-color: #fff;
    padding: 4vh 5vh;
    border-bottom-left-radius: 1rem;
    border-top-left-radius: 1rem
}

@media(max-width:767px) {
    .cart {
        padding: 4vh;
        border-bottom-left-radius: unset;
        border-top-right-radius: 1rem
    }
}

.summary {
    background-color: #ddd;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 1rem;
    padding: 4vh;
    color: rgb(65, 65, 65)
}

@media(max-width:767px) {
    .summary {
        border-top-right-radius: unset;
        border-bottom-left-radius: 1rem
    }
}



.row {
    margin: 0
}

.title b {
    font-size: 1.5rem
}

.main {
    margin: 0;
    padding: 2vh 0;
    width: 100%
}

select {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 1.5vh 1vh;
    margin-bottom: 4vh;
    outline: none;
    width: 100%;
    background-color: rgb(247, 247, 247)
}



.btn {
    color: white;
    width: 100%;
}



.btn:hover {
    color: white
}

a {
    color: black
}

a:hover {
    color: black;
    text-decoration: none
}


</style>