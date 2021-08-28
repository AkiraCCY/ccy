<?php
session_start();
   include_once('link.php');
   include_once('condb.php');
   $m_id = $_SESSION["member_id"];
   $m_name = $_SESSION["m_name"];
   $p_id = $_GET["id"];
 ?>
<?php include('navbar_member.php'); ?>
<?php
      $sql = "SELECT * FROM tbl_product as p 
              INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
               WHERE p_id =$p_id";
      $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
      $row = mysqli_fetch_array($result);

      
      ?>
      <?php foreach ($result as $row) {?>

      </br> 
      </br> 
      </br> 
      </br> 
<div class="container mt-5 mb-5" >
<form method="post" action="save_session_cart.php?id=<?php echo $p_id ?>&member_id= <?php echo $m_id ?>" method="post">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4">  <img id="myImg" src="backend/p_img/<?php echo $row['p_img']?> " width="400" /> </div>
                            <div class="thumbnail text-center"> <img onclick="change_image(this)" src="backend/p_img/<?php echo $row['p_img']?>" width="70"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1">Back</span> </div> 
                            </div>
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"><?php echo $row['type_name']?> </span>
                                <h4 class="text-uppercase"><?php echo $row['p_name']?></h4>
                                  
                                <div class="price d-flex flex-row align-items-center"> 
                                   <h4><span class="act-price">฿<?php echo number_format( $row['p_price'], 2)?></span></h4>
                                    
                                </div>
                            </div>
                            <p class="about"><?php echo $row['p_detail'] ?></p>
                            <div class="sizes mt-5">
                                     
                            <input type="hidden" name="login" value="<?php echo  $row['p_id'] ?>" />

                      <input type="number" style="border-color: #ff0000" name="quantity" min="1"step="1" value="1"style="width:100px " max="<?php echo $row['p_quantity']?>"  required oninvalid="this.setCustomValidity('กรุณาแก้ไขข้อมูลจำนวนสินค้าเป็นตัวเลขจำนวนเต็ม')">
                            <small class="value">มีสินค้าทั้งหมด <?php echo $row['p_quantity']?> ชิ้น</small>
                                <input type="hidden" name="hidden_name" value="<?php echo $row['p_name']?>" />
                                <input type="hidden" name="hidden_price" value="<?php echo $row['p_price']?>" />
                            </div>
      </br>
                            <input type="submit" name="add_to_cart" class="btn btn-danger " value="Add to cart" >

                          
                           
                       
                </div>
                
              
            </div>
        </div>
       
       
       
    </div>
</div>
<?php } ?>

<body>

             
      <style>
.modal-content{
background: rgb(210,208,225);
background: linear-gradient(0deg, rgba(210,208,225,1) 0%, rgba(251,251,251,1) 100%);
}

      </style>
       
</body>    

<style>
    body {
    background-color: #dcdcdc
}

.card {
    border: none
}

.product {
    background-color: #eee
}

.brand {
    font-size: 13px
}

.act-price {
    color: red;
    font-weight: 700
}

.dis-price {
    text-decoration: line-through
}

.about {
    font-size: 14px
}

.color {
    margin-bottom: 10px
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    padding: 2px 9px;
    border: 2px solid #ff0000;
    display: inline-block;
    color: #ff0000;
    border-radius: 3px;
    text-transform: uppercase
}

label.radio input:checked+span {
    border-color: #ff0000;
    background-color: #ff0000;
    color: #fff
}

.btn-danger {
    background-color: #ff0000 !important;
    border-color: #ff0000 !important
}

.btn-danger:hover {
    background-color: #da0606 !important;
    border-color: #da0606 !important
}

.btn-danger:focus {
    box-shadow: none
}

.cart i {
    margin-right: 10px
}
</style>

<script>
    function change_image(image){

var container = document.getElementById("main-image");

container.src = image.src;
}



document.addEventListener("DOMContentLoaded", function(event) {


});
</script>