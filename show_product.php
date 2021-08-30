
<?php

include_once('condb.php');

?>
<head>
<title>ระบบร้านค้าออนไลน์</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  



</head>
</br>
<body>

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
  <div class="card" style="width: 18rem;">
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
</body>


<style>
body {
    font-family: sans-serif;
    font-size: 0.8rem;
    font-weight: bold
}

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
