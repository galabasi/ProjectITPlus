<?php    
  if (isset($_GET["content_id"])) {
    if(isset($_POST["update"])){
        $subject = $_POST["subject"];
        $description1 = $_POST["description1"];
        $content = $_POST["content"];
        $content_type = $_POST["content_type"];
        $status=0;
        if (isset($_POST["status"])) {
          $status=1;
        }
        
        $sqlUpdate="UPDATE tbl_contents SET subject = '$subject',description1='$description1',status = '$status'";
        
        $sqlUpdate.=" WHERE content_id = ".$_GET["content_id"];
        //thực thi truy vấn
        $result = @mysqli_query($conn,$sqlUpdate) or die("Lỗi truy vấn :".$sqlUpdate);
        //chuyển sang trang mới
        header("location:index.php?view=listBrand");
    }
    $sqlSelect="SELECT * FROM tbl_contents";
    $sqlSelect.=" WHERE content_id = ".$_GET["content_id"];
    $result = @mysqli_query($conn,$sqlSelect) or die("lỗi truy vấn".$sqlSelect);
    while ($row=mysqli_fetch_assoc($result)) {
      // print_r($row);
?>
<div class="row">
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Category</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="subject" class="col-sm-3 control-label">subject</label>
            <div class="col-sm-9">
              <input class="form-control" id="subject" name="subject" type="text" value="<?php echo $row["subject"] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="description1" class="col-sm-3 control-label">description1</label>
            <div class="col-sm-9">
              <input class="form-control" id="description1" name="description1" type="text" value="<?php echo $row["description1"] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="content" class="col-sm-3 control-label">content</label>
            <div class="col-sm-9">
              <input class="form-control" id="content" name="content" type="text" value="<?php echo $row["content"] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="content_type" class="col-sm-3 control-label">content_type</label>
            <div class="col-sm-9">
              <input class="form-control" id="content_type" name="content_type" type="text" value="<?php echo $row["content_type"] ?>">
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