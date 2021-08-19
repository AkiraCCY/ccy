<?php
include('condb.php');

?>


<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">
    <img src="backend/11.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
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

      <ul class="navbar-nav navbar-nav-right">
         
                        
      <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-inverse-success btn-icon" data-toggle="modal" data-target="#exampleModal" > <i class="ti-user"></i> </button> 

              <a class="btn-group" role="group" href="register.php" >
           
          <button type="button"  class="btn btn-inverse-primary ti-user text-primary" ></button>  
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
      
             
      <style>
.modal-content{
background: rgb(210,208,225);
background: linear-gradient(0deg, rgba(210,208,225,1) 0%, rgba(251,251,251,1) 100%);
}

      </style>
       
</body>    



     
      <!--register-->
    
      <div class="modal fade" name="register" action="add_member.php" method="POST" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"  id="exampleModalLabel">สมัครสมาชิก</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="modal-body">
                <form class="pt-3">
                <div class="form-group">
                  <label for="exampleTextarea1">Username</label>
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" id="mem_username" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">รหัสผ่าน</label>
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" id="mem_password" placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">ยืนยันรหัสผ่าน</label>
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="ConfirmPassword" pattern="^[a-zA-Z0-9]+$" minlength="2">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">ชื่อ-นามสกุล</label>
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" id="mem_name"  placeholder="ชื่อ-นามสกุล">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Email</label>
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" id="mem_email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">เบอร์โทร</label>
                  <input type="text" class="form-control form-control-lg" id="exampleInputPassword1" id="mem_tel" placeholder="Phone">
                </div>
                </form>
               </div>
                </div>

                <div class="col-md-6">
                 <div class="modal-body">
                 <form class="pt-3">
                <div class="form-group">
                  <label for="exampleTextarea1">ที่อยู่</label>
                  <textarea class="form-control" id="exampleTextarea1" id="mem_address" rows="1"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">ตำบล</label>
                  <textarea class="form-control" id="exampleTextarea1" id="mem_tb" rows="1"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">อำเภอ</label>
                  <textarea class="form-control" id="exampleTextarea1" id="mem_ap" rows="1"></textarea>
                </div>
                <?php
                      include_once('address.php')
                ?> 
             
                <div class="form-group">
                  <label for="exampleTextarea1">รหัสไปรษณี</label>
                  <input type="text" class="form-control form-control-lg" id="exampleInputPassword1" id="mem_ps" placeholder="post">
                </div>
                
               </form>
               </div>
               </div>


              <div class="col-md-12">
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    ยินยอมการสมัครสมาชิก
                  </label>
                </div>
                
              <div class="modal-footer">
                <a type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</a>
                <button type="submit" class="btn btn-primary auth-form-btn" id="btn"><span class="glyphicon glyphicon-ok"></span> สมัครสมาชิก  </button>
              
     
           </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    
<script>


</script>
    