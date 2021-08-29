<?php
session_start();
include('link.php');
include('navbar_member.php');
 
$m_id = $_SESSION['member_id'];
$total= $_GET['total'];

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

<div class="col-md-2">
     </div>
<div class="container">
<h3>&nbsp;&nbsp;&nbsp;&nbsp;ชำระเงิน</h3>
      <div class="col-md-12">
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
                               
                               $total_price=$total + $ff;
                               
                                   ?>
                            <tr>
                             <td colspan="2" style=" text-align: right;">
                                <h6> หลักฐานการชำระเงิน </h6>    <input type="file" name="d_img" id="d_img" class="form-control" required/>
                                <td colspan="3" style=" text-align: right;">
                                    
                                    <h6>รวมราคาสินค้า <?php echo number_format($total,2); ?> บาท
                                    <br>ค่าจัดส่ง 50.00 บาท<br>รวมราคาสุทธิ <?php echo number_format($total_price,2); ?> บาท</h6>
                                    <input type="hidden" name="total" value="<?php echo $total_price;?>">
                                    <input type="hidden" name="address_basic" value="<?php echo $row1['m_address'];?>">
                                    <input type="hidden" name="email_basic" value="<?php echo $row1['m_email'];?>">
                                    <input type="hidden" name="tal_basic" value="<?php echo $row1['m_tel'];?>">
                                </td>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="1" style=" text-align: left;">
                                <h4>&nbsp;&nbsp; ช่องทางการชำระเงิน </h4>
                                
                                <td colspan="4" style=" text-align: left;">
                                <h6>(ท่านสามารถเลือกการชำระเงินโดยผ่่านบัญชีธราคาร ด้านล่างได้ทันที)</h6>
                                </td>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="1" style=" text-align: center;">
                                <img src = "super/k1.jpg" width="150px">  
                                <td colspan="4" style=" text-align: lift;">
                                <h5> ชื่อบัญชี : สุรัตน์ พิณปรุ </h5>  
                                <h5> รหัสบัญชี : 223-2-54555-1 </h5> 
                                <h5> ธนาคาร : กสิกรไทย </h5> 
                                <h5> สาขา : เดอะมอลล์โคราช </h5> 
                                <h5> ประเภท : ออมทรัพย์ </h5>   
                                </td>
                                </td>
                            </tr>
                            <tr>
                                
                                <td colspan="5" style="text-align: right;">
                                
                                
                                    <a class="btn btn-danger goback"href="cart.php">
                                        <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                        ย้อนกลับ
                                    </a>
                                        <input type="submit"   name="add_to_cart"  class="btn btn-success" value="บันทึกการสั่งซื้อสินค้า" />
                                    
                                </td>   
                               
                                
                                   
                                
                            </tr>

                            </form>
                            </tbody>
                        </table>
      </div>
</div>
<a class="nav-link" style=" color: #FF4D00; text-align:right" href="#">
<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-up-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 11.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
 </svg> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>


  <div class="footer">
  <div class="row">
  <div class="col-md-4">
  <p style="color:#ffffff; text-align:left;"> 
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Me
          <hr width=80% size=60 color=ffffff>
           <p style="color:#ffffff; text-align:left;"> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ร้านรัตนะอะไหล่
          </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นร้านจำหน่ายชุดแต่งและอุปกรณ์ซ่อมบำรุง                
          </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อย่างครบวงจรที่ตั้งของร้านอยู่ในเขตจังหวัดนครราชสีมา
          </h5> 
                   
            </p>
            </div>
  <div class="col-md-4">
  <p style="color:#ffffff; text-align:left;">      
   
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;ร้านรัตนะอะไหล่
          <hr width=80% size=60 color=ffffff>
          <p style="color:#ffffff; text-align:left;"> 
          
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        เจ้าของร้าน : นายสุรัตน์ พิณปรุ
           </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ที่ตั้ง : ร้านอยู่ที่บ้านเลยที่ 291 หมู่ 2 ตำบลปรุใหญ่ 
           </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อำเภอเมือง จังหวัดนครราชสีมา 30000
           </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เปิดให้บริการ : 09.00 น. ถึงเวลา 18.00 น.
           </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เบอร์โทรติดต่อ : 081-2648838</p>
           </h5>
           </div>
  <div class="col-md-4">
  <img src="moto/store.jpg"width="50%">
</div>
  
</div>