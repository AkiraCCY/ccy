<?php
      $con= mysqli_connect("localhost","root","","pro") or die("Error: " . mysqli_error($con));
?>

<body>
<?php
    $sql_provinces = "SELECT * FROM provinces";
    $query = mysqli_query($con, $sql_provinces);
?>

<div class="form-group">
                  <label for="exampleTextarea1">จังหวัด</label>
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                  <option value="" selected disabled>-กรุณาเลือกจังหวัด-</option>
             <?php foreach ($query as $value) { ?>
            <option value="<?=$value['id']?>"><?=$value['name_th']?></option>
            <?php } ?>
                  </select>
                </div>
</body>
</html>
<?php include('script.php');?>