<?php  
	$sql="SELECT * FROM tbl_banner";
	$result= @mysqli_query($conn,$sql) or die("Lỗi truy vấn" .$result);
?>

<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">List Baner</h3>
    </div>
    <div class="box-body">
      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
               <tr role="row">
                <th>#</th>
                <th>baner_name</th>
                <th>url_image</th>
                <th></th>
                <th>status</th>
                <th>link</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php  
                  $i=0;
                  while ($row = mysqli_fetch_assoc($result)) {
                    $i++;
                ?>
                 <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row["baner_name"] ?></td>
                    <td><?php echo $row["url_image"] ?></td>
                    <td >
                      <a id="zoom_img" href="javascript:void(0)">
                        <img src="<?php echo $row["url_image"] ?>" alt="" width="100px" heigh="100px">
                      </a>
                    </td>
                    <td><?php echo $row["status"] ?></td>
                    <td><?php echo $row["link"] ?></td>
                    <td width="110px">
                        <button class="btn btn-danger btn-xs" onclick="delete1(<?php echo $row["banner_id"] ?>);">Delete</button>
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
</div>
<script>
  function delete1(id){
    if (confirm("Bạn có chắc chắn muốn xóa không?")) {
      window.location.href="index.php?view=deleteBaner&banner_id="+id;
    }
    }
</script>