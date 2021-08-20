<!DOCTYPE html>
<html lang="en">
<link  href="css/footer.css" rel="stylesheet" type="text/css">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CC-Y</title>
  <?php
   include_once('link.php')
  ?>  
 
 
</head>
<body>
    
    
      <!-- คำนำ -->
      <div class="main">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12 ">
              <div class="row">
                <div class="col-12 ">
                <?php
   include_once('navbar.php')
  ?>
        
        </div>
                </div>
            </div>
            </div>

  
        <!--รูป-->
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="5000">
                <img src="super/super01.png" class="d-block w-100" alt="..." width="100px">
              </div>
              <div class="carousel-item" data-interval="5000">
              <img src="super/super02.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-interval="5000">
              <img src="super/super03.png" class="d-block w-100" alt="...">
              </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
                  

      

            
         

            
          </div>
          </br>

          
          <div class="col-sm-11 pl-5">
            
          <div class="row">
          
          
          
          <!--สินค้า-->
          <?php
          $act1 = (isset($_GET['act1']) ? $_GET['act1']: '');
          $act = (isset($_GET['act']) ? $_GET['act']: '');
          if ($act == 'showbytype'){
            
   
            include('show_product_type.php'); 
          }elseif ($act == 'member'){

           include('member_form_add.php'); 
            
          }elseif ($act1 != ''){
            include('show_search_from.php'); 
          }elseif ($act == 'add'){


   
            include('user/product_detail.php');
          }else{
            
            include('user/test.php'); 
          }
          
          ?> 
               </div>
            
               </div> 
        
        </br>
        </br>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- Site footer -->
   <!-- Site footer -->
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
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  
  
  <!-- container-scroller -->
  <script>


document.body.style.zoom="100%"
  </script>
 
</body>

</html>

