<?php
include('condb.php');

?>
<?php $query_product = "SELECT * FROM tbl_type
order by type_id DESC";

$query_type = "SELECT * FROM tbl_type ORDER BY type_id ASC";
$result_type =mysqli_query($con, $query_type) or die ("Error in query: $query_type " . mysqli_error());
  // echo($query_type);
  // exit()

?>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" >
<a class="navbar-brand" href="#">
    <img src="backend/11.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index2.php">หน้าหลัก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ประเภทสินค้า
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php
		foreach ($result_type as $row )  { ?>

        
          <a class="dropdown-item" href="index.php?act=showbytype&type_id=<?php echo $row['type_id'];?>"><?php echo $row["type_name"]; ?></a>
          
        
      
      <?php
      }
    ?>
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

      <ul class="navbar-nav navbar-nav-right">
         
                        
      <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-inverse-primary btn-icon" data-toggle="modal" data-target="#exampleModal" > <i class="ti-user"></i> </button> 

              <a class="btn-group" role="group" href="register.php" >
           
          <button type="button"  class="btn btn-inverse-primary ti-clipboard text-primary" ></button>  
</a>
             
        </div>
             </div>
          </ul>
      </div>
</nav>




<body>
<!--login.-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
<form  action="checklogin.php" method="post">        
    <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              

                <div class="form-group">
                  <label for="m_name" class="col-form-label">user name:</label>
                  <input type="text" class="form-control" id="m_name" name="m_user" required>
                </div>
                <div class="form-group">
                  <label for="m_name" class="col-form-label">Password:</label>
                  <input type="password" class="form-control"  id="m_pass" name="m_pass" required >
                </div>
               
                
              
              

              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
              <button type="submit"  class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </form>
      </div>
      
             
     
       
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