<html>
  <head>
  <?php
   include_once('link.php');
   include('navbar.php');
 ?>
<?php include('condb.php');?>

  </head>

  <body>



  <h3>สมัครสมาชิก</h3>

<div class="card">
<div class="main">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 ">
              
            <form  name="register" action="admin/add_member.php" method="POST" class="form-horizontal thumbnail ">
     
       <div class="form-group">
                  <label for="exampleTextarea1">Username</label>
                  <input type="text" name="mem_username"class="form-control form-control-lg"  id="mem_username" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">รหัสผ่าน</label>
                  <input type="password"  name="mem_password" class="form-control form-control-lg"  id="mem_password" placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">ยืนยันรหัสผ่าน</label>
                  <input type="password"  name="" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="ConfirmPassword" pattern="^[a-zA-Z0-9]+$" minlength="2">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">ชื่อ-นามสกุล</label>
                  <input type="text"  name="mem_name" class="form-control form-control-lg"  id="mem_name"  placeholder="ชื่อ-นามสกุล">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Email</label>
                  <input type="email"   name="mem_email" class="form-control form-control-lg"  id="mem_email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">เบอร์โทร</label>
                  <input type="text"  name="mem_tel" class="form-control form-control-lg" id="mem_tel" placeholder="Phone">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">ที่อยู่</label>
                  <textarea class="form-control"  name="mem_address" id="mem_address" rows="1"></textarea>
                </div>
                
                <div class="form-group">
                  <label for="exampleTextarea1">รหัสไปรษณี</label>
                  <input type="text" class="form-control form-control-lg"   name="mem_ps" id="mem_ps" placeholder="post">
                </div>
      <div class="form-group">
          <div class="col-sm-5" align="right">
          <button type="submit" class="btn btn-success"  id="btn"><span class="glyphicon glyphicon-ok"></span> สมัครสมาชิก  </button>
          </div>     
      </div>
      </form>
      </div>
      </div>
      </div>
      </div>
    </div>
     
      </body>
</html>
<style>
.card {
    
    margin: 50px;
    max-width: auto;
    width: auto;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    
    
}

.main {
    width: 40%;    
    
}


</style>