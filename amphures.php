
<?php
      $con= mysqli_connect("localhost","root","","pro") or die("Error: " . mysqli_error($con));
?>

<body>
<?php
    $sql_amphures = "SELECT * FROM amphures";
    $query = mysqli_query($con, $sql_amphures);
?>

<div class="form-group">
                  <label for="exampleTextarea1">อำเภอ</label>
                  <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                  <option value="" selected disabled>-กรุณาเลือกอำเภอ-</option>
             <?php foreach ($query as $value) { ?>
            <option value="<?=$value['id']?>"><?=$value['name_th']?></option>
            <?php } ?>
                  </select>
                </div>
</body>
</html>
<?php include('script.php');?>