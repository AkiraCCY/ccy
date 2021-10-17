  
<h4> ผลการค้าหา <?php echo $act1?></h4>
       

    
<?php

include_once('condb.php');

?>
<head>
<title>ระบบร้านค้าออนไลน์</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  



</head>
</br>


<?php
    $query_product = "SELECT * FROM tbl_product as p 
                         INNER JOIN tbl_type as t
                         ON p.type_id = t.type_id 
                         WHERE  t.type_name LIKE '%$act1%'
                      ORDER BY p.p_id DESC";    

	$result_pro =mysqli_query($con, $query_product) or die ("Error in query: $query_product " . mysqli_error());
		// echo($query_product);
        // exit()
        ?>


  

		

<?php foreach ($result_pro as $row_pro) {?>
  
<div class="containerb">
<div class="col-md-12 pl-0" ></br>
  <div class="cardb">
    <div class="imgBx">
    
    <img src="backend/p_img/<?php echo $row_pro ['p_img']?> " alt="" width="220px" height="175" >
    </div>
    <div class="contentBx">
    <div class="p" style=" color:#707071; text-align: left;font-size: 18px">
    <?php echo $row_pro ['p_name']?>
    
    </div>
</br>
      <div style=" color: red; text-align: right; font-size:18px;">
      ฿<?php echo number_format ($row_pro ['p_price'], 2); ?>
      
      </div>
      <div  style=" color: #red; text-align: center;  ">
     <a href="product2.php?id=<?php echo $row_pro['p_id']?>">  <button type="button" class="btn btn-primary btn-rounded btn-fw"  >กดเลยก็แล้วกัน</button>
    </a>
    </div>
    </div>
  </div>
</div>
</div>   
<?php } ?>
<!-- &nbsp -->
<style>


*{
  font-family: 'Poppins', sans-serif;
}

/* body{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;

}

.containerb{
  position: relative;
} */

.containerb .cardb{
  position: relative;
  width: 213px;
  height: 340px;
  left:45%;
  
  background: #ffffff;
  border-radius: 10px;
  border: 2px solid #EBDEF0;
  overflow: hidden;
  box-shadow: 2px 2px 15px #dcdcdc;
}
/* วงกลม */
/* .containerb .cardb:before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #7b68ee;
  clip-path: circle(150px at 80% 20%);
  transition: 0.5s ease-in-out;
}

.containerb .cardb:hover:before{
  clip-path: circle(300px at 80% -20%);
} */
/* ลายน้ำ */
.containerb .cardb:after{
  content: '';
  position: absolute;
  top: 30%;
  left: -20%;
  font-size: 12em;
  font-weight: 800;
  font-style: italic;
  color:#red
}
/* รูป */
.containerb .cardb .imgBx{
  position: absolute;
  top: 40%;
  transform: translateY(-50%);
  
  width: 200px;
  height: 180px;
  transition: 0.5s;
}

.containerb .cardb:hover .imgBx{
  top: 0%;
  transform: translateY(0%);
    
}

.containerb .cardb .imgBx img{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(0deg);
  width: 320px;
}
/* text */
.containerb .cardb .contentBx{
  left: 2%;
  position: absolute;
  bottom: 0;
 width: 190px; 
  height: 100px;
  transition: 1s;
  z-index: 10;
  
  
}

.p {
  display: -webkit-box;
-webkit-line-clamp: 1;
-webkit-box-orient: vertical;
overflow: hidden;
     overflow: hidden;
    text-overflow: ellipsis;
}

.containerb .cardb:hover .contentBx{
  height: 150px;

}

.containerb .cardb .contentBx h2{
  position: relative;
  font-weight: 600;
  letter-spacing: 1px;
  color: #red;
  margin: 0;
}

.containerb .cardb .contentBx .size, .containerb .cardb .contentBx .color {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px 20px;
  transition: 0.5s;opacity: 0;
  visibility: hidden;
  padding-top: 0;
  padding-bottom: 0;
  
}

.containerb .cardb:hover .contentBx .size{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
  
}

.containerb .cardb:hover .contentBx .color{
  opacity: 1;
  visibility: visible;
  transition-delay: 0.6s;
  
}

.containerb .cardb .contentBx .size h3, .containerb .cardb .contentBx .color h3{
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
}

.containerb .cardb .contentBx .size span{
  width: 26px;
  height: 26px;
  text-align: center;
  line-height: 26px;
  font-size: 14px;
  display: inline-block;
  color: #111;
  background: #fff;
  margin: 0 5px;
  transition: 0.5s;
  color: #111;
  border-radius: 4px;
  cursor: pointer;
  
}

.containerb .cardb .contentBx .size span:hover{
  background: #9bdc28;
}

.containerb .cardb .contentBx .color span{
  width: 20px;
  height: 20px;
  background: #ff0;
  border-radius: 50%;
  margin: 0 5px;
  cursor: pointer;
}

.containerb .cardb .contentBx .color span:nth-child(2){
  background: #9bdc28;
}

.containerb .cardb .contentBx .color span:nth-child(3){
  background: #03a9f4;
}

.containerb .cardb .contentBx .color span:nth-child(4){
  background: #e91e63;
}

.containerb .cardb .contentBx a{
  display: inline-block;
  padding: 10px 20px;
  background: #fff;
  border-radius: 4px;
  margin-top: 10px;
  text-decoration: none;
  font-weight: 600px;
  color: #111;

  opacity: 0;
  transform: translateY(50px);
  transition: 0.5s;
  margin-top: 0;
}

.containerb .cardb:hover .contentBx a{
  opacity: 1;
  transform: translateY(0px);
  transition-delay: 0.75s;
  
}
</style>