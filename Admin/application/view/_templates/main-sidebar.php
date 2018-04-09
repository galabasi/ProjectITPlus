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

      <li class="treeview <?php echo ($view=='addUser'||$view=='listUser')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>User</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>users">List User</a></li>
          <li><a href="<?php echo URL; ?>users/adduser">Add User</a></li>
        </ul>
      </li>
      <li class="treeview <?php echo ($view=='addProvince'||$view=='listProvince')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>Province</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>provinces">List Province</a></li>
          <li><a href="index.php?view=addProvince">Add Province</a></li>
        </ul>
      </li>
      <li class="treeview <?php echo ($view=='addDistrict'||$view=='listDistrict')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>District</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo URL; ?>districts">List District</a></li>
          <li><a href="index.php?view=addDistrict">Add District</a></li>
        </ul>
      </li>
      <li class="treeview <?php echo ($view=='addWard'||$view=='listWard')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>Ward</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.php?view=listWard">List Ward</a></li>
          <li><a href="index.php?view=addWard">Add Ward</a></li>
        </ul>
      </li>
      <li class="treeview <?php echo ($view=='addProduct'||$view=='listProduct')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>Product</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.php?view=listProduct">List Product</a></li>
          <li><a href="index.php?view=addProduct">Add Product</a></li>
        </ul>
      </li>
      <li class="treeview <?php echo ($view=='addImage'||$view=='listImage')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>Image</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.php?view=listImage">List Image</a></li>
          <li><a href="index.php?view=addImage">Add Image</a></li>
        </ul>
      </li>
      <li class="treeview <?php echo ($view=='addBaner'||$view=='listBaner')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>Baner</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.php?view=listBaner">List Baner</a></li>
          <li><a href="index.php?view=addBaner">Add Baner</a></li>
        </ul>
      </li>
      <li class="treeview <?php echo ($view=='addBrand'||$view=='listBrand')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>Brand</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.php?view=listBrand">List Brand</a></li>
          <li><a href="index.php?view=addBrand">Add Brand</a></li>
        </ul>
      </li>
      <li class="treeview <?php echo ($view=='addCategory'||$view=='listCategory')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>Category</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.php?view=listCategory">List Category</a></li>
          <li><a href="index.php?view=addCategory">Add Category</a></li>
        </ul>
      </li>
      <li class="treeview <?php echo ($view=='addContent'||$view=='listContent')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>Content</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.php?view=listContent">List Content</a></li>
          <li><a href="index.php?view=addContent">Add Content</a></li>
        </ul>
      </li>
      <li class="treeview <?php echo ($view=='addParent'||$view=='listParent')?"active":"" ?>">
        <a href=""><i class="fa fa-link"></i> <span>Parent</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.php?view=listParent">List Parent</a></li>
          <li><a href="index.php?view=addParent">Add Parent</a></li>
        </ul>
      </li>

    </ul>
  </section>
</aside>