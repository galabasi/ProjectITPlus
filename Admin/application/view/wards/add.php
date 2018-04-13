<div class="row">
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Add Province</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="province" class="col-sm-3 control-label">province</label>
            <div class="col-sm-5">
                <select class="form-control" id="id_province" name="id_province" onchange="getDistrict(this.value, 0, 'id_district')">
                  <option>---Chọn---</option>
                <?php  
                  foreach ($provinces as $province) {
                ?>
                  <option value="<?php echo htmlspecialchars($province->id_province, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($province->name_province, ENT_QUOTES, 'UTF-8'); ?></option>
                <?php   
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="id_district" class="col-sm-3 control-label">district</label>
            <div class="col-sm-5">
              <select class="form-control" id="id_district" name="id_district">
                 <option>---Chọn---</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="name_ward" class="col-sm-3 control-label">name_ward</label>
            <div class="col-sm-9">
              <input class="form-control" id="name_ward" name="name_ward" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="status" class="col-sm-3 control-label">status</label>
            <div class="col-sm-9 checkbox">
              <input class="" id="status" name="status" type="checkbox" value="1" style="margin-left: 0px;">
            </div>
          </div>
        </div>        
        <div class="box-footer">
          <div class="pull-right">
            <button type="Reset" class="btn btn-default">Reset</button>
            <!-- <button type="submit" name="listU" id="listU" class="btn btn-default">List User</button> -->
            <button type="submit" name="addNew" id="addNew" class="btn btn-info">Add New</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>