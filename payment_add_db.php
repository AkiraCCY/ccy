<meta charset="UTF-8">
<?php
include('condb.php'); 
date_default_timezone_set('Asia/Bangkok');
$m_id = (isset($_GET['member_id']) ? $_GET['member_id']: '');
$numrand = (mt_rand(100000,999999));
$total = $_POST['total'];

include_once('admin/Thaidate.php');
include_once('admin/thaidate-functions.php');

$date2 = thaidate('j F Y');
$date1 = date("Ymd_His");
$d_img =(isset($_POST['d_img']) ? $_POST['d_img'] :'');
$address =(isset($_POST['address']) ? $_POST['address'] :''); 
$email =(isset($_POST['email']) ? $_POST['email'] :''); 
$tal =(isset($_POST['tal']) ? $_POST['tal'] :''); 

$address_basic =(isset($_POST['address_basic']) ? $_POST['address_basic'] :''); 
$email_basic  =(isset($_POST['email_basic']) ? $_POST['email_basic'] :''); 
$tal_basic  =(isset($_POST['tal_basic']) ? $_POST['tal_basic'] :''); 
// echo '4';
// echo $address;
// echo $add;
// exit();

$upload=$_FILES['d_img'];
	if($upload <> '') {

	$path="backend/p_img/";
	$type = strrchr($_FILES['d_img']['name'],".");
	$newname ='d_img'.$numrand.$date1.$type;
	$path_copy=$path.$newname;
	$path_link="d_img/".$newname;
	move_uploaded_file($_FILES['d_img']['tmp_name'],$path_copy);
    }

    

    $query = "SELECT * FROM tbl_product_detail as d
				INNER JOIN tbl_product as p ON d.p_id = p.p_id
				INNER JOIN tbl_member as m ON d.member_id = m.member_id
                WHERE d.member_id = $m_id and d_status = 'cart'";
				$result = mysqli_query($con, $query)or die ("Error in query: $query " . mysqli_error());
        $row = mysqli_fetch_array($result);
       
        	
		
        foreach ($result as $row0) {
          $pp =  $row0['p_id'];
          
      $quantity = $row0['p_quantity'] - $row0['d_quantity'];
     
      $update = "UPDATE tbl_product set
                  p_quantity = '$quantity'
                  WHERE  p_id = $pp  ";
        $query00	= mysqli_query($con, $update) or die ("Error in query: $update " . mysqli_error($con));;
      }
     
  $address =0;
  if($address =(isset($_POST['address']) ? $_POST['address'] :''))
  {
   
   $add =$address ;
   $add01=$email;
   $add02=$tal;


  }else{
  
    $add = $address_basic;
    $add01 =  $email_basic;
    $add02= $tal_basic;
  }
$add1 = "INSERT INTO tbl_order_detail 
      (o_code,o_img,o_total,o_address,o_email,o_tal,transport,o_status,member_id,timesave)
      VALUES 
      ('$numrand','$newname','$total','$add','$add01','$add02','50','01','$m_id','$date2')";
      $query7	= mysqli_query($con, $add1)or die("Error in query: $add1".mysqli_error());

$add_time = "INSERT INTO tbl_product_detail
            (time_save)
            VALUES
            ('$date2')"; 
            $query001	= mysqli_query($con, $add_time)or die("Error in query: $add_time".mysqli_error());
    
     
      $sql0 = "SELECT * FROM tbl_order_detail
      WHERE o_code = '$numrand'";
      $result0 = mysqli_query($con,$sql0)or die("Error in query: $sql0".mysqli_error());
      $row10 = mysqli_fetch_array($result0);		
      
      
    $edit = "UPDATE tbl_product_detail set 
                d_status = 'อยู่ในระหว่างการตรวจสอบ',
                o_id = '$row10[o_id]'
                WHERE member_id = $m_id and d_status ='cart'";
                 $query	= mysqli_query($con, $edit) or die ("Error in query: $edit " . mysqli_error($con));;
 

                 if( $query){
                    echo "<script type='text/javascript'>";
                    echo "alert('ขอบคุณที่ใช้บริการ');";
                    echo "window.location = 'product_status.php'; ";
                    echo "</script>";
                    }
                    else{
                    echo "<script type='text/javascript'>";
                    echo "alert('เกิดข้อผิดพลาดโปรดลองใหม่อีกครั้ง');";
                    echo "</script>";
                  }
                  ?>





