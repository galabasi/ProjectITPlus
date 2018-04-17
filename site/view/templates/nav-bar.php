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
				 	<li  class="active"><a href="home">Trang chủ</a></li>
				 	<li  class=""><a href="shop">Cửa hàng</a></li>
					<li  class=""><a href="contact">Liên hệ với chúng tôi</a></li>
				</ul>
				<form action="#" class="navbar-search pull-left">
				 	<input type="text" placeholder="Tìm kiếm" class="search-query span2" autofocus="true">
				 	<input type="button" value="Tìm kiếm" class="btn-search btn" id="btn-search">
				</form>
				<ul class="nav pull-right">
					<li><a  href="register"><span class="icon-user"></span> Đăng ký </a></li>
					<li class="dropdown">
						<?php 
							if(!isset($_SESSION['user'])){
						?>
						<a  href="login"><span class="icon-lock"></span> Đăng nhập </a>
						<?php }else {?>
								<!-- <a  class="" href="profile"><span class="icon-lock"></span> Cá nhân </a> -->
								<a  class="" href="logout"><span class="icon-lock"></span> Đăng xuất </a>
							<?php } ?>
					</li>
				</ul>
		  </div>
		  
		</div>
	</div>
</div>