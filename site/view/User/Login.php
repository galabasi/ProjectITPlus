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
              <div class="well well-small" ><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a></div>

            <a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
            <br>
            <br>
            <ul class="nav nav-list promowrapper">
            <li>
              <div class="thumbnail">
                <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                <img src="assets/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
                <div class="caption">
                  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
                </div>
              </div>
            </li>
            <li style="border:0"> &nbsp;</li>
            <li>
              <div class="thumbnail">
                <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                <img src="assets/img/shopping-cart-template.png" alt="shopping cart template">
                <div class="caption">
                  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
                </div>
              </div>
            </li>
            <li style="border:0"> &nbsp;</li>
            <li>
              <div class="thumbnail">
                <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                <img src="assets/img/bootstrap-template.png" alt="bootstrap template">
                <div class="caption">
                  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
                </div>
              </div>
            </li>
          </ul>

    </div>
     <div class="span9">
  <ul class="breadcrumb">
    <li><a href="index.php">Trang chủ</a> <span class="divider">/</span></li>
    <li class="active">Đăng nhập</li>
  </ul>
  <h3>ĐĂNG NHẬP</h3>  
  <hr class="soft"/>

  <div class="row">
    <div class="span4.5">
      <div class="well">
        <h5>CHƯA CÓ TÀI KHOẢN? ĐĂNG KÍ NGAY</h5><br/>
        Nhập email của bạn tại đây<br/><br/><br/>
        <form>
          <div class="control-group">
            <label class="control-label" for="inputEmail"> Địa chỉ E-mail</label>
            <div class="controls">
              <input class="span3"  type="text" placeholder="Email">
            </div>
          </div>
          <div class="controls">
            <button type="submit" class="btn block">Tạo tài khoản</button>
          </div>
        </form>
      </div>
    </div>
    <div class="span4 pull-right">
      <div class="well">
        <h5>ĐÃ CÓ TÀI KHOẢN?</h5>
        <form method="POST">
          <div class="control-group">
            <label class="control-label" for="inputEmail">Địa chỉ Email</label>
            <div class="controls">
              <input class="span3"  type="text" name="email" id="email" placeholder="Địa chỉ Email">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputPassword">Mật khẩu</label>
            <div class="controls">
              <input type="password" class="span3" name="password" id= "password" placeholder="Mật khẩu">
            </div>
          </div>
          <?php 
            if($a=="0"){
          ?>
          <span style="color: red">Sai thông tin đăng nhập</span>
          <?php } ?>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="defaultBtn" name="login" id="login" >Đăng nhập</button> <a href="#">Quên mật khẩu?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
 </div>
 </div>