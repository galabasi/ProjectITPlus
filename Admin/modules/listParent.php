<?php  
	$sql="SELECT * FROM tbl_parents AS p INNER JOIN tbl_category AS c ON p.cat_id=c.cat_id";
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
                <th>parent_name</th>
                <th>cat_name</th>
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
                    <td><?php echo $row["parent_name"] ?></td>
                    <td><?php echo $row["cat_name"] ?></td>
                    <td><?php echo $row["status"] ?></td>
                    <td width="110px">
                        <button class="btn btn-danger btn-xs" onclick="delete1(<?php echo $row["parent_id"] ?>);">Delete</button>
                      
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
      window.location.href="index.php?view=deleteParent&parent_id="+id;
    }
    }
</script>