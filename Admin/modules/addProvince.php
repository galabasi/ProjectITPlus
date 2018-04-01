
<?php  
  $sqlProvince="SELECT * FROM tbl_province";
  $resultProvince=mysqli_query($conn,$sqlProvince);
  //lấy dữ liệu thông qua phương thức POST
  if(isset($_POST["addProvince"])){
      $province_name = $_POST["province_name"];
      $status=0;
      if (isset($_POST["status"])) {
        $status=1;
      }
      // echo "$status";
      $sqlInsert = "INSERT INTO tbl_province (province_name,status)";
      $sqlInsert.= "VALUES ('$province_name','$status')"; 
      //thực thi truy vấn
      $result = @mysqli_query($conn,$sqlInsert) or die("Lỗi truy vấn :".$sqlInsert);
  }
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
            <label for="province_name" class="col-sm-3 control-label">province_name</label>
            <div class="col-sm-9">
              <input class="form-control" id="province_name" name="province_name" type="text">
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
          <!-- <button type="submit" name="listU" id="listU" class="btn btn-default">List User</button> -->
          <button type="submit" name="addProvince" id="addProvince" class="btn btn-info pull-right">Add New</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- <script>
  $(document).ready(function() {
    $("#datepicker").datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "dd-mm-yy",
    });
  });
</script> -->