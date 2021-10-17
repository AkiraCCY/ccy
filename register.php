<html>
  <head>
  <link  href="css/footer.css" rel="stylesheet" type="text/css">
  <?php
   include_once('link.php');
   include('navbar.php');
 ?>
<?php include('condb.php');?>

  </head>

  <body style="background-image: url('super/bg01.jpg');">

  <h3>สมัครสมาชิก</h3>
  
<div class="card">
<div class="row">
<div class="main" >
        <div class="content-wrapper">
          <div class="row" >
            <div class="col-md-12 ">
              
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
                  <textarea class="form-control"  name="mem_address" id="mem_address" rows="4"></textarea>
                </div>
                
              <div class="form-group">
          <div class="col-sm-8" align = "right">
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
      <div class="col-sm-6 ">
        <img src="backend/images/Logoccy.png" style="max-width: 100%;">
                </div>
      </div>
      
      
    </div>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
      </body>
</html>
<style>

body {
    font-family: sans-serif;
    font-size: 0.8rem;
    font-weight: bold
}

.card {    
    margin: 150px;
    width: auto;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    
    
}

.main {
    width: 50%; 
    background: #000;
       
    
}


</style>