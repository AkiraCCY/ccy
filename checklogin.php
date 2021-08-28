<?php 
//print_r($_POST);
//exit();
session_start();
        if(isset($_POST['m_user'])){
                  include("condb.php");
                  $m_user = $_POST['m_user'];
                  $m_pass = $_POST['m_pass'];
                  $login = $_POST['login'];

                  $sql="SELECT * FROM tbl_member 
                  WHERE  m_user='".$m_user."' 
                  AND  m_pass='".$m_pass."' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["member_id"] = $row["member_id"];
                      $_SESSION["m_name"] = $row["m_name"];
                    

                  if ( $_POST['login']!=''){
             
                    // Header("Location: index_login.php");
                    Header("Location: product_member.php?id=$login");
                      
                      }
                    elseif($_SESSION["member_id"]!=''){ 
                   Header("Location: index_member.php"); 

                        
                    }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index2.php"); //user & password incorrect back to login again
 
        }
?>