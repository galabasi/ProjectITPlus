<?php    
  if (isset($_GET["pro_id"])) {
    $pro_id=$_GET["pro_id"];
    if(isset($_POST["update"])){
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
        $sqlUpdate= " UPDATE tbl_products SET pro_name='$pro_name',cat_id='$cat_id',price='$price', ";
        $sqlUpdate.= " sale_off='$sale_off',brand_id='$brand_id',description='$description',img_id='$img_id',`status`='$status' ";
        $sqlUpdate.= " WHERE pro_id=$pro_id ";
        //thực thi truy vấn
        $result = @mysqli_query($conn,$sqlUpdate) or die("Lỗi truy vấn :".$sqlUpdate);
        //chuyển sang trang mới
        header("Location:index.php?view=listProduct");
    }
    // $sqlSelect=" SELECT p.pro_id,p.pro_name,c.cat_name,p.price,p.sale_off,p.`status`, ";
    // $sqlSelect.=" b.brand_name,i.image_url,p.description,p.img_id FROM tbl_products AS p ";
    $sqlSelect =" SELECT * FROM tbl_products AS p ";
    $sqlSelect.=" INNER JOIN tbl_category AS c ON p.cat_id=c.cat_id ";
    $sqlSelect.=" INNER JOIN tbl_brands AS b ON p.brand_id=b.brand_id ";
    $sqlSelect.=" INNER JOIN tbl_images AS i ON p.img_id=i.img_id ";
    $sqlSelect.=" WHERE p.pro_id=$pro_id";
    $result = @mysqli_query($conn,$sqlSelect) or die("lỗi truy vấn".$sqlSelect);
    while ($row=mysqli_fetch_assoc($result)) {
?>


<div class="row">
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Add Product</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="pro_name" class="col-sm-2 control-label">pro_name</label>
            <div class="col-sm-10">
              <input class="form-control" id="pro_name" name="pro_name" type="text" value="<?php echo $row["pro_name"] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="cat_name" class="col-sm-2 control-label">cat_name</label>
            <div class="col-sm-5">
                <select class="form-control" id="cat_id" name="cat_id">
                  <option value="<?php echo $row["cat_id"] ?>"><?php echo $row["cat_name"] ?></option>
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
            <div class="col-sm-10">
              <input class="form-control" id="price" name="price" type="text" value="<?php echo $row["price"] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="sale_off" class="col-sm-2 control-label">sale_off</label>
            <div class="col-sm-10">
              <input class="form-control" id="sale_off" name="sale_off" type="text"  value="<?php echo $row["sale_off"] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="brand_name" class="col-sm-2 control-label">brand_name</label>
            <div class="col-sm-5">
                <select class="form-control" id="brand_id" name="brand_id">
                  <option value="<?php echo $row["brand_id"] ?>"><?php echo $row["brand_name"] ?></option>
                <?php      
                  
                  $sqlBrand="SELECT * FROM tbl_brands";
                  $resultBrand=mysqli_query($conn,$sqlBrand) or die("Lỗi truy vấn ".$sqlBrand);
                  while ($rowBrand=mysqli_fetch_assoc($resultBrand)) {
                ?>
                  <option value="<?php echo $rowBrand["brand_id"] ?>"><?php echo $rowBrand["brand_name"]; ?></option>
                <?php
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="description" class="col-sm-2 control-label">description</label>
            <div class="col-sm-10">
              <textarea name="description" id="description"><?php echo $row["description"] ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="image_url" class="col-sm-2 control-label">image_url</label>
            <div class="col-sm-5">
                <select class="form-control" id="img_id" name="img_id">
                  <option value="<?php echo $row["img_id"] ?>"><?php echo $row["image_url"] ?></option>
                <?php  
                  $sqlImg="SELECT * FROM tbl_images";
                  $resultImg=mysqli_query($conn,$sqlImg) or die("Lỗi truy vấn ".$sqlImg);
                  while ($rowImg=mysqli_fetch_assoc($resultImg)) {
                ?>
                  <option value="<?php echo $rowImg["img_id"] ?>"><?php echo $rowImg["image_url"]; ?></option>
                <?php    
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="status" class="col-sm-2 control-label">status</label>
            <div class="col-sm-10 checkbox">
              <input class="" id="status" name="status" type="checkbox" style="margin-left: 0px;" value="<?php echo $row["status"] ?>">
            </div>
          </div>
        </div>        
        <div class="box-footer">
          <button type="Reset" class="btn btn-default">Reset</button>
          <!-- <button type="submit" name="listU" id="listU" class="btn btn-default">List User</button> -->
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
<script>
  $(document).ready(function() {
    $("#birthday").datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "dd-mm-yy",
    });
  });
</script>