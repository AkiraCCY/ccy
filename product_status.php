<?php
session_start();

include('navbar_member.php');
include('link.php');
$m_id = $_SESSION['member_id'];

 
$query = "SELECT * FROM tbl_product_detail as d
				INNER JOIN tbl_product as p ON d.p_id = p.p_id
                INNER JOIN tbl_member as m ON d.member_id = m.member_id
                INNER JOIN tbl_order_detail as o ON d.o_id = o.o_id
                WHERE d.member_id = '$m_id'  ";
                $result1 = mysqli_query($con,$query )or die("Error in query: $query ".mysqli_error());
               

                 
$query1 = "SELECT * FROM tbl_product_detail as d
INNER JOIN tbl_product as p ON d.p_id = p.p_id
INNER JOIN tbl_member as m ON d.member_id = m.member_id
INNER JOIN tbl_order_detail as o ON d.o_id = o.o_id
WHERE d.member_id = '$m_id'  ";
$result2 = mysqli_query($con,$query1 )or die("Error in query: $query1 ".mysqli_error());
$row1 = mysqli_fetch_array($result2);
?>
</br></br></br>
                            
<hr>

 <div class="col-md-4">
 <th style="text-align:center;"><h4>&nbsp;&nbsp;&nbsp;</th>
                            <td>
                            <?php echo $row1['m_name']; ?></h4>
                            </td>
   
      </div>
<div class="">
      <div class="col-md-12">
<table class="table table-bordered table-striped">
                            
                            <thead>
                                
                                <tr>
                                   <th style="width=10px;text-align:center;">img</th>
                                    <th style="width=20px;text-align:center;">สินค้า</th>
                                    <th style="text-align:center;">ราคา (บาท)</th> 
                                    <th style="text-align:center;">จำนวน (ชิ้น)</th> 
                                     <th style="text-align:center;">จำนวนเงินที่ชำระ (บาท)</th>
                                    
                                   
                                    <th style="width=20px;text-align:center;">ที่อยู่จัดส่ง</th>
                                    <th style="width=30px;text-align:center;">วันที่ชำระสินค้า</th>
                                    <th style="width=15px;text-align:center;">สถานะสินค้า</th>
                                    <th style="width=40px;text-align:center;">แจ้งสถานะการจัดส่ง</th>
                                </tr>
                            </thead>
                            <?php
                            $sum=0;
                               while ($row0 = mysqli_fetch_array($result1)) {
                                        ?>
                            <tbody>
                           
                                    <tr>
                                    
                                        <td>
                                           
                                        <img src="backend/p_img/<?php echo $row0['p_img']?> " name="img"  value= "<?php echo $row0['p_img']?> "width="90" height="60">
                                            </a>
                                        </td>
                                        <td>
                                        <?php echo $row0['p_name']; ?>
                                          
                                           
                                        </td>

                                        <td>
                                        <?php echo number_format($row0['p_price'],2); ?>
                                             </td>
                                        <td style="text-align:center" >
                                        <?php echo $row0['d_quantity']; ?>
                                         </td >
                                        <td >
                                        <?php
                                          $sum = $row0["d_quantity"] * $row0["p_price"];
                                        echo number_format($sum,2); ?>
                                         </td >
                                        
                                       
                                        <td width='250px'>
                                       <p> <?php echo $row0['o_address']; ?> </p> 
                                    
                                            
                                        </td>
                                        <td width='200px'>
                                        <?php echo $row0['time_save']; ?>
                                        </td>
                                        <td >
                                        <?php 
                                     
                                     echo $row0['d_status']; ?>
                                       
                                        <p><?php echo $row0['o_ems']; ?></p>
                                        </td>
                                    <?php 
                                    if (  $row0['d_status'] == 'อยู่ในระหว่างการตรวจสอบ'){?>
                                            
                                            <td>
                                   
                                        </td>
                                    <?php }  elseif ( $row0['d_status'] == 'จัดส่งเรียบร้อย'){?>
                                   
                                    
                                        <td>
                                   
                                   </td>
                                    
                                    <?php }   else{ ?>
                                    
                                        <td>
                                        
                                    <a class="btn btn-danger goback"href="member_status.php?id=<?php echo $m_id ?>">
                                        <span class="glyphicon glyphicon-circle-arrow-left"></span>
                                        ได้รับสินค้าแล้ว
                                    </a>
                                      
                                        </td><?php  }  ?>
                                    </tr>
                                    </tbody>
                                    <?php
   }
?>
    </table>
    </div>
</div>
<div class="col-md-2">
<link rel="stylesheet"  href="footer.css">
    
     </div>
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
