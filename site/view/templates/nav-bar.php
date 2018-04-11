<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
			 <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			 </a>
		  <div class="nav-collapse">
				<ul class="nav">
				 	<li class="<?php if($view == "") echo "active" ?>"><a href="<?php echo URL; ?>home">Trang chủ</a></li>
				 	<li class="<?php if($view == "shop") echo "active" ?>"><a href="<?php echo URL; ?>shop">Cửa hàng</a></li>
					<li class="<?php if($view == "contact") echo "active" ?>"><a href="<?php echo URL; ?>contact">Liên hệ với chúng tôi</a></li>
				</ul>
				<form action="#" class="navbar-search pull-left">
				 	<input type="text" placeholder="Tìm kiếm" class="search-query span2" autofocus="true">
				 	<input type="button" value="Tìm kiếm" class="btn-search btn" id="btn-search">
				</form>
				<ul class="nav pull-right">
					<li><a  class="" href="register"><span class="icon-user"></span> Đăng ký </a></li>
					<li class="dropdown">
						<a  class="" href="login"><span class="icon-lock"></span> Đăng nhập </a>
						
					</li>
				</ul>
		  </div>
		</div>
	</div>
</div>