<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
    <ul class="nav nav-list">
       <?php
         foreach ($category as $category) {
       ?>
       <li><a href=""><span class="icon-chevron-right"></span><?php echo htmlspecialchars($category->name_category, ENT_QUOTES, 'UTF-8');?></a></li>
       <?php } ?>
    </ul>
</div>

              <div class="well well-small alert alert-warning cntr">
                  <h2>50% Discount</h2>
                  <p>
                     only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
                  </p>
              </div>
 

    </div>
    <div class="span9">
  <ul class="breadcrumb">
    <li><a href="index.php">Trang chủ</a> <span class="divider">/</span></li>
    <li class="active">Đăng ký</li>
  </ul>
  <h3>ĐĂNG KÝ TÀI KHOẢN</h3>  
  <hr class="soft"/>
  <div class="well">
    <form class="form-horizontal">
      <h3>Thông tin cá nhân</h3>
      <div class="control-group">
        <label class="control-label">Danh xưng <sup>*</sup></label>
        <div class="controls">
          <select class="span1" name="gender" id="gender">
            <option value="">-</option>
            <option value="1">Anh</option>
            <option value="0">Chị</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="inputFname">Họ và tên <sup>*</sup></label>
        <div class="controls">
          <input type="text" id="inputFname" placeholder="Họ và tên">
        </div>
      </div>
      
      <div class="control-group">
        <label class="control-label" for="inputEmail">Email <sup>*</sup></label>
        <div class="controls">
          <input type="text" placeholder="Email">
        </div>
      </div>    
      <div class="control-group">
        <label class="control-label">Mật khẩu <sup>*</sup></label>
        <div class="controls">
          <input type="password" placeholder="Mật khẩu">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">Ngày sinh <sup>*</sup></label>
        <div class="controls">
          <div class="form-group">
            <div class='input-group date' id='datetimepicker'>
                <input type='date' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
            </div>
        </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">Địa chỉ <sup>*</sup></label>

        <div class="controls">
          
          <select class="span2" name="province">
            <option value="">Thành phố</option>
            <option value="1">1&nbsp;&nbsp;</option>
          </select>
          <select class="span2" name="district">
            <option value="">Quận/Huyện</option>
            <option value="1">1&nbsp;&nbsp;</option>
          </select>
          <select class="span2" name="ward">
            <option value="">Phường/Xã</option>
            <option value="1">1&nbsp;&nbsp;</option>
          </select> <br> <br>
          <input type="password" placeholder="Số nhà...">
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <input type="submit" name="submitAccount" value="Đăng ký" class="exclusive shopBtn">
        </div>
      </div>
    </form>
  </div>
</div>
</div>