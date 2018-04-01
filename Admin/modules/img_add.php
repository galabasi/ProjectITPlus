<?php  
  if (isset($_POST["addNew"])) {
    for($i=1;$i<=25;$i++){
      $parent_id = $_POST["parent_id"];
      $sqlParent1="SELECT parent_name FROM tbl_parents WHERE parent_id=".$parent_id;
      $resultParent1=mysqli_query($conn,$sqlParent1) or die("Lỗi truy vấn");
      $rowParent1=mysqli_fetch_row($resultParent1);
      $image_url="images/".$rowParent1[0];
      if (!is_dir($image_url)) {
        mkdir($image_url);
      }
      if ($i==1) {
        $image_url.="/images";
      }
      if ($i<10 && $i>1) {
        $image_url.="/images_00".$i;
      }
      if ($i>10) {
        $image_url.="/images_0".$i;
      }
       $image_url.=".jpg";
      $status=1;
      $sqlInsert = "INSERT INTO tbl_images (parent_id,image_url,status)";
      $sqlInsert.= "VALUES ('$parent_id','$image_url','$status')";
      $result = @mysqli_query($conn,$sqlInsert) or die("Lỗi truy vấn :".$sqlInsert);
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
            <label for="parent_id" class="col-sm-3 control-label">Parent</label>
            <div class="col-sm-5">
                <select class="form-control" id="parent_id" name="parent_id">
                  <option value="5">---Chọn---</option>
                <?php  
                  $sqlParent="SELECT * FROM tbl_parents";
                  $resultParent=mysqli_query($conn,$sqlParent) or die("Lỗi truy vấn");
                  while ($rowParent=mysqli_fetch_assoc($resultParent)) {
                ?>
                  <option value="<?php echo $rowParent["parent_id"] ?>"><?php echo $rowParent["parent_name"]; ?></option>
                <?php    
                  }
                ?>
              </select>
            </div>
          </div>
        </div>        
        <div class="box-footer">
          <button type="submit" name="addNew" id="addNew" class="btn btn-info pull-right">Add New</button>
        </div>
      </form>
    </div>
  </div>
</div>