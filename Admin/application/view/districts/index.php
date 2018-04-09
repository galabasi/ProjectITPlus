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
                  foreach ($districts as $district) {
                ?>
                 <tr>
                    <td><?php if (isset($district->id_district)) echo htmlspecialchars($district->id_district, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($district->name_district)) echo htmlspecialchars($district->name_district, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($district->id_province)) echo htmlspecialchars($district->id_province, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($district->status)) echo htmlspecialchars($district->status, ENT_QUOTES, 'UTF-8'); ?></td>
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