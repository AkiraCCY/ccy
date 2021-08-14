<link rel="stylesheet" href="style.css">
<?php

include_once('condb.php');

?>
<?php
   

 // echo $act;
//exit();
                         $query_product = "SELECT * FROM tbl_product as p 
                         INNER JOIN tbl_type as t
                         ON p.type_id = t.type_id 
                         WHERE 	p.p_name LIKE '%$act1%'  OR t.type_name LIKE '%$act1%'
                      ORDER BY p.p_id DESC";
                     $result = mysqli_query($con, $query_product);
                     while($row = mysqli_fetch_array($result)) 
                                         
                ?>

<h3>&nbsp;&nbsp;ผลการค้นหาสินค้า "<?php echo $act1 ?>"</h3>

<div class="row">

</div>

<?php $query_product = "SELECT * FROM tbl_product as p 
 INNER JOIN tbl_type as t
 ON p.type_id = t.type_id 
ORDER BY p.p_id DESC";

	$result_pro =mysqli_query($con, $query_product) or die ("Error in query: $query_product " . mysqli_error());
		// echo($query_product);
        // exit()
        ?>

<div class="row">
  

		<?php foreach ($result as $row_pro) {?>
            <div class="col-sm-3 pl-0" ></br>
    <div  class="card"   >
    </br> 
    <a href="product.php?id=<?php echo $row_pro['p_id']?>" >

    <img src="backend/p_img/<?php echo $row_pro ['p_img']?> " class="card-img-top " alt="" width="600" height="220" >
    </a>
    </br>
    <div  class="container " >
     <a  href="product.php?id=<?php echo $row_pro['p_id']?>"style=" color: #000000;" class=" list-group-item-action "><?php echo $row_pro ['p_name']?>
         <?php echo $row_pro ['type_name']?>
    
        <div class="row">
        
    
      
        &nbsp&nbsp&nbsp ราคา:  &nbsp <div style=" color: #FF0000;"href="product.php?id=<?php echo $row_pro['p_id']?>"><?php echo number_format ($row_pro ['p_price'], 2); ?>&nbspบาท</div>
        
       
        
      </div>
    </div>
  </div>   </a>
  </div>
  <?php } ?>   
</div> 

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 300px;
  height:400px;
  border: 4px solid #b0215e;
  margin-bottom: 20px;
  

}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,1.0);
}

.container {
  padding: 2px 16px;
  
}

</style>
