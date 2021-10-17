<?php
session_start();
include('link.php');
include('navbar_member.php');
 
$m_id = $_SESSION['member_id'];


error_reporting( error_reporting() & ~E_NOTICE );
$sql1 = "SELECT * FROM tbl_product_detail as d
INNER JOIN tbl_product as p ON d.p_id = p.p_id
INNER JOIN tbl_member as m ON d.member_id = m.member_id
WHERE m.member_id = $m_id and d.d_status = 'cart'";
$result1 = mysqli_query($con,$sql1)or die("Error in query: $sql1".mysqli_error());


$sql = "SELECT * FROM tbl_product_detail as d
INNER JOIN tbl_product as p ON d.p_id = p.p_id
INNER JOIN tbl_member as m ON d.member_id = m.member_id
WHERE m.member_id = $m_id and d.d_status = 'cart'";
$result = mysqli_query($con,$sql)or die("Error in query: $sql".mysqli_error());
$row1 = mysqli_fetch_array($result);

?><hr></br></br></br>

<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>ชำระเงิน</b></h4>
                        
                    </div>
                                       
                </div>
            </div>

                        
            <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>รูปสินค้า</th>
                                    <th>สินค้า</th>
                                   
                                    <th style="text-align:center;">ราคา (บาท)</th>
                                    <th style="width: 100px;text-align: center;">จำนวน (ชิ้น)</th>
                                    <th style="width: 50px; text-align:center;">จำนวนเงินรวม</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                               $sum = 0;
                               $sum2 = 0;
                                while ($row0 = mysqli_fetch_array($result1)) {
                                    $total_price = $total_price + $row0['d_total'];
                                    
                                    ?>
                                    <tr>
                                        <td>
                                           
                                        <img src="backend/p_img/<?php echo $row0['p_img']?> " name="img"  value= "<?php echo $row0['p_img']?> "width="90" height="60">
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
                                        <td style="text-align:right;">
                                       
                                            <?php
                                            $sum = $row0["d_quantity"] * $row0["p_price"];
                                            $sum2 = $sum2 + $sum;
                                            echo number_format($sum, 2);  ?>
                                        </td>
                                    </tr>
                                    <?php
   }
 
?>

<td colspan="5" style=" text-align: lift;">
                                ที่อยู่จัดส่งเดิม
                        </td>
                                    <tr>
                                    <th style="width: 180px;">ชื่อผู้ซื้อ</th>
                                    <th style="width: 180px;">อีเมล</th>
                                    <th style="width: 180px;text-align:center;">เบอร์โทรศัพท์</th>
                                    <th colspan="2" style="width: 100px;text-align: center;">สถานที่ติดต่อ</th>
                                
                                </tr>

                                <tr>

                                        <td>
                                            <?php echo $row1['m_name']; ?>
                                            
                                      
                                        </td>
                                        <td>
                                            
                                        <?php echo $row1['m_email']; ?>
                                               
                                            </a>
                                        </td>
                                        <td style="text-align:right;">
                                        <?php echo $row1['m_tel']; ?>
                                           
                                        </td>
                                        
                                        <td colspan="2"  style="text-align:center;">
                                        <?php echo $row1['m_address']; ?>
                                           
                                        </td>
                                       
                                        </td>
                      
                            <form method="POST" action="payment_add_db.php?member_id=<?php echo $m_id?>" enctype="multipart/form-data"> 
                               
                            </tr>
                            <td colspan="5" style=" text-align: lift;">
                                    <h6>เพิ่มที่อยู่จัดส่ง</h6>

                                    <textarea  name="address" rows="2" cols="60" class="form-control" placeholder="กรอกสถานที่ที่ต้องการจัดส่งสินค้า"></textarea>
      

         
   <br>
                                    <h6>เบอร์โทรศัพท์</h6>

                                    <textarea  name="tal" rows="2" cols="60" class="form-control" placeholder="กรอกเบอร์โทรติดต่อ"></textarea>
                                  
                                    </td>
                                    </td>
                              <?php    $ff=50;   
                               
                               $total_price=$sum2 + $ff;
                               
                                   ?>
            </table>
            
                    
                        <br><br>
                        <div class="back-to-shop"><a href="index_member.php">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>คำนวนราคาสินค้า</b></h5>
            </div>
            <hr>

            
            
                                <h6> หลักฐานการชำระเงิน </h6>    <input type="file" name="d_img" id="d_img" class="form-control" required/>
                                <br>
                                    
                                    <h5 style=" text-align: right;">รวมราคาสินค้า <?php echo number_format($sum2,2); ?> บาท</h5>
                                    <h5 style=" text-align: right;">ค่าจัดส่ง 50.00 บาท</h5>
                                    <h5 style=" text-align: right;">รวมราคาสุทธิ <?php echo number_format($total_price,2); ?> บาท</h5>
                                    <input type="hidden" name="total" value="<?php echo $total_price;?>">
                                    <input type="hidden" name="address_basic" value="<?php echo $row1['m_address'];?>">
                                    <input type="hidden" name="email_basic" value="<?php echo $row1['m_email'];?>">
                                    <input type="hidden" name="tal_basic" value="<?php echo $row1['m_tel'];?>">
                               
                                    <br>

                                <h4>&nbsp;&nbsp; ช่องทางการชำระเงิน </h4>
                                
                                
                                <h6>(ท่านสามารถเลือกการชำระเงินโดยผ่่านบัญชีธนาคาร ด้านล่างได้ทันที)</h6>
                            <table class="tabel">    
                            <br>
                            <tr>
                                <td colspan="1" style=" text-align: center;">
                                <img src = "super/k1.jpg" width="150px">  
                                &nbsp&nbsp&nbsp&nbsp&nbsp
                                <td colspan="2" style=" text-align: lift;">
                                <h5> ชื่อบัญชี : วีระสันต์ ศุภวิมลพันธุ์ </h5>  
                                <h5> รหัสบัญชี : 268-2-15937-1 </h5> 
                                <h5> ธนาคาร : กสิกรไทย </h5> 
                                <h5> สาขา : เดอะมอลล์โคราช </h5> 
                                <h5> ประเภท : ออมทรัพย์ </h5>   
                                </td>
                                </td>
                            </tr>
                        </table>
                          <br>
                        <a class="btn btn-danger goback"href="cart.php">
                                        <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                        ย้อนกลับ
                        </a>
                                    <input type="submit"   name="add_to_cart"  class="btn btn-success" value="บันทึกการสั่งซื้อสินค้า"/>
                                    
                                        
                            
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
    max-width: 2500px;
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