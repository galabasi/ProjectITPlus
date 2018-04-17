<div class="row">
	<div class="span12">
		<ul class="breadcrumb">
			<li><a href="index.php">Trang chủ</a> <span class="divider">/</span></li>
			<li class="active">Thông tin thanh toán</li>
		</ul>
		<div class="well well-small" id="cartList">
			<form action="" method="post" class="span12">
				<div class="span6" style="margin: 0px;">
					<h3>Thông tin người mua hàng</h3>
					<?php  
						if(isset($_SESSION['user'])){
							$address = $_SESSION['user']->address_user;
							$address.=", xã ". $ward->name_ward;
							$address.=", huyện ". $district->name_district;
							$address.=", tỉnh/thành phố ". $province->name_province;
					?>
					<div class="form-group">
						<label for="userName">Họ và tên:</label>
					    <input type="text" class="form-control" name="userName" id="userName" value="<?php echo $_SESSION['user']->name_user ?>" />
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
					    <input type="text" class="form-control" name="email" id="email" value="<?php echo $_SESSION['user']->mail_user ?>" />
					</div>
					<div class="form-group">
						<label for="mobile">Số điện thoại:</label>
					    <input type="text" class="form-control" name=mobile"" id="mobile" value="<?php echo $_SESSION['user']->phone_user ?>" />
					</div>
					<div class="form-group">
						<label for="address">Địa chỉ:</label>
					    <textarea name="address" id="address" cols="20" rows="5" value="<?php echo $address ?>"><?php echo $address ?></textarea>
					</div>
					<?php } ?>
				</div>
				
				<div class="span6" style="margin: 0px;">
					<h3>Thông tin người nhận hàng</h3>
					<div class="form-group">
						<label for="userName_rev">Họ và tên:</label>
					    <input type="text" class="form-control" id="userName_rev" name="userName_rev" placeholder="Tên" />
					</div>
					<div class="form-group">
						<label for="email_rev">Email:</label>
					    <input type="text" class="form-control" id="email_rev"  name="email_rev" placeholder="Email" />
					</div>
					<div class="form-group">
						<label for="mobile_rev">Số điện thoại:</label>
					    <input type="text" class="form-control" id="mobile_rev" name="mobile_rev" placeholder="Điện thoại" />
					</div>
					<div class="form-group">
						<label for="address_rev">Địa chỉ:</label>
					    
					    <textarea name="address_rev" id="address_rev" cols="20" rows="5" ></textarea>
					</div>
				</div>
				<div class="span12">
					<div class="checkbox">
					    <label>
					      <input type="checkbox" name="isSame" id="isSame" onchange="isChecked(this.id)">Thông tin mua hàng và nhận hàng giống nhau
					    </label>
					</div>
				</div>
			</form>
					
			<a href="cart" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Quay lại </a>
			<a href="" class="shopBtn btn-large pull-right">Thanh toán <span class="icon-arrow-right"></span></a>
		</div>
	</div>
</div>