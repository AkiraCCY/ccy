<?php

include_once('condb.php');

?>
<?php $query_product = "SELECT * FROM tbl_product as p 
 INNER JOIN tbl_type as t
 ON p.type_id = t.type_id 
ORDER BY p.p_id DESC";

	$result_pro =mysqli_query($con, $query_product) or die ("Error in query: $query_product " . mysqli_error());
		// echo($query_product);
        // exit()
        ?>
        <?php foreach ($result_pro as $row_pro) {?>


<section class="card_2s-wrapper">
  <div class="card_2-grid-space">
    <a class="card_2" href="show_search_from.php?id=<?php echo $row_pro['type_id']?>"  style="--bg-img: url('super/super02.png')">
    <img src="backend/p_img/<?php echo $row_pro ['p_img']?> " class="card-img-top " alt="" width="600" height="220" >
    
      <div>
        <h1 href="show_search_from.php?id=<?php echo $row_pro['type_id']?>" class=" list-group-item-action "><?php echo $row_pro ['type_name']?></h1>
        </br>
        
        
       
      </div>
    </a>
  </div>
  
  
</section>
<?php } ?> 



<style>
  

:root {
  --color: #3c3163;
  --transition-time: 0.5s;
}

* {
  box-sizing: border-box;
}

body {
    display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  
  
}

a {
  color: inherit;
}

.card_2s-wrapper {
  position: relative;
  width: 250px;
  height: 380px;
  left: 25%;
}

.card_2 {
  font-family: 'Heebo';
  --bg-filter-opacity: 0.5;
  background-image: linear-gradient(rgba(0,0,0,var(--bg-filter-opacity)),rgba(0,0,0,var(--bg-filter-opacity))), var(--bg-img);
  width: 300px;
  height:400px;
  font-size: 1.5em;
  color: white;
  border-radius: 1em;
  padding: 1em;
  /*margin: 2em;*/
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  box-shadow: 0 0 5em -1em black;
  transition: all, var(--transition-time);
  position: relative;
  overflow: hidden;
  border: 10px solid #ccc;
  text-decoration: none;
}

.card_2:hover {
  transform: rotate(0);
}

.card_2 h1 {
  margin: 0;
  font-size: 1.5em;
  line-height: 1.2em;
}

.card_2 p {
  font-size: 0.75em;
  font-family: 'Open Sans';
  margin-top: 0.5em;
  line-height: 2em;
}

.card_2 .tags {
  display: flex;
}

.card_2 .tags .tag {
  font-size: 0.75em;
  background: rgba(255,255,255,0.5);
  border-radius: 0.3rem;
  padding: 0 0.5em;
  margin-right: 0.5em;
  line-height: 1.5em;
  transition: all, var(--transition-time);
}

.card_2:hover .tags .tag {
  background: var(--color);
  color: white;
}

.card_2 .date {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 0.75em;
  padding: 1em;
  line-height: 1em;
  opacity: .8;
}

.card_2:before, .card_2:after {
  content: '';
  transform: scale(0);
  transform-origin: top left;
  border-radius: 50%;
  position: absolute;
  left: -50%;
  top: -50%;
  z-index: -5;
  transition: all, var(--transition-time);
  transition-timing-function: ease-in-out;
}

.card_2:before {
  background: #ddd;
  width: 250%;
  height: 250%;
}

.card_2:after {
  background: white;
  width: 200%;
  height: 200%;
}

.card_2:hover {
  color: var(--color);
}

.card_2:hover:before, .card_2:hover:after {
  transform: scale(1);
}

.card_2-grid-space .num {
  font-size: 3em;
  margin-bottom: 1.2rem;
  margin-left: 1rem;
}

.info {
  font-size: 1.2em;
  display: flex;
  padding: 1em 3em;
  height: 3em;
}

.info img {
  height: 3em;
  margin-right: 0.5em;
}

.info h1 {
  font-size: 1em;
  font-weight: normal;
}

/* MEDIA QUERIES */
@media screen and (max-width: 1285px) {
  .card_2s-wrapper {
    grid-template-columns: 1fr 1fr;
  }
}

@media screen and (max-width: 900px) {
  .card_2s-wrapper {
    grid-template-columns: 1fr;
  }
  .info {
    justify-content: center;
  }
  .card_2-grid-space .num {
    /margin-left: 0;
    /text-align: center;
  }
}

@media screen and (max-width: 500px) {
  .card_2s-wrapper {
    padding: 4rem 2rem;
  }
  .card_2 {
    max-width: calc(100vw - 4rem);
  }
}

@media screen and (max-width: 450px) {
  .info {
    display: block;
    text-align: center;
  }
  .info h1 {
    margin: 0;
  }
}
</style>