<?php  
  if (isset($_POST["addNew"])) {
    $num = $_POST["num"];
    for($i=1;$i<=$num;$i++){
      if(isset($_FILES["image_url_".$i]) && $_FILES["image_url_".$i]["name"] !=""){
              if($_FILES["image_url_".$i]["type"] =="image/jpeg" || $_FILES["image_url_".$i]["type"]=="jpg" || $_FILES["image_url_".$i]["type"]=="image/png"){
                if($_FILES["image_url_".$i]["error"]==0){
                  $locationFile = $_FILES["image_url_".$i]["tmp_name"];
                  $img_name = $_POST["img_name"];
                  $parent_id = $_POST["parent_id"];
                  $sqlParent1="SELECT parent_name FROM tbl_parents WHERE parent_id=".$parent_id;
                  $resultParent1=mysqli_query($conn,$sqlParent1) or die("Lỗi truy vấn");
                  $rowParent1=mysqli_fetch_row($resultParent1);
                  $image_url="images/".$rowParent1[0];
                  if (!is_dir($image_url)) {
                    mkdir($image_url);
                  }
                  $image_url.="/".$_FILES["image_url_".$i]["name"];
                  move_uploaded_file($locationFile,$image_url);
                  $status=0;
                  if (isset($_POST["status"])) {
                    $status = $_POST["status"];
                  }
                  $sqlInsert = "INSERT INTO tbl_images (parent_id,image_url,status)";
                  $sqlInsert.= "VALUES ('$parent_id','$image_url','$status')";
                  $result = @mysqli_query($conn,$sqlInsert) or die("Lỗi truy vấn :".$sqlInsert);
                  
                }
              }
            }
    }
   header("location:index.php?view=listImage");   
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
          <div class="form-group">
            <label for="image_url_1" class="col-sm-3 control-label">image_url</label>
            <div class="col-sm-6">
              <input type="file" id="image_url_1" name="image_url_1">
              <input type="hidden" name="num" id="num" value="1" />
              <a href="javascript:void(0)" onclick="addItem()" style="float: right;">[+]</a>
              <div id="idfile"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="status" class="col-sm-3 control-label">status</label>
            <div class="col-sm-9 checkbox">
              <input class="" id="status" name="status" type="checkbox" style="margin-left: 0px;" value="1" checked>
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
<script>
    i=1;
    function addItem(){
      i++;
      $("#num").val(i);
      htmlText = '<input type="file" name="image_url_'+i+'" id="image_url_'+i+'" ><br />';
      $("#idfile").append(htmlText);
    }
</script>