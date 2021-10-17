<?php
include('condb.php');
$m_name =  $_SESSION["m_name"];
$m_id = $_SESSION['member_id'];
?>
<?php $query_product = "SELECT * FROM tbl_type
order by type_id DESC";

$query_type = "SELECT * FROM tbl_type ORDER BY type_id ASC";
$result_type =mysqli_query($con, $query_type) or die ("Error in query: $query_type " . mysqli_error());
  // echo($query_type);
  // exit()

?>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index_member.php">
<img src="backend/images/tee.png" width="100" height="30" class="d-inline-block align-top" alt="">
</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index_member.php">หน้าหลัก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ประเภทสินค้า
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php	foreach ($result_type as $row )  { ?>

        
          <a class="dropdown-item" href="index2.php?act=showbytype&type_id=<?php echo $row['type_id'];?>"><?php echo $row["type_name"]; ?></a>
          
        
      
      <?php
      }
    ?>
  </div>  
  </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="payment.php">ชำระสินค้า<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="product_status.php">ตรวจสอบสินค้า<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="adout.php">เกี่ยวกับ<span class="sr-only">(current)</span></a>
      </li>
      
      
  
      
    </ul>
    <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
             
            <form action="index2.php" method="get" >
                  <input class="form-control mr-sm-3" style="width: 100%;" type="search" name="act1" placeholder="Search" aria-label="Search">
                   </form>
                 </form>
            </div>
          </li>
        </ul>

        <ul class="navbar-nav navbar-nav-right">

        <a class="btn btn-inverse-primary ti-shopping-cart" href="cart.php"></a> 
         
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle btn btn-inverse-primary ti-user" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $m_name ?>
           </a>   
           <div class="dropdown-menu dropdown-menu-right"  >
             <a class="dropdown-item btn btn-inverse-primary" href="edit_mem.php">แก้ไขข้อมูลส่วนตัว</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item btn btn-inverse-primary" href="index2.php">ออกจากระบบ</a>
           </div>
         </li>
                </div>
             </ul>
      </div>
</nav>
</body> 




      
             
      <style>
body {
    font-family: sans-serif;
    font-size: 0.8rem;
    font-weight: bold
}


.modal-content{
background: rgb(210,208,225);
background: linear-gradient(0deg, rgba(210,208,225,1) 0%, rgba(251,251,251,1) 100%);
}


      </style>
       
   

