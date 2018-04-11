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
            
            <ul class="nav nav-list promowrapper">
            <li>
              <div class="thumbnail">
                <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                <img src="img/png4.png" alt="bootstrap ecommerce templates">
                <div class="caption">
                  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
                </div>
              </div>
            </li>
            <li style="border:0"> &nbsp;</li>
            <li>
              <div class="thumbnail">
                <a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                <img src="img/png2.png" alt="shopping cart template">
                <div class="caption">
                  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span></h4>
                </div>
              </div>
            </li>
            <li style="border:0"> &nbsp;</li>
            
          </ul>

    </div>
<div class="span9">
	<ul class="breadcrumb">
		<li><a href="index.php">Trang chủ</a> <span class="divider">/</span></li>
		<li><a href="products.html">Sản phẩm</a> <span class="divider">/</span></li>
		<li class="active">Xem hàng</li>
	</ul>	
	<div class="well well-small">
		<div class="row-fluid">
			<div class="span5">
				<div id="myCarousel" class="carousel slide cntr">
					<div class="carousel-inner">
						<div class="item active">
							<a href="#"> <img src="img/a.jpg" alt="" style="width:100%"></a>
						</div>
						<div class="item">
							<a href="#"> <img src="img/b.jpg" alt="" style="width:100%"></a>
						</div>
						<div class="item">
							<a href="#"> <img src="img/e.jpg" alt="" style="width:100%"></a>
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
				</div>
			</div>
			<div class="span7">
				<h3>Name of the Item [$140.00]</h3>
				<hr class="soft"/>
				
				<form class="form-horizontal qtyFrm">
					<div class="control-group">
						<label class="control-label"><span>$140.00</span></label>
						<div class="controls">
							<input type="number" class="span6" placeholder="Qty.">
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label"><span>Color</span></label>
						<div class="controls">
							<select class="span11">
								<option>Red</option>
								<option>Purple</option>
								<option>Pink</option>
								<option>Red</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><span>Materials</span></label>
						<div class="controls">
							<select class="span11">
								<option>Material 1</option>
								<option>Material 2</option>
								<option>Material 3</option>
								<option>Material 4</option>
							</select>
						</div>
					</div>
					<h4>100 items in stock</h4>
					<p>Nowadays the lingerie industry is one of the most successful business spheres.
						Nowadays the lingerie industry is one of ...
						<p>
							<button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
						</form>
					</div>
				</div>
				<hr class="softn clr"/>


				<ul id="productDetail" class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
					<li class=""><a href="#profile" data-toggle="tab">Related Products </a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Acceseries <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#cat1" data-toggle="tab">Category one</a></li>
							<li><a href="#cat2" data-toggle="tab">Category two</a></li>
						</ul>
					</li>
				</ul>
				<div id="myTabContent" class="tab-content tabWrapper">
					<div class="tab-pane fade active in" id="home">
						<h4>Product Information</h4>
						<table class="table table-striped">
							<tbody>
								<tr class="techSpecRow"><td class="techSpecTD1">Color:</td><td class="techSpecTD2">Black</td></tr>
								<tr class="techSpecRow"><td class="techSpecTD1">Style:</td><td class="techSpecTD2">Apparel,Sports</td></tr>
								<tr class="techSpecRow"><td class="techSpecTD1">Season:</td><td class="techSpecTD2">spring/summer</td></tr>
								<tr class="techSpecRow"><td class="techSpecTD1">Usage:</td><td class="techSpecTD2">fitness</td></tr>
								<tr class="techSpecRow"><td class="techSpecTD1">Sport:</td><td class="techSpecTD2">122855031</td></tr>
								<tr class="techSpecRow"><td class="techSpecTD1">Brand:</td><td class="techSpecTD2">Shock Absorber</td></tr>
							</tbody>
						</table>
						<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>

					</div>

				</div>
			</div>
		</div>
	</div>