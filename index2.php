<!DOCTYPE html>
<html lang="en">

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
 
 <?php
   include_once('navbar.php')
   
 ?> 

     
      <!-- คำนำ -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">ยินดีต้อนรับสู่ร้าน ตี๋การช่าง</h3>
                  <h6 class="font-weight-normal mb-0">จำหน่ายสินค้า อะไหล่รถจักรยานยนต์ </h6>
                  


                  
                </div>
                </div>
            </div>
            </div>

          <!--รูป-->
          <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="10000">
                <img src="super/super01.png" class="d-block w-100" alt="..." width="200px">
              </div>
              <div class="carousel-item" data-interval="2000">
              <img src="super/super02.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
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
          <div class="col-md-12 ">
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


   
            include('product_detail.php');
          }else{
            
            include('test.php'); 
          }
          
          ?> 
               </div>
            
               </div> 
        </div>
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  
  <!-- container-scroller -->
  <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

document.body.style.zoom="80%"
  </script>
 
</body>

</html>

