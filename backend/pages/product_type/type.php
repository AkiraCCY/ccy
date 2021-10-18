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
      <div class="main-panel">          
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="row">
                  <div class="col-md-12">
                    <div class="card-body">
                    <div class="template-demo">
                        <button onclick="addRow()" type="button" class="btn btn-info btn-icon-text">
                          <i class="ti-upload btn-icon-prepend"></i>                                                    
                          add product type
                        </button>
                        </div>    
                    </div>
                  </div>
                  
                </div>

                <div class="row" >
                  <div class="col-md-12">
                    <div class="card-body">
                    <table id="example" class="ui celled table" style="width:100%" >
        <thead>

            <tr >
                <th>รหัสประเภทสินค้า</th>
                <th>ประเภทสินค้า</th>
                <th></th>
              
            </tr>
            <tbody>
               
               </tbody>
        </thead>
        
       
    </table>
                    </div>
                  </div>
                  
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>

                <div class="form-group">
                  <label for="type_code" class="col-form-label">type_code:</label>
                  <input type="text" class="form-control" id="type_code">
                </div>

                <div class="form-group">
                    <label for="type_name" class="col-form-label">type_name:</label>
                    <input type="text" class="form-control" id="type_name">
                </div>
                
               
                <input type="hidden" id="type_id">

              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" onclick="editRow()" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </div>
      
      </div>            
      </body>
      </html>
           
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
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
    <script>
        $(document).ready(function() {
    $('#example').DataTable( {
      "aaSorting" :[[0,'desc']],
        "processing": true,
        "serverSide": true,
        "ajax": "server_processing.php",
       
   
    } );
} );
    </script>
    <script>
      function deleteRow(id){
      $.ajax({
          url:"delete.php",
          method: "POST",
          data:{id:id},
          success:function(date){
            alert('delete mamber success');
            $('#example').DataTable().draw()
          }


        });
      }
      function addRow(){

var html = '<td id="data1" contenteditable></td>'
    html += '<td id="data2" contenteditable></td>';
    
    html += '<td><button onclick="insert()" class="btn btn-sm btn-success">Insert</button></td></tr>'

  $('#example tbody').prepend(html);

}

function insert(){
var type_code = $('#data1').text();
var type_name = $('#data2').text();

if(type_code != '' && type_name != '' ){

  $.ajax({
    url:'insert.php',
    method: 'POST',
    data: {type_code:type_code,type_name:type_name},
    success:function(data){
     
      alert('บันทึกข้อมูลเสร็จเรียบร้อยแล้ว')
      $('#example').DataTable().draw()
    }
  })

}else{
  alert('กรุณากรอกข้อมูลให้ครบ');
}
}

$('#exampleModal').on('show.bs.modal', function (event) {


var button = $(event.relatedTarget) // Button that triggered the modal
var id = button.data('whatever') // Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
// modal.find('.modal-title').text('New message to ' + recipient)
// modal.find('.modal-body input').val(recipient)

$('#type_id').val(id);

  $.ajax({
      url:'select-data.php',
      method: 'POST',
      data: {id:id},
      success:function(data){

        var json = jQuery.parseJSON(data);
        
        $("#type_code").val(json[0].type_code);
        $("#type_name").val(json[0].type_name);
        

      }   
    })


})

function editRow(){

var id = $('#type_id').val();
var type_code = $('#type_code').val();
var type_name = $('#type_name').val();


  $.ajax({
      url:'update.php',
      method: 'POST',
      data: {id:id,type_code:type_code,type_name:type_name},
      
      success:function(data){
        
        alert('บันทึกข้อมูลเสร็จเรียบร้อยแล้ว')
        $('#example').DataTable().draw()
        location.reload();

      }
    })


}


    </script>
  
    <!-- enddata table -->
    