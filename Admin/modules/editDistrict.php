<?php    
  if (isset($_GET["district_id"])) {
    if(isset($_POST["updateDistrict"])){
        $district_name = $_POST["district_name"];$status=0;
        $status=0;
        if (isset($_POST["status"])) {
          $status=1;
        }
        
        $sqlUpdate="UPDATE tbl_district SET district_name = '$district_name',status = '$status'";
        
        $sqlUpdate.=" WHERE district_id = ".$_GET["district_id"];
        //thực thi truy vấn
        $result = @mysqli_query($conn,$sqlUpdate) or die("Lỗi truy vấn :".$result);
        //chuyển sang trang mới
    }
    $sqlSelect="SELECT * FROM tbl_district";
    $sqlSelect.=" WHERE district_id = ".$_GET["district_id"];
    $result = @mysqli_query($conn,$sqlSelect) or die("lỗi truy vấn".$result);
    while ($row=mysqli_fetch_assoc($result)) {
      // print_r($row);
?>
<div class="row">
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Edit District</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="district_name" class="col-sm-3 control-label">district_name</label>
            <div class="col-sm-9">
              <input class="form-control" id="district_name" name="district_name" type="text" value="<?php echo $row["district_name"] ?>">
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
          <button type="submit" name="updateDistrict" id="updateDistrict" class="btn btn-info pull-right">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
    }
  }
?>