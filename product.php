<!DOCTYPE html>
<html lang="en">
<?php

include_once('condb.php');
$p_id = $_GET["id"];
?>


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CC-Y</title>
  
  <?php
   include_once('link.php');
 ?>  

</head>
<body>
 
 <?php
   include_once('navbar.html');
 ?>  
  

<?php
      $sql = "SELECT * FROM tbl_product as p 
              INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
               WHERE p_id =$p_id";
      $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
      $row = mysqli_fetch_array($result);

      
      ?>
      <?php foreach ($result as $row) {?>
     
      <!-- คำนำ -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h4 class="font-weight-bold">หน้าสินค้า</h4>
                </div>
                </div>
            </div>
          </div>

          <div class="container">
    
<form  action="checklogin_detail.php?id=<?php echo $p_id ?>" method="post">        
  <div class="row text-left ">
  
              <div class="col-md-10"><br><br>
                  <div class="container"   >
                    <div class="row">
                      <div class="col-md-6 pl-0">
                        <div class="polaroid">
                        
                        <img id="myImg" src="backhome/p_img/<?php echo $row['p_img']?> "  width="450" height="370">
                        </div>
                      </div>
                      <div class="col-md-6" >
                        <h3>ชื่อสินค้า : <?php echo $row['p_name']?></h3>
                        <p>
                          ประเภทสินค้า : <?php echo $row['type_name']?> 
                        </p>
                        <p>
                        ราคาสินค้า : <?php echo number_format( $row['p_price'], 2)?> บาท
                        </p>
                        <?php   if(  $row['p_quantity'] <= '0') {?>

<p>  จำนวนสินค้าที่ซื้อได้ :<font color="red">  สินค้าหมด</font></p>

<?php   } else{?>
<p>
<p>  จำนวนสินค้าที่ซื้อได้ : <?php echo $row['p_quantity']?> ชิ้น</p>
</p>

<?php    }?>

                        จำนวนสินค้า : 
                      
                        <input type="number" name="quantity" min="1"step="1" value="1"style="width:100px " max="<?php echo $row['p_quantity']?>"  required oninvalid="this.setCustomValidity('ฒกรุณาแก้ไขข้อมูลจำนวนสินค้าเป็นตัวเลขจำนวนเต็ม')">  
                      
                        <input type="hidden" name="hidden_name" value="<?php echo $row['p_name']?>" />

          
                        <input type="hidden" name="hidden_price" value="<?php echo $row['p_price']?>" />
                    <p></br> 
                        <input type="submit"onclick="document.getElementById('id83').style.display='block'" name="add_to_cart"  class="btn btn-outline-success btn-lg" value="ตะกร้าสินค้า" >
                       
                       </p>
                      
                       <table class="table table-bordered table-striped">
                       
<thead>
                                <tr>
                                    <th>รายละเอียดสินค้า</th>
                                   
                                </tr>
                            </thead>
                            
   <td><?php echo $row['p_detail'] ?></td> 
  </table>
  
 
  
  </td>
 
                      </div>
                      </div>
                      </div>
                      </div>
    <?php } ?>
      
            
                  </p>
          </div>
        </div>


          
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
  </script>
 
</body>

</html>