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
  <title>Skydash Admin</title>
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

</style>
</head>


  <body>
    <div class="">
    <?php include('../../navbar.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-2.3">
        <!-- Left side column. contains the logo and sidebar -->
        
      </div>
       
      <div class="col-md-10">
      <a href="product.php?act=add" class="btn-info btn-sm" > เพิ่ม</a>
      <p></p>
      
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