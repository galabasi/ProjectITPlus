<?php    
  if (isset($_GET["province_id"])) {
    if(isset($_POST["updateProvince"])){
        $province_name = $_POST["province_name"];
        $status=0;
        if (isset($_POST["status"])) {
          $status=1;
        }
        $sqlUpdate="UPDATE tbl_province SET province_name = '$province_name',status = '$status'";
        
        $sqlUpdate.=" WHERE province_id = ".$_GET["province_id"];
        //thực thi truy vấn
        $result = @mysqli_query($conn,$sqlUpdate) or die("Lỗi truy vấn :".$result);
        //chuyển sang trang mới
    }
    $sqlSelect="SELECT * FROM tbl_province";
    $sqlSelect.=" WHERE province_id = ".$_GET["province_id"];
    $result = @mysqli_query($conn,$sqlSelect) or die("lỗi truy vấn".$result);
    while ($row=mysqli_fetch_assoc($result)) {
      // print_r($row);
?>
<div class="row">
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Province</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="province_name" class="col-sm-3 control-label">province_name</label>
            <div class="col-sm-9">
              <input class="form-control" id="province_name" name="province_name" type="text" value="<?php echo $row["province_name"] ?>">
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
          <button type="submit" name="updateProvince" id="updateProvince" class="btn btn-info pull-right">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
    }
  }
?>