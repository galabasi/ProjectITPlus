<?php  
  if (isset($_POST["addNew"])) {
    if(isset($_FILES["url_image"]) && $_FILES["url_image"]["name"] !=""){
      if($_FILES["url_image"]["type"] =="image/jpeg" || $_FILES["url_image"]["type"]=="jpg" || $_FILES["url_image"]["type"]=="image/png"){
        if($_FILES["url_image"]["error"]==0){
          $locationFile = $_FILES["url_image"]["tmp_name"];
          $url_image="images/".$_FILES["url_image"]["name"];
          move_uploaded_file($locationFile,$url_image);
          // echo "$url_image";
          $baner_name = $_POST["baner_name"];
          $link = $_POST["link"];
          $status=0;
          if (isset($_POST["status"])) {
            $status = $_POST["status"];
          }
          $sqlInsert = " INSERT INTO tbl_banner (baner_name,url_image,`status`,`link` )";
          $sqlInsert.= " VALUES ('$baner_name','$url_image','$status', '$link')";
          $result = @mysqli_query($conn,$sqlInsert) or die("Lỗi truy vấn :".$sqlInsert);
          header("location:index.php?view=listBaner");
        }
      }
    }
  }
?>
<div class="row">
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Add Image</h3>
      </div>
      <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label for="baner_name" class="col-sm-3 control-label">baner_name</label>
            <div class="col-sm-9">
              <input class="form-control" id="baner_name" name="baner_name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="url_image" class="col-sm-3 control-label">url_image</label>
            <div class="col-sm-7">
              <input type="file" id="url_image" name="url_image">
            </div>
          </div>
          <div class="form-group">
            <label for="status" class="col-sm-3 control-label">status</label>
            <div class="col-sm-9 checkbox">
              <input class="" id="status" name="status" type="checkbox" style="margin-left: 0px;" value="1">
            </div>
          </div>
          <div class="form-group">
            <label for="link" class="col-sm-3 control-label">link</label>
            <div class="col-sm-9">
              <input class="form-control" id="link" name="link" type="text">
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