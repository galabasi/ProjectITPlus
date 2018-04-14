<div class="row">
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Add User</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="user_name" class="col-sm-2 control-label">user_name</label>
            <div class="col-sm-10">
              <input class="form-control" id="name_user" name="name_user" type="text" required = "true">
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">email</label>
            <div class="col-sm-10">
              <input class="form-control" id="mail_user" name="mail_user" type="email" required = "true">
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-2 control-label">password</label>
            <div class="col-sm-10">
              <input class="form-control" id="password" name="password" type="password" required = "true">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">gender</label>
            <div class="col-sm-10">
              <label class="radio-inline"><input type="radio" id="male" name="gender" value="1" required = "true">Male</label>
              <label class="radio-inline"><input type="radio" id="female" name="gender" value="0" required = "true">Female</label>
            </div>
          </div>
          <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">phone</label>
            <div class="col-sm-10">
              <input class="form-control" name="phone_user" id="phone_user" type="text" required = "true">
            </div>
          </div>
          <div class="form-group">
            <label for="birthday" class="col-sm-2 control-label">birthday</label>
            <div class="col-sm-10">
              <input class="form-control" name="birthday" id="birthday" type="text" required = "true">
            </div>
          </div>
          <div class="form-group">
            <label for="address" class="col-sm-2 control-label">address</label>
            <div class="col-sm-10">
              <textarea name="address_user" id="address_user" rows="3" style="width: 100%; resize: none;" required = "true"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="province" class="col-sm-2 control-label">province</label>
            <div class="col-sm-10">
                <select class="form-control" id="province_user" name="province_user" onchange="getDistrict(this.value, 0, 'district_user')" required = "true">
                  <option value="">---Chọn---</option>
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
            <label for="district_id" class="col-sm-2 control-label">district</label>
            <div class="col-sm-10">
              <select class="form-control" id="district_user" name="district_user" onchange="getWard(this.value, 0, 'ward_user')"  required = "true">
                 <option value="">---Chọn---</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="ward" class="col-sm-2 control-label">ward</label>
            <div class="col-sm-10">
              <select class="form-control" id="ward_user" name="ward_user" required = "true">
                <option value="">---Chọn---</option>
              </select>
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