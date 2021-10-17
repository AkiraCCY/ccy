<html>
  <head>
  <link  href="css/footer.css" rel="stylesheet" type="text/css">
  <?php
   include_once('link.php');
   include('navbar.php');
 ?>
<?php include('condb.php');?>

  </head>

  <body >

  
  
  <div class="container">
<div class="col-md-2">


      </div>
   
  <div class="content">
    <br>
      <div class="col-md-12">
            
      <h3>สมัครสมาชิก</h3>
            <form  name="register" action="admin/add_member.php" method="POST" class="form-horizontal thumbnail ">
     
            <div class="form-group"align="center">
          <div class="col-sm-10" align="left">
                  <label for="exampleTextarea1">Username</label>
                  <input type="text" name="mem_username"class="form-control form-control-lg"  id="mem_username" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2">
                </div>
                </div>
                <div class="form-group"align="center">
          <div class="col-sm-10" align="left">
                  <label for="exampleTextarea1">รหัสผ่าน</label>
                  <input type="password"  name="mem_password" class="form-control form-control-lg"  id="mem_password" placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2">
                </div>
                </div>
                <div class="form-group"align="center">
          <div class="col-sm-10" align="left">
                  <label for="exampleTextarea1">ยืนยันรหัสผ่าน</label>
                  <input type="password"  name="" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="ConfirmPassword" pattern="^[a-zA-Z0-9]+$" minlength="2">
                </div>
                </div>
                <div class="form-group"align="center">
          <div class="col-sm-10" align="left">
                  <label for="exampleTextarea1">ชื่อ-นามสกุล</label>
                  <input type="text"  name="mem_name" class="form-control form-control-lg"  id="mem_name"  placeholder="ชื่อ-นามสกุล">
                </div>
                </div>
                <div class="form-group"align="center">
          <div class="col-sm-10" align="left">
                  <label for="exampleTextarea1">Email</label>
                  <input type="email"   name="mem_email" class="form-control form-control-lg"  id="mem_email" placeholder="Email">
                </div>
                </div>
                <div class="form-group"align="center">
          <div class="col-sm-10" align="left">
                  <label for="exampleTextarea1">เบอร์โทร</label>
                  <input type="text"  name="mem_tel" class="form-control form-control-lg" id="mem_tel" placeholder="Phone">
                </div>
                </div>
                <div class="form-group"align="center">
          <div class="col-sm-10" align="left">
                  <label for="exampleTextarea1">ที่อยู่</label>
                  <textarea class="form-control"  name="mem_address" id="mem_address" rows="2"></textarea>
                </div>
                </div>
</br>
<div class="form-group"align="center">
<div class="col-sm-12" align="center">
          <button type="submit" class="btn btn-success"  id="btn"><span class="glyphicon glyphicon-ok"></span> สมัครสมาชิก  </button>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a type="button" class="btn btn-danger" href="index2.php"  > ยกเลิก  </a>
          </div>     
      </div>
      </form>
      </div>
     
      </div>
</div>
</div>

      </form>
   
      </body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300;900&display=swap');

body {
  background: #f2f2f2;
}

.container  {
  position: absolute;
  left: 50%;
  top: 52%;
  transform: translate(-50%, -50%);
  height: 87%;
  width: 30%;
  background: #f2f2f2;
  overflow: hidden;
  border-radius: 20px;

  box-shadow: 0 0 20px 8px #d0d0d0;
}

.content {
 
  
  
  text-align: center;
  

  
}

h1 {
  font-weight: 900;
  text-align: center;
}

h3 {
  font-weight: 300;
}


</style>