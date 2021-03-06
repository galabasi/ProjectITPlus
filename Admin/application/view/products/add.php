<div class="row">
  <div class="col-md-6">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Thêm sản phẩm</h3>
      </div>
      <form class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="name_product" class="col-sm-3 control-label">Tên sản phẩm</label>
            <div class="col-sm-9">
              <input class="form-control" id="name_product" name="name_product" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="id_category" class="col-sm-3 control-label">Danh mục</label>
            <div class="col-sm-9">
                <select class="form-control" id="id_category" name="id_category">
                  <option>---Chọn---</option>
                <?php  
                  foreach ($categorys as $category) {
                ?>
                  <option value="<?php echo htmlspecialchars($category->id_category, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($category->name_category, ENT_QUOTES, 'UTF-8'); ?></option>
                <?php    
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="id_brand" class="col-sm-3 control-label">Nhãn hiệu</label>
            <div class="col-sm-9">
                <select class="form-control" id="id_brand" name="id_brand">
                  <option>---Chọn---</option>
                <?php  
                  foreach ($brands as $brand) {
                ?>
                  <option value="<?php echo htmlspecialchars($brand->id_brand, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($brand->name_brand, ENT_QUOTES, 'UTF-8'); ?></option>
                <?php    
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Giá</label>
            <div class="col-sm-9">
              <input class="form-control" id="price" name="price" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="sale" class="col-sm-3 control-label">Giảm giá(%)</label>
            <div class="col-sm-9">
              <input class="form-control" id="sale" name="sale" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Miêu tả</label>
            <div class="col-sm-9">
              <textarea name="description" id="description" rows="6" style="width: 100%; resize: none;" ></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="status" class="col-sm-3 control-label">Trạng thái</label>
            <div class="col-sm-9 checkbox">
              <input class="" id="status" name="status" type="checkbox" value="1" checked style="margin-left: 0px;">
            </div>
          </div>
        </div>        
        <div class="box-footer">
          <div class="pull-right">
            <button type="Reset" class="btn btn-default">Đặt lại</button>
            <!-- <button type="submit" name="listU" id="listU" class="btn btn-default">List User</button> -->
            <button type="submit" name="addNew" id="addNew" class="btn btn-info">Thêm</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>