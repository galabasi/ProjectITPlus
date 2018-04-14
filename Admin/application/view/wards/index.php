
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">List Province</h3>
    </div>
    <div class="box-body">
      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <div class="row">
          <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
               <tr role="row">
                <th>#</th>
                <th>ward_name</th>
                <th>district_name</th>
                <th>province_name</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php  
                  foreach ($wards as $ward) {
                ?>
                 <tr>
                   <td><?php if (isset($ward->id_ward)) echo htmlspecialchars($ward->id_ward, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($ward->name_ward)) echo htmlspecialchars($ward->name_ward, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($ward->id_district)) echo htmlspecialchars($ward->id_district, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($ward->id_province)) echo htmlspecialchars($ward->id_province, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($ward->status)) echo htmlspecialchars($ward->status, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <a href="<?php echo URL . 'wards/editward/' . htmlspecialchars($ward->id_ward, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary btn-xs">Edit</a>
                          <button class="btn btn-danger btn-xs" onclick="cfdelete(<?php echo htmlspecialchars($ward->id_ward, ENT_QUOTES, 'UTF-8') ?>);">Delete</button>
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
    function cfdelete(id){
    if (confirm("Bạn có chắc chắn muốn xóa không?")) {
      window.location.href="<?php echo URL . 'wards/deleteWard/'?>"+id;
    }
  }
</script>