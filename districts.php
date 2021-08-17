<?php
      $con= mysqli_connect("localhost","root","","pro") or die("Error: " . mysqli_error($con));
?>

<body>
<?php
    $sql_districts = "SELECT * FROM districts";
    $query = mysqli_query($con, $sql_districts);
?>

<div class="form-group">
                  <label for="exampleTextarea1">ตำบล</label>
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                  <option value="" selected disabled>-กรุณาเลือกตำบล-</option>
             <?php foreach ($query as $value) { ?>
            <option value="<?=$value['id']?>"><?=$value['name_th']?></option>
            <?php } ?>
                  </select>
                </div>
</body>
</html>
<?php include('script.php');?>