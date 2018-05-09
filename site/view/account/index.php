<?php  
// echo("<pre>");
// print_r($_SESSION['user']);
// die();
?>
<div class="row">
	<div class="span12">
		<ul class="breadcrumb">
			<li><a href="home">Trang chủ</a> <span class="divider">/</span></li>
			<li class="active">Thông tin tài khoản</li>
		</ul>
		<div class="well well-small" id="cartList">
			<div class="well">
		<form class="form-horizontal" >
			<h3>Thông tin tài khoản</h3>
			<div class="control-group">
				<label class="control-label">Tên tài khoản</label>
				<div class="control-label" style="">
				  <b><?php echo($_SESSION['user']->name_user); ?></b>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Gmail</label>
				<div class="control-label">
				  <b><?php echo($_SESSION['user']->mail_user); ?></b>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Giới tính</label>
				<div class="control-label">
				  <b><?php echo($_SESSION['user']->gender); ?></b>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Số điện thoại</label>
				<div class="control-label">
				  <b><?php echo($_SESSION['user']->phone_user); ?></b>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Ngày sinh</label>
				<div class="control-label">
				  <b><?php echo($_SESSION['user']->birthday); ?></b>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Tỉnh</label>
				<div class="control-label">
				  <b><?php echo($_SESSION['user']->province_user); ?></b>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Huyện/Quận</label>
				<div class="control-label">
				  <b><?php echo($_SESSION['user']->district_user); ?></b>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Xã/Phường</label>
				<div class="control-label">
				  <b><?php echo($_SESSION['user']->ward_user); ?></b>
				</div>
			</div>
			<!-- <div class="control-group">
				<div class="controls">
				 <input type="submit" name="editAccount" value="Edit" class="exclusive shopBtn">
				</div>
			</div> -->
		</form>
</div>
			
		</div>
	</div>
</div>