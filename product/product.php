<?php 
	require('../Menu/config.php');

	$pro = "select product.id, product.name, product.price, product.sale_price, category.name as 'Danhmuc' from product join category on  product.category_id = category.id" or die('lỗi');
	$sql_P = mysqli_query($conn, $pro);

	// if (isset($_GET['id'])) {
	// 	$ID = $_GET['id'];

	// 	$product = "select * from product where id = '$id'";
	// 	$sql_p = mysqli_query($conn, $product);
	// }
 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="panel panel-default">
				<!-- Default panel contents -->
				<div class="panel-heading">Danh sách sản phẩm</div>
				<!-- Table -->
				<table class="table">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Price</th>
							<th>Price_sale</th>
							<th>Category</th>
						</tr>
						<?php while ($row = mysqli_fetch_array($sql_P)) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['price']; ?></td>
								<td><?php echo $row['sale_price']; ?></td>
								<td><?php echo $row['Danhmuc']; ?></td>
							</tr>
						<?php } ?>
				</table>
			</div>
		</div>
	</div>

	<script src="../bootstrap-3.4.1-dist/js/jquery.min.js" type="text/javascript"></script>
	<script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>