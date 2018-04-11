<?php  
	$sql="SELECT d.province_id, d.district_id, d.district_name, d.`status`, p.province_name ";
	$sql.=" FROM tbl_district AS d INNER JOIN tbl_province AS p ON d.province_id=p.province_id ";
	$result= @mysqli_query($conn,$sql) or die("Lỗi truy vấn" .$result);
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
                <th>district_name</th>
                <th>province_name</th>
                <th>status</th>
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
                    <td><?php echo $row["district_name"] ?></td>
                    <td><?php echo $row["province_name"] ?></td>
                    <td><?php echo $row["status"] ?></td>
                    <td width="110px">
                        <a href="<?php echo "index.php?view=editDistrict&district_id=".$row["district_id"] ?>" class="btn btn-primary btn-xs">Edit</a>
                        <button class="btn btn-danger btn-xs" onclick="delete1(<?php echo $row["district_id"] ?>);">Delete</button>
                      
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
      window.location.href="index.php?view=deleteDistrict&district_id="+id;
    }
    }
</script>