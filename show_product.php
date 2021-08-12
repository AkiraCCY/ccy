
<?php

include_once('condb.php');

?>
<head>
<title>ระบบร้านค้าออนไลน์</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  



</head>
</br>

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
  <h3>สินค้าแนะนำ</h3>
<div class="row">
  

		<?php foreach ($result_pro as $row_pro) {?>
  <div class="col-md-3 pl-0" ></br>
    <div  class="card"   >
    </br> 
    <a href="product.php?id=<?php echo $row_pro['p_id']?>" >

    <img src="backend/p_img/<?php echo $row_pro ['p_img']?> " class="card-img-top " alt="" width="600" height="220" >
    </a>
    <div  class="container " >
     <a  href="product.php?id=<?php echo $row_pro['p_id']?>"style=" color: #000000;" class=" list-group-item-action "><?php echo $row_pro ['p_name']?>
         <?php echo $row_pro ['type_name']?>
        <div class="row">
        
     
      
        &nbsp&nbsp&nbsp ราคา:  &nbsp <h5 style=" color: #FF0000;"href="product.php?id=<?php echo $row_pro['p_id']?>"><?php echo number_format ($row_pro ['p_price'], 2); ?>&nbspบาท</h5>
        
       
        
      </div>
    </div>
  </div>   </a>
  </div></br></br></br></br></br></br></br></br>
  <!-- <?php if($row['p_id']='17'){ ?><div class="col-md-3 pl-0" ></br>
    <span id="dots">
    <div  class="card"  >
    </br>
    <a href="product_detail.php?id=<?php echo $row_pro['p_id']?>" >

    <img src="backhome/p_img/<?php echo $row_pro ['p_img']?> " class="card-img-top " alt="" width="600" height="220" >
   
    <div  class="container" >
     <h5 style=" color: #000000;"><?php echo $row_pro ['p_name']?></h5>
         <?php echo $row_pro ['type_name']?>
        <div class="row">
        
        
      
        &nbsp&nbsp&nbsp ราคา:  &nbsp<h5 style=" color: #FF0000;"><?php echo  $row_pro ['p_price'] ?>&nbspบาท</h5>
        
          
        
      </div>
    </div>
  </div></a>
  </div></br></br></br></br></br></br></br></br> <?php } ?>  </span><span id="more"></span></p> -->
  <?php } ?>   
</div> 

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  height:400px;
  

}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,1.0);
}

.container {
  padding: 2px 16px;
  
}


</style>
