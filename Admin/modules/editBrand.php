<?php    
  if (isset($_GET["brand_id"])) {
    if(isset($_POST["update"])){
        $brand_name = $_POST["brand_name"];$status=0;
        $status=0;
        if (isset($_POST["status"])) {
          $status=1;
        }
        
        $sqlUpdate="UPDATE tbl_brands SET brand_name = '$brand_name',status = '$status'";
        
        $sqlUpdate.=" WHERE brand_id = ".$_GET["brand_id"];
        //thực thi truy vấn
        $result = @mysqli_query($conn,$sqlUpdate) or die("Lỗi truy vấn :".$sqlUpdate);
        //chuyển sang trang mới
        header("location:index.php?view=listBrand");
    }
    $sqlSelect="SELECT * FROM tbl_brands";
    $sqlSelect.=" WHERE brand_id = ".$_GET["brand_id"];
    $result = @mysqli_query($conn,$sqlSelect) or die("lỗi truy vấn".$sqlSelect);
    while ($row=mysqli_fetch_assoc($result)) {
      // print_r($row);
?>
<div class="row">
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Brand</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="brand_name" class="col-sm-3 control-label">brand_name</label>
            <div class="col-sm-9">
              <input class="form-control" id="brand_name" name="brand_name" type="text" value="<?php echo $row["brand_name"] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="status" class="col-sm-3 control-label">status</label>
            <div class="col-sm-9 checkbox">
              <input class="" id="status" name="status" type="checkbox" style="margin-left: 0px;" <?php echo $row["status"]?"checked":"" ?>>
            </div>
          </div>
        </div>        
        <div class="box-footer">
          <button type="Reset" class="btn btn-default">Reset</button>
          <button type="submit" name="update" id="update" class="btn btn-info pull-right">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
    }
  }
?>