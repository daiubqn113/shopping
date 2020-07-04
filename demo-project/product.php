<?php include 'header.php' ?>

<?php 
$id = $_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM product WHERE id = $id");
$pro = mysqli_fetch_assoc($query);
 ?>
	<div class="container">
		<hr>
		<div class="row">
			<div class="col-md-5">
					<a href="#" class="thumbnail">
						<img src="public/images/content/products/<?php echo $pro['image'];?>" alt="">
					</a>
			</div>
			<div class="col-md-7">
				<h2><?php echo $pro['name'];?></h2>
				<p> 
					Giá: <?php echo $pro['price'];?> Đ
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium assumenda itaque alias quos quibusdam dignissimos rerum fuga aliquam mollitia dolorum. Itaque accusantium saepe ratione maiores officiis eveniet quo quia aspernatur?
				</p>
				<p>
					<a href="" class="btn btn-primary">Giỏ hàng</a>
				</p>
			</div>
		</div>
	</div>

<?php include 'footer.php' ?>