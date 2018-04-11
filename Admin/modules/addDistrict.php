<?php  
  $sqlProvince="SELECT * FROM tbl_province";
  $resultProvince=mysqli_query($conn,$sqlProvince) or die("Lỗi truy vấn");
  //lấy dữ liệu thông qua phương thức POST
  if(isset($_POST["addDistrict"])){
      $province_id=$_POST["province_id"];
      $district_name = $_POST["district_name"];
      $status=0;
      if (isset($_POST["status"])) {
        $status=1;
      }
      $sqlInsert = "INSERT INTO tbl_district (district_name,province_id,status)";
      $sqlInsert.= "VALUES ('$district_name','$province_id','$status')"; 
      //thực thi truy vấn
      $result = @mysqli_query($conn,$sqlInsert) or die("Lỗi truy vấn :".$sqlInsert);
  }  
  $sqlProvince="SELECT * FROM tbl_province";
  $resultProvince=mysqli_query($conn,$sqlProvince) or die("Lỗi truy vấn");
?>
<div class="row">
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Add Province</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="province" class="col-sm-3 control-label">province</label>
            <div class="col-sm-5">
                <select class="form-control" id="province_id" name="province_id">
                  <option>---Chọn---</option>
                <?php  
                  while ($rowProvince=mysqli_fetch_assoc($resultProvince)) {
                ?>
                  <option value="<?php echo $rowProvince["province_id"] ?>"><?php echo $rowProvince["province_name"]; ?></option>
                <?php    
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="district_name" class="col-sm-3 control-label">district_name</label>
            <div class="col-sm-9">
              <input class="form-control" id="district_name" name="district_name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="status" class="col-sm-3 control-label">status</label>
            <div class="col-sm-9 checkbox">
              <input class="" id="status" name="status" type="checkbox" style="margin-left: 0px;">
            </div>
          </div>
        </div>        
        <div class="box-footer">
          <button type="Reset" class="btn btn-default">Reset</button>
          <button type="submit" name="addDistrict" id="addDistrict" class="btn btn-info pull-right">Add New</button>
        </div>
      </form>
    </div>
  </div>
</div>