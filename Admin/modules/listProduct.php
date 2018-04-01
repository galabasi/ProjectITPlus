<?php  
  $sqlSelect=" SELECT p.pro_id,p.pro_name,c.cat_name,p.price,p.sale_off,p.`status`, ";
  $sqlSelect.=" b.brand_name,i.image_url FROM tbl_products AS p ";
  $sqlSelect.=" INNER JOIN tbl_category AS c ON p.cat_id=c.cat_id ";
  $sqlSelect.=" INNER JOIN tbl_brands AS b ON p.brand_id=b.brand_id ";
  $sqlSelect.=" INNER JOIN tbl_images AS i ON p.img_id=i.img_id ";
  $result = @mysqli_query($conn,$sqlSelect) or die("lỗi truy vấn".$sqlSelect);
?>
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">List User</h3>
    </div>
    <div class="box-body">
      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
               <tr role="row">
                <th>#</th>
                <th>pro_name</th>
                <th>cat_name</th>
                <th>price</th>
                <th>sale_off</th>
                <th>brand_name</th>
                <th>image_url</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php  
              $i=0;
              while ($row = mysqli_fetch_assoc($result)) {
                $i++;
                // $getUser="index.php?view=editUser,pro_id=".$row["pro_id"];
                ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $row["pro_name"] ?></td>
                  <td><?php echo $row["cat_name"] ?></td>
                  <td><?php echo $row["price"] ?></td>
                  <td><?php echo $row["sale_off"] ?></td>
                  <td><?php echo $row["brand_name"] ?></td>
                  <td>
                      <img src="<?php echo $row["image_url"] ?>" alt="" width="100" />
                  </td>
                  <td><?php echo $row["status"] ?></td>
                  <td class="text-center" width="100px">
                    <a href="<?php echo "index.php?view=editProduct&pro_id=".$row["pro_id"] ?>" class="btn btn-primary btn-xs">Edit</a>
                    <button class="btn btn-danger btn-xs" onclick="delete1(<?php echo $row["pro_id"] ?>);">Delete</button>
                  </td>
                </tr> 
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
  <script>
    function delete1(id){
      if (confirm("Bạn có chắc chắn muốn xóa không?")) {
        window.location.href="index.php?view=deleteProduct&pro_id="+id;
      }
      // window.location.href="index.php?view=listUser";
    }
  </script>