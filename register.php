<?php
   include_once('link.php');
 ?>

<h3>&nbsp;&nbsp; สมัครสมาชิก</h3>

<?php include('condb.php');?>
<form  name="register" action="add_member.php" method="POST" class="form-horizontal thumbnail ">
       <div class="form-group">
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
      <div class="form-group">
          <div class="col-sm-5" align="right">
          <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> สมัครสมาชิก  </button>
          </div>     
      </div>
      </form>