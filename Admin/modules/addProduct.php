<?php 
  if(isset($_POST["addNew"])){
      $pro_name = $_POST["pro_name"];
      $cat_id = $_POST["cat_id"];
      $price = $_POST["price"];
      $sale_off = $_POST["sale_off"];
      $brand_id = $_POST["brand_id"];
      $description = $_POST["description"];
      $img_id = $_POST["img_id"];
      $status=0;
      if (isset($_POST["status"])) {
        $status=1;
      }
      $sqlInsert = " INSERT INTO tbl_products (pro_name,cat_id, ";
      $sqlInsert.= " price,sale_off,brand_id,description,img_id,`status`) ";
      $sqlInsert.= " VALUES ('$pro_name','$cat_id','$price','$sale_off','$brand_id','$description','$img_id','$status') ";
      //thực thi truy vấn
      $result = @mysqli_query($conn,$sqlInsert) or die("Lỗi truy vấn :".$sqlInsert);
      //chuyển sang trang mới
      header("Location:index.php?view=listProduct");
  }
?>
<div class="row">
  <div class="col-md-10">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Add Product</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="pro_name" class="col-sm-2 control-label">pro_name</label>
            <div class="col-sm-4">
              <input class="form-control" id="pro_name" name="pro_name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="cat_name" class="col-sm-2 control-label">cat_name</label>
            <div class="col-sm-2">
                <select class="form-control" id="cat_id" name="cat_id">
                  <option>---Chọn---</option>
                <?php  
                  $sqlCat="SELECT * FROM tbl_category";
                  $resultCat=mysqli_query($conn,$sqlCat) or die("Lỗi truy vấn ".$sqlCat);
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
            <label for="price" class="col-sm-2 control-label">price</label>
            <div class="col-sm-4">
              <input class="form-control" id="price" name="price" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="sale_off" class="col-sm-2 control-label">sale_off</label>
            <div class="col-sm-4">
              <input class="form-control" id="sale_off" name="sale_off" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="brand_name" class="col-sm-2 control-label">brand_name</label>
            <div class="col-sm-2">
                <select class="form-control" id="brand_id" name="brand_id">
                  <option>---Chọn---</option>
                <?php  
                  $sqlBrand="SELECT * FROM tbl_brands";
                  $resultBrand=mysqli_query($conn,$sqlBrand) or die("Lỗi truy vấn ".$sqlBrand);
                  while ($row=mysqli_fetch_assoc($resultBrand)) {
                ?>
                  <option value="<?php echo $row["brand_id"] ?>"><?php echo $row["brand_name"]; ?></option>
                <?php    
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="description" class="col-sm-2 control-label">description</label>
            <div class="col-sm-10">
              <textarea name="description" id="description" cols="100" rows="10" ></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="image_url" class="col-sm-2 control-label">image_url</label>
            <div class="col-sm-2">
                <select class="form-control" id="img_id" name="img_id">
                  <option>---Chọn---</option>
                <?php  
                  $sqlImg="SELECT * FROM tbl_images";
                  $resultImg=mysqli_query($conn,$sqlImg) or die("Lỗi truy vấn ".$sqlImg);
                  while ($row=mysqli_fetch_assoc($resultImg)) {
                ?>
                  <option value="<?php echo $row["img_id"] ?>"><?php echo $row["image_url"]; ?></option>
                <?php    
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="status" class="col-sm-2 control-label">status</label>
            <div class="col-sm-10 checkbox">
              <input class="" id="status" name="status" type="checkbox" style="margin-left: 0px;">
            </div>
          </div>
        </div>        
        <div class="box-footer">
          <button type="Reset" class="btn btn-default">Reset</button>
          <!-- <button type="submit" name="listU" id="listU" class="btn btn-default">List User</button> -->
          <button type="submit" name="addNew" id="addNew" class="btn btn-info pull-right">Add New</button>
        </div>
      </form>
    </div>
  </div>
</div>