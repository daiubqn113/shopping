<?php
	require('config.php');

	$category = 'select * from category';
	$sql_C = mysqli_query($conn, $category);

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
	<nav class="navbar navbar-inverse">
		<div class="container">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="../index.php">Home</a>
				</li>
				<li>
					<a href="Menu/infor_menu.php">Menu</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="active">
					<a href="#">Login</a>
				</li>
				<li>
					<a href="#">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="panel panel-primary ">
				<div class="panel-body text-center">
					<h4 class="">Danh sách sản phẩm.</h4>
				</div>
				<form action="" method="" >
					<div class="container">
						<table cellpadding="1" cellpadding="1" border="1" class="table table-striped">
							<tr>
								<td>ID</td>
								<td>Name</td>
								<td><a href="add.php"> Thêm </a></td>
							</tr>
							<?php while ($row = mysqli_fetch_assoc($sql_C)) { ?>
								<tr>
									<td ><a href="../product/product.php" ><?php echo $row['id']; ?></a></td>
									<td><a href="../product/product.php"><?php echo $row['name']; ?></a> </td>
									<td><a href="xoa.php?id= <?php echo $row['id']; ?>" class = "		btn-sm btn-success "> Xóa</a>
										<a href="update.php?id= <?php echo $row['id']; ?>" class="btn-sm btn-primary"> Cập Nhật</a></td>
								</tr>
							<?php } ?>
						</table>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="../bootstrap-3.4.1-dist/js/jquery.min.js" type="text/javascript"></script>
	<script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>