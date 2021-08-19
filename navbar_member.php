<?php

 $query_product = "SELECT * FROM tbl_member
 where member_id = $member_id ";
	$result =mysqli_query($con, $query_product) or die ("Error in query: $query_product " . mysqli_error());
    $row = mysqli_fetch_array($result);?>

<div class="container-scroller"><link rel="stylesheet" href="form.css"> 
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">
    &nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp
    <img src="super/logo.png" width="130" height="50" class="d-inline-block align-top" alt="">
    
</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
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

        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-inverse-primary ti-shopping-cart text-primary"></button>

             
           
          <button type="button"  class="btn btn-inverse-primary ti-user text-primary" class="nav-link dropdown-toggle" style=" color: #000000; text-align:Below"  
          id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?php echo $row['m_name'] ;?>     
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         
            <a class="dropdown-item" href="edit_member.php">แก้ไขข้อมูลส่วนตัว&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">logout</a>
           
          </div></button>  
             
             
        </div>

       
      
        </div>   </li> 
      
    
    
  </div>
</nav>
 
<script>

function LocationHash() {
  location.replace("index_member.php");
  
}
// Get the modal
var modal = document.getElementById('id01');
window.onclick = function(event) {
  if (event.target == modal) {
        modal.style.display = "none";
        location.href="cart.php";
    }

}
</script>