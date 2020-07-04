<?php include 'header.php' ?>
<!-- Begin Login -->
<div class="login-wrapper">
	<form id="form-login" role="form">
		<h4>Login</h4>
		<p>If you're a member, login here.</p>
		<div class="form-group">
			<label for="inputusername">Username</label>
			<input type="text" class="form-control input-lg" id="inputusername" placeholder="Username">
		</div>
		<div class="form-group">
			<label for="inputpassword">Password</label>
			<input type="password" class="form-control input-lg" id="inputpassword" placeholder="Password">
		</div>
		<ul class="list-inline">
			<li><a href="#">Create new account</a></li>
			<li><a href="#">Request new password</a></li>
		</ul>
		<button type="submit" class="btn btn-white">Log in</button>
	</form>
</div>
<!-- End Login -->
<?php 
$banner = mysqli_query($conn,"SELECT * FROM banner Order By name ASC");
?>
<!-- Begin Main -->
<div role="main" class="main">
	<!-- Begin Main Slide -->
	<section class="main-slide">

		<div id="owl-main-demo" class="owl-carousel main-demo">
	<?php foreach($banner as $bn) { ?>
			<div class="item" id="item1">
				<img src="public/uploads/<?php echo $bn['image'] ?>" class="img-responsive" alt="Photo">
				<div class="item-caption">
					<div class="item-caption-inner">
						<div class="item-caption-wrap">
							<h2><?php echo $bn['name'] ?></h2>
							<a href="" class="btn btn-white hidden-xs">Shop Now</a>	
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
	</section>
	<!-- End Main Slide -->
<?php 
$products = mysqli_query($conn,"SELECT * FROM product Order By rand() LIMIT 3");
?>
	<!-- Begin Ads -->
	<section class="ads">
		<div class="container">
			<div class="row">
			<?php foreach($products as $pro) { ?>
				<div class="col-xs-4 animation">
					<a href="product.php?id=<?php echo $pro['id'];?>"><img src="public/images/content/products/<?php echo $pro['image'];?>" class="img-responsive" alt="Ad"></a>
				</div>
			<?php } ?>
			</div>
		</div>
	</section>
<?php 
$top_sale = mysqli_query($conn,"SELECT * FROM product WHERE sale_price > 0 Order By rand() LIMIT 10");
?>
	<!-- End Ads -->
	<!-- Begin Top Selling -->
	<section class="products-slide">
		<div class="container">
			<h2 class="title"><span>Top Selling</span></h2>
			<div class="row">
				<div id="owl-product-slide" class="owl-carousel product-slide">
			<?php foreach($top_sale as $pro) { ?>
					<div class="col-md-12 animation">
						<div class="item product">
							<a href="shop-product-detail1.html">
								<span class="bag bag-cool">Cool</span>
							</a>
							<div class="product-thumb-info">
								<div class="product-thumb-info-image">
									<span class="product-thumb-info-act">
										<a href="product.php?id=<?php echo $pro['id'];?>" class="view-product">
											<span><i class="fa fa-external-link"></i></span>
										</a>
										<a href="shop-cart-full.html" class="add-to-cart-product">
											<span><i class="fa fa-shopping-cart"></i></span>
										</a>
									</span>
									<img alt="" class="img-responsive" src="public/images/content/products/<?php echo $pro['image'];?>">
								</div>
								<div class="product-thumb-info-content">
									<span class="price pull-right"><?php echo $pro['price'] ?> USD</span>
									<h4><a href="shop-product-detail2.html"><?php echo $pro['name'] ?></a></h4>
								</div>
							</div>
						</div>
					</div>

			<?php } ?>					
				</div>
			</div>
		</div>
	</section>

</div>
<!-- End Main -->
<?php include 'footer.php' ?>