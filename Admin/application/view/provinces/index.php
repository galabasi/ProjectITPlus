
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
                <th>province_name</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php  
                  foreach ($provinces as $province) {
                ?>
                 <tr>
                   <td><?php if (isset($province->id_province)) echo htmlspecialchars($province->id_province, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($province->name_province)) echo htmlspecialchars($province->name_province, ENT_QUOTES, 'UTF-8'); ?></td>
                   <td><?php if (isset($province->status)) echo htmlspecialchars($province->status, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                      <a href="<?php echo URL . 'provinces/editprovince/' . htmlspecialchars($province->id_province, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-primary btn-xs">Edit</a>
                      <button class="btn btn-danger btn-xs" onclick="cfdelete(<?php echo htmlspecialchars($province->id_province, ENT_QUOTES, 'UTF-8') ?>);">Delete</button>
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
      window.location.href="<?php echo URL . 'provinces/deleteProvince/'?>"+id;
    }
  }
</script>
