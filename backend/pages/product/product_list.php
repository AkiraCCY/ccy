<?php
//1. เชื่อมต่อ database:
include('../../condb.php');  error_reporting( error_reporting() & ~E_NOTICE ); //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง 
$query = "
SELECT * FROM tbl_product as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
ORDER BY p.p_id DESC" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>

<script>    
$(document).ready(function() {
    $('#example1').DataTable( {
      "aaSorting" :[[0,'DESC']],
    "lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
    
  });
} );
</script>

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

<link rel="stylesheet" href="../../vendors/datatables.net/semantic.min.css">
   <link rel="stylesheet" href="../../vendors/datatables.net/dataTables.semanticui.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
    table.dataTable thead{
        background: linear-gradient(to right, #fcb845, #fd1d1d, #833ab4);
        color:white;
    }
  </style>


  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />

<table id="example1" class="ui celled table" align="center"  style="width:100%" >
<thead>
  <tr class="info">    
  <th width="10%">รหัสสินค้า</th>
  <th width="15%">ประเภท</th>
  <th width="40%">ชื้อสินค้า</th> 
  <th width="16%">ราคาสินค้า (บาท)</th> 
  <th width="20%">รูปสินค้า</th>
  <th width="20%">จำนวนสินค้า</th>
  <th width="15%">แก้ไข</th>
  <th width="15%">ลบ</th>

</tr>
</thead>

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
            <form  name="addproduct" action="product_form_edit_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-group">
        <div class="form-group">
          <div class="col-sm-9">
            <p> รหัสสินค้า</p>
            <input type="text"  name="p_code" class="form-control" required placeholder="รหัสสินค้า" value="<?php echo $row ["p_code"]; ?>"readonly/>
          </div>
        </div>
          <div class="col-sm-9">
          
            <p> ชื่อสินค้า </p>
            <input type="text"  name="p_name" class="form-control" required placeholder="ชื่อสินค้า" / value="<?php echo  $row ['p_name']?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-9">
            <p> ราคา</p>
            <input type="text"  name="p_price" class="form-control" required placeholder="ราคา" / value="<?php echo  $row ['p_price']?>">
          </div>
        </div>
         
        
        <div class="form-group">
          <div class="col-sm-12">
            <p> รายละเอียดสินค้า </p>
             <textarea type ="text" name="p_detail" rows="5" cols="50" ><?php echo $row ["p_detail"]; ?>
             </textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> จำนวนสินค้า </p>
            <input type="number" name="p_quantity" min="1"step="1"  value="<?php echo $row ["p_quantity"]; ?>">
           
             
          </div>
        </div>
            <div class="form-group">
          <div class="col-sm-12">
            <p> ภาพสินค้า </p>
            <img src="../../p_img/<?php echo $row['p_img'];?>" width="100px">
            <br>
            <br>
            <input type="file" name="p_img" id="p_img" class="form-control" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
             <input type="hidden" name="p_id" value="<?php echo $p_id; ?>" />
             <input type="hidden" name="img2" value="<?php echo $p_img; ?>" />
            <button type="submit" class="btn btn-success" name="btnadd"> บันทึก </button>
            
          </div>
        </div>
      </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" onclick="editRow()" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </div>
                
<?php while ($row =  mysqli_fetch_assoc($result)) { ?>
  <tr >
      <td><?php echo $row["p_code"]; ?></td>
      <td><?php echo $row["type_name"]; ?></td>
      <td><?php echo $row["p_name"]; ?></td>
      <td><?php echo number_format($row["p_price"]); ?> บาท</td>
      <td ><img src="../../p_img/<?php echo $row ['p_img']?>" width="150" height="120"></td>
      <td ><?php echo $row["p_quantity"]; ?></td>
      
      <td><button type="button" class="btn btn-inverse-primary btn-icon" data-toggle="modal" data-target="#exampleModal" > <i class="ti-user"></i> </button></td>
      
      <td><a href="product_del_db.php?ID=<?php echo $row['p_id']; ?>" class='btn btn-danger btn-sm'  onclick="return confirm('ยันยันการลบ')">ลบ</a> </td>
    </tr>
    <?php }  ?>
  
    
  </table>
  
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

