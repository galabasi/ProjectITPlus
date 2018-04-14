<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo URL; ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
      </div>
    </form>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>

      <li class="treeview active">
        <a href=""><i class="fa fa-link"></i> <span>User</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview active-menu">
          <li><a href="<?php echo URL; ?>users/adduser">Add User</a></li>
          <li><a href="<?php echo URL; ?>users">List User</a></li>
        </ul>
      </li>
      <li class="treeview active">
        <a href=""><i class="fa fa-link"></i> <span>Province</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview active-menu">
          <li><a href="<?php echo URL; ?>provinces/addprovince">Add Province</a></li>
          <li><a href="<?php echo URL; ?>provinces">List Province</a></li>
        </ul>
      </li>
      <li class="treeview active">
        <a href=""><i class="fa fa-link"></i> <span>District</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview active-menu">
          <li><a href="<?php echo URL; ?>districts/adddistrict">Add District</a></li>
          <li><a href="<?php echo URL; ?>districts">List District</a></li>
        </ul>
      </li>
      <li class="treeview active">
        <a href=""><i class="fa fa-link"></i> <span>Ward</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview active-menu">
          <li><a href="<?php echo URL; ?>wards/addward">Add Ward</a></li>
          <li><a href="<?php echo URL; ?>wards">List Ward</a></li>
        </ul>
      </li>
      <li class="treeview active">
        <a href=""><i class="fa fa-link"></i> <span>Product</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview active-menu">
          <li><a href="<?php echo URL; ?>products/addproduct">Add Product</a></li>
          <li><a href="<?php echo URL; ?>products">List Product</a></li>
        </ul>
      </li>
      <li class="treeview active <?php echo ($view=='addImage'||$view=='listImage')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>Image</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview active-menu">
          <li><a href="index.php?view=addImage">Add Image</a></li>
          <li><a href="index.php?view=listImage">List Image</a></li>
        </ul>
      </li>
      <li class="treeview active <?php echo ($view=='addBrand'||$view=='listBrand')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>Brand</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview active-menu">
          <li><a href="<?php echo URL; ?>brands/addbrand">Add Brand</a></li>
          <li><a href="<?php echo URL; ?>brands">List Brand</a></li>
        </ul>
      </li>
      <li class="treeview active <?php echo ($view=='addCategory'||$view=='listCategory')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>Category</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview active-menu">
          <li><a href="<?php echo URL; ?>categorys/addcategory">Add Category</a></li>
          <li><a href="<?php echo URL; ?>categorys">List Category</a></li>
        </ul>
      </li>

    </ul>
  </section>
</aside>