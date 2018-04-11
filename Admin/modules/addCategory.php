<?php  
  if(isset($_POST["addNew"])){
      $cat_name = $_POST["cat_name"];
      $status=0;
      if (isset($_POST["status"])) {
        $status=1;
      }
      $sqlInsert = " INSERT INTO tbl_category (cat_name,`status` ) ";
      $sqlInsert.= " VALUES ('$cat_name','$status') " ; 
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
        <h3 class="box-title">Add Category</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="cat_name" class="col-sm-3 control-label">cat_name</label>
            <div class="col-sm-9">
              <input class="form-control" id="cat_name" name="cat_name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="status" class="col-sm-3 control-label">status</label>
            <div class="col-sm-9 checkbox">
              <input class="" id="status" name="status" type="checkbox" checked style="margin-left: 0px;">
            </div>
          </div>
        </div>        
        <div class="box-footer">
          <button type="Reset" class="btn btn-default">Reset</button>
          <button type="submit" name="addNew" id="addNew" class="btn btn-info pull-right">Add New</button>
        </div>
      </form>
    </div>
  </div>
</div>