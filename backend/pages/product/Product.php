<!DOCTYPE html>
<html>
<head>
<?php include('../../link.php'); error_reporting( error_reporting() & ~E_NOTICE );?>
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
</head>


  <body>
  </br></br>
    <div class="">
    <?php include('../../navbar.php');?>
  <p></p>
  
    <div class="row">
      <div class="col-md-2.3">
        <!-- Left side column. contains the logo and sidebar -->
        
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-md-10">
        
      <a href="product.php?act=add" class="btn btn-info btn-icon-text">
                          <i class="ti-upload btn-icon-prepend"></i>                                                    
                          เพิ่ม</a>
                          <form  name="addproduct" action="pdf.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
                  <td colspan="1" style=" text-align: center;">
                      </br>
                  <button type="submit" class="btn btn-success" name="btnadd"  style="width:100%;height:50px"> <h4>พิมพ์ข้อมูลประเภทสินค้า</h4> </button>
                  </br>
                  </form>
      <p></p>
      </br>
      <?php
      $act = $_GET['act'];
      if($act == 'add'){
    include('product_form_add.php');
      }elseif ($act == 'edit') {
      include('product_form_edit.php');
      }
      else {
      include('product_list.php');
      }
?>
      </div>
    </div>
  </div>
  </body>
</html>
    </br>
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