<?php include 'header.php' ?>
<!-- Begin Login -->
<?php
$id = $_GET['id']; // laays id danh mucj
$products = mysqli_query($conn,"SELECT * FROM product WHERE category_id = $id Order By rand() LIMIT 3");
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