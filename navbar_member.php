<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index2.php"><img src="backend/images/logoccymini.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index2.php"><img src="backend/images/Logoccy.png" alt="logo"/></a>
      </div>
      
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler " type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>

          <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
          <form class="form-inline my-2 my-lg-0"> 
            <form action="index2.php" method="get" >
                  <input class="form-control mr-sm-3" style="width: 100%;" type="search" name="act1" placeholder="Search" aria-label="Search">
                   </form>
                 </form> 
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <i class="icon-head menu-icon"></i>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-user text-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">&nbsp;เข้าสู่ระบบ</i>
                
                
              </a>
              <a class="dropdown-item">
                <i class="ti-clipboard text-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">&nbsp;สมัครสมาชิก</i>
                
                
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="ti-shopping-cart-full"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
          
      </div>
    </nav>
     <!--ตะกร้าสินค้า-->
     <div id="right-sidebar" class="settings-panel">
      <i class="settings-close ti-close"></i>
      <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">ตะกร้าสินค้า</a>
        </li>
        
      </ul>
      <div class="tab-content" id="setting-content">
        <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
          <div class="add-items d-flex px-3 mb-0">
            <form class="form w-100">
              <div class="form-group d-flex">
                <input type="text" class="form-control todo-list-input" placeholder="รายการสินค้า">
              </div>
            </form>
            
          </div> 
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ชื่อสินค้า</th>
                <th scope="col">ราคาสินค้า</th>
                <th scope="col">จำนวน</th>
                <th scope="col">ราคารวม</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>สินค้า A</td>
                <th scope="row">50</th>
                <th scope="row">1</th>
                <th scope="row">50</th>
              </tr>
              <tr>
                <td>สินค้า A</td>
                <th scope="row">50</th>
                <th scope="row">1</th>
                <th scope="row">50</th>
              </tr>
              <tr>
                <td>สินค้า A</td>
                <th scope="row">50</th>
                <th scope="row">1</th>
                <th scope="row">50</th>
              </tr>
              <tr>
                <td><h4>Total</h4></td>
                <th scope="row"></th>
                <th scope="row"></th>
                <th scope="row">150</th>
              </tr>
            </tbody>
          </table>
          <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">ชำระเงิน</button>
        </div>
      </div>
    </div>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!--เปลี่ยนธีม-->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- Menu -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">ประเภทสินค้า</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">ประเภท A</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">ประเภท B</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">ประเภท C</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">ตรวจสอบสินค้า</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="ti-credit-card menu-icon"></i>
              <span class="menu-title">วิธีการชำระเงิน</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">
              <i class="ti-info-alt menu-icon"></i>
              <span class="menu-title">เกี่ยวกับ</span>
            </a>
          </li>
          
        </ul>
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
                  <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="Username" name="m_user" required>
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
                <div class="form-group">
                  <label for="exampleTextarea1">จังหวัดที่อยู่</label>
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option>จังหวัด</option>
                    <option>กรุงเทพ</option>
                    <option>เชียงใหม่</option>
                    <option>นครราชสีมา</option>
                    <option>ขอนแก่น</option>
                    <option>อุบล</option>
                  </select>
                </div>
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
 