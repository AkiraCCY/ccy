
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
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <div class="">
              <a class="dropdown-item">
                <i class="far fa-user-circle" data-toggle="modal" data-target="#exampleModal">&nbsp;เข้าสู่ระบบ</i>
                
                
              </a>
              <a class="dropdown-item">
                <i class="far fa-id-card" data-toggle="modal" data-target="#exampleModal2">&nbsp;สมัครสมาชิก</i>
                
                
              </a>
      </div>
    
    
  </div>
</nav>

<!--login.-->
      
<div class="modal fade" id="exampleModal" tabindex="-1" action="checklogin.php" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"  id="exampleModalLabel">เข้าสู่ระบบ</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="exampleDropdownFormEmail2">Username</label>
                  <input type="username" class="form-control" id="exampleDropdownFormEmail2" placeholder="Username" name="m_user" required>
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormPassword2">Password</label>
                  <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" name="m_pass" required>
                </div>
              </form>
            
              <div class="form-group">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dropdownCheck2" style="left: 6%;">
                  <label class="form-check-label" for="dropdownCheck2">
                    Remember me
                  </label>
                </div>
              </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</a>
              <a class="btn btn-primary auth-form-btn"  type="submit" class="button">ยืนยัน</a>
            </div>
          </div>
          </div>
        </div>
      </div>

     
      <!--register-->
    
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"  id="exampleModalLabel">สมัครสมาชิก</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="row">
              <div class="col-md-12">
            <div class="modal-body">
              <form class="pt-3">
                <div class="form-group">
                  <label for="exampleTextarea1">Username</label>
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">ชื่อ-นามสกุล</label>
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="ชื่อ-นามสกุล">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Email</label>
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">รหัสผ่าน</label>
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">ยืนยันรหัสผ่าน</label>
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="ConfirmPassword">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">ที่อยู่</label>
                  <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                </div>
                <?php
                      include_once('address.php')
                ?> 

                <?php
                      include_once('amphures.php')
                ?> 
                <?php
                      include_once('districts.php')
                ?> 
                <div class="form-group">
                  <label for="exampleTextarea1">รหัสไปรษณี</label>
                  <input type="text" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="post">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">เบอร์โทร</label>
                  <input type="text" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="phone">
                </div>
                
                
                
              </form>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    ยินยอมการสมัครสมาชิก
                  </label>
                </div>
                
              <div class="modal-footer">
                <a type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</a>
                <a class="btn btn-primary auth-form-btn" href="index2.html">ยืนยัน</a>
              </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    </div>