<?php  
  if(isset($_POST["addNew"])){
      $parent_name = $_POST["parent_name"];
      $cat_id = $_POST["cat_id"];
      $status=0;
      if (isset($_POST["status"])) {
        $status=1;
      }
      $sqlInsert = "INSERT INTO tbl_parents (parent_name,cat_id,`status`)";
      $sqlInsert.= "VALUES ('$parent_name','$cat_id','$status')"; 
      //thực thi truy vấn
      $result = @mysqli_query($conn,$sqlInsert) or die("Lỗi truy vấn :".$sqlInsert);
  }  
?>
<div class="row">
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Add Parent</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="parent_name" class="col-sm-3 control-label">parent_name</label>
            <div class="col-sm-9">
              <input class="form-control" id="parent_name" name="parent_name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="cat_id" class="col-sm-3 control-label">Category</label>
            <div class="col-sm-5">
                <select class="form-control" id="cat_id" name="cat_id">
                  <option value="5">---Chọn---</option>
                <?php  
                  $sqlCat="SELECT * FROM tbl_category";
                  $resultCat=mysqli_query($conn,$sqlCat) or die("Lỗi truy vấn");
                  while ($rowCat=mysqli_fetch_assoc($resultCat)) {
                ?>
                  <option value="<?php echo $rowCat["cat_id"] ?>"><?php echo $rowCat["cat_name"]; ?></option>
                <?php    
                  }
                ?>
              </select>
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