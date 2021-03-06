<!DOCTYPE html>
<html lang="en">

<head>
<style>


table.dataTable thead .sorting:after,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_desc_disabled:after {
  position: absolute;
  bottom: 8px;
  right: 8px;
  left: 8px;
  display: block;
  font-family: 'Glyphicons Halflings';
  opacity: 0;
}
table.dataTable thead .sorting:after {
  opacity: 0;
    /* sort */
}
table.dataTable thead .sorting:before {
  opacity: 0;
  
  /* sort */
}
table.dataTable thead .sorting_asc:after {
  content: "\e155";
  /* sort-by-attributes */
}
table.dataTable thead .sorting_desc:after {
  content: "\e156";
  /* sort-by-attributes-alt */
}


		.content {display:none;}
		.preload { width:100px;
			height: 200px;
			position: fixed;
			top: 30%;
			left: 45%;
		}

    table.dataTable td {
  font-size: 1em;
}
</style>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script>
		$(function() {
			$(".preload").fadeOut(1000, 
		function() {
			$(".content").fadeIn(200);
		});
		});
		</script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ตี๋ การช่าง(Admin)</title>
  <!-- plugins:css -->
  
 
  <!-- css data table -->
   <link rel="stylesheet" href="../../vendors/datatables.net/semantic.min.css">
   <link rel="stylesheet" href="../../vendors/datatables.net/dataTables.semanticui.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
    table.dataTable thead{
        background: linear-gradient(to right, #fcb845, #fd1d1d, #833ab4);
        color:white;
    }
  </style>

  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
 
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <style>

</style>
</head>

<body>
<?php
    include('../../navbar.php');
 ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
       

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Admin</h3>
                  <h6 class="font-weight-normal mb-0">สำหรับผู้ดูแล </h6>
                </div>
                <div>
                    <img src="../../images/tee2.png"  width="100%"  />
                </div>
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
      </body>
      </html>
           
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          
          
          </div>
            </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
    <!-- endinject -->
<!-- bootstrp -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Endbootstrp -->
    <!-- data table -->
    <script  type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.semanticui.min.js"></script>
    
  
    <!-- enddata table -->
    
