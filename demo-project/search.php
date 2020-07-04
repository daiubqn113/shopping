<?php include 'header.php' ?>
<!-- Begin Login -->
<?php
$key = $_GET['key']; // laays id danh mucj
$products = mysqli_query($conn,"SELECT * FROM product WHERE name LIKE '%$key%'");
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
	

<!-- End Main -->
<?php include 'footer.php' ?>