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
  <a href="product.php?act=add" class="btn btn-info btn-icon-text">
                          <i class="ti-upload btn-icon-prepend"></i>                                                    
                          เพิ่ม</a>
  <form  name="addproduct" action="pdf.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
                  <td colspan="1" style=" text-align: center;">
                      </br>
                  <button type="submit" class="btn btn-success" name="btnadd"  style="width:15%;height:50px"> <h4>พิมพ์ข้อมูลประเภทสินค้า</h4> </button>
                  </br>
                  </form>
      <p></p>
<table id="example1" class="ui celled table" align="center"  style="width:100%" >
<thead>
  <tr class="info">    
  <th width="10%">รหัสสินค้า</th>
  <th width="15%">ประเภท</th>
  <th width="40%">ชื้อสินค้า</th> 
  <th width="16%">ราคาสินค้า (บาท)</th> 
  <th width="20%">รูปสินค้า</th>
  <th width="20%">จำนวนสินค้า</th>
  <th width="15%"></th>
  

</tr>
</thead>


                
<?php while ($row =  mysqli_fetch_assoc($result)) { ?>
  <tr >
      <td><?php echo $row["p_code"]; ?></td>
      <td><?php echo $row["type_name"]; ?></td>
      <td><?php echo $row["p_name"]; ?></td>
      <td><?php echo number_format($row["p_price"]); ?> บาท</td>
      <td ><img src="../../p_img/<?php echo $row ['p_img']?>" width="150" height="120"></td>
      <td ><?php echo $row["p_quantity"]; ?></td>
      
      <td><button type="button" class="btn btn-inverse-primary btn-icon" data-toggle="modal" data-target="#exampleModal"><a href="product.php?act=edit&ID=<?php echo $row ['p_id']; ?>"><i class="ti-pencil-alt"></i> </a> </button>
      
      <button type="button" class="btn btn-inverse-danger btn-icon" data-toggle="modal" ><a href="product_del_db.php?ID=<?php echo $row['p_id']; ?>"   onclick="return confirm('ยันยันการลบ')"><i class="ti-trash"></i></a></button> </td>
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

