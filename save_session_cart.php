<meta charset="UTF-8">
<?php 

session_start();
include('condb.php');

 //error_reporting( error_reporting() & ~E_NOTICE );
 $m_id = $_GET["member_id"];
if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				
				'item_quantity'		=>	$_POST["quantity"]

				
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			//echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
	
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_SESSION["shopping_cart"]))
					{
					
						
							
							foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
							
							
						
							// exit();
							


							$add = "INSERT INTO tbl_product_detail 
							(member_id, p_id, d_quantity,d_status)
							VALUES 
							('$m_id', '$values[item_id]', '$values[item_quantity]','cart')";	
							$query4	= mysqli_query($con, $add)or die("Error in query: $add".mysqli_error());
						
						}
						
						
				
			
				

					?>
					<?php
						
						
						}
					?>
					



<?php
unset($_SESSION["shopping_cart"]);
Header('Location:cart.php');
?>