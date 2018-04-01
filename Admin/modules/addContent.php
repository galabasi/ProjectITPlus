<?php  
  if(isset($_POST["addNew"])){
      $subject = $_POST["subject"];
      $description1 = $_POST["description1"];
      $content = $_POST["content"];
      $content_type = $_POST["content_type"];
      $status=0;
      if (isset($_POST["status"])) {
        $status=1;
      }
      $sqlInsert = "INSERT INTO tbl_contents (subject,description1,`content`,content_type,`status`)";
      $sqlInsert.= "VALUES ('$subject','$description1','$content','$content_type',$status')"; 
      //thực thi truy vấn
      $result = @mysqli_query($conn,$sqlInsert) or die("Lỗi truy vấn :".$sqlInsert);
  }  
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
            <label for="subject" class="col-sm-3 control-label">subject</label>
            <div class="col-sm-9">
              <input class="form-control" id="subject" name="subject" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="description1" class="col-sm-3 control-label">description1</label>
            <div class="col-sm-9">
              <input class=" form-control" id="description1" name="description1" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="content" class="col-sm-3 control-label">content</label>
            <div class="col-sm-9">
              <input class=" form-control" id="content" name="content" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="content_type" class="col-sm-3 control-label">content_type</label>
            <div class="col-sm-9">
              <input class=" form-control" id="content_type" name="content_type" type="text">
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
          <button type="submit" name="addNew" id="addNew" class="btn btn-info pull-right">Add New</button>
        </div>
      </form>
    </div>
  </div>
</div>