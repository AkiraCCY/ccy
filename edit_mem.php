<meta name="viewport" content="width=device-width, initial-scale=1">


<?php session_start();
 include('link.php');
 include('condb.php');
 
?>


<div class="content">
<link rel="stylesheet"  href="footer.css">
<link rel="stylesheet"  href="nav.css">


<style>
#more {display: none;}
</style>
  <div class="">
    <?php include('navbar_member.php');?>
</br>
</br></br></br>

      </div>
   

</div>    
</div>
</div>

<?php include('link.php');


$member_id = $_SESSION['member_id'];
 include('link.php');

 $query_product = "SELECT * FROM tbl_member
 where member_id = $member_id ";
	$result =mysqli_query($con, $query_product) or die ("Error in query: $query_product " . mysqli_error());
    $row = mysqli_fetch_array($result);?>



<form  name="register" action="edit_member_add_db.php" method="POST" class="form-horizontal">
<input type="hidden" name="member_id" value="<?php echo $member_id?>">      
<div class="container">
<div class="col-md-2">


      </div>
   
  <div class="content">
    <br>
      <div class="col-md-12">
      <h3>&nbsp;&nbsp;แก้ไขข้อมูลส่วนตัว</h3>
<div class="form-group" align="center">
          <div class="col-sm-10" align="left">
              <p>Username</p>
            <input  name="m_user" type="text" required class="form-control" id="mem_username" value="<?php echo $row['m_user'];?>" placeholder="Username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
      </div> 
        <div class="form-group"align="center">
          <div class="col-sm-10" align="left">
          <p>Password</p>
            <input  name="m_pass" type="password" required class="form-control" id="mem_password" value="<?php echo $row['m_pass'];?>"placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
          </div>
        </div>
        <div class="form-group"align="center">
          <div class="col-sm-10" align="left">
          <p>ชื่อ-นามสกุล</p>
            <input  name="m_name" type="text" required class="form-control" id="mem_name" value="<?php echo $row['m_name'];?>" placeholder="ชื่อ-สกุล " />
          </div>
        </div>
        <div class="form-group"align="center">
          <div class="col-sm-10" align="left">
          <p>E-mail</p>
            <input  name="m_email" type="email" class="form-control" id="mem_email" value="<?php echo $row['m_email'];?>"  placeholder=" อีเมล์ name@hotmail.com"/>
          </div>
        </div>
        <div class="form-group"align="center">
          <div class="col-sm-10" align="left">
          <p>เบอร์โทร</p>
            <input  name="m_tel" type="text" class="form-control" id="mem_tel" value="<?php echo $row['m_tel'];?>" placeholder="เบอร์โทร ตัวเลขเท่านั้น" />
          </div>
        </div>
        <div class="form-group"align="center">
          <div class="col-sm-10" align="left">
          <p>ที่อยู่</p>
            <textarea name="m_address" class="form-control" id="mem_address" placeholder="ที่อยู่" required><?php echo $row['m_address'];?> </textarea> 
          </div>
        </div>
      <div class="form-group"align="center">
          <div class="col-sm-8" align="right">
          <button type="submit" class="btn btn-primary" id="btn"><span class="glyphicon glyphicon-ok"></span> แก้ไข  </button>
          </div>     
      </div>
</div>
</div>
</div>

      </form>

      <style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300;900&display=swap');

body {
  background: #f2f2f2;
}

.container  {
  position: absolute;
  left: 50%;
  top: 52%;
  transform: translate(-50%, -50%);
  height: 80%;
  width: 30%;
  background: #f2f2f2;
  overflow: hidden;
  border-radius: 20px;

  box-shadow: 0 0 20px 8px #d0d0d0;
}

.content {
 
  
  
  text-align: center;
  

  
}

h1 {
  font-weight: 900;
  text-align: center;
}

h3 {
  font-weight: 300;
}


</style>